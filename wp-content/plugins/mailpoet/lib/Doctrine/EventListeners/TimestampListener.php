<?php // phpcs:ignore SlevomatCodingStandard.TypeHints.DeclareStrictTypes.DeclareStrictTypesMissing

namespace MailPoet\Doctrine\EventListeners;

if (!defined('ABSPATH')) exit;


use MailPoet\Doctrine\EntityTraits\CreatedAtTrait;
use MailPoet\Doctrine\EntityTraits\UpdatedAtTrait;
use MailPoet\WP\Functions as WPFunctions;
use MailPoetVendor\Carbon\Carbon;
use MailPoetVendor\Doctrine\ORM\Event\LifecycleEventArgs;
use ReflectionObject;

class TimestampListener {
  /** @var WPFunctions */
  private $wp;

  public function __construct(
    WPFunctions $wp
  ) {
    $this->wp = $wp;
  }

  public function prePersist(LifecycleEventArgs $eventArgs) {
    $entity = $eventArgs->getEntity();
    $entityTraits = $this->getEntityTraits($entity);
    $now = $this->getNow();

    if (
      in_array(CreatedAtTrait::class, $entityTraits, true)
      && method_exists($entity, 'setCreatedAt')
      && method_exists($entity, 'getCreatedAt')
      && !$entity->getCreatedAt()
    ) {
      $entity->setCreatedAt(clone $now);
    }

    if (in_array(UpdatedAtTrait::class, $entityTraits, true) && method_exists($entity, 'setUpdatedAt')) {
      $entity->setUpdatedAt(clone $now);
    }
  }

  public function preUpdate(LifecycleEventArgs $eventArgs) {
    $entity = $eventArgs->getEntity();
    $entityTraits = $this->getEntityTraits($entity);

    if (in_array(UpdatedAtTrait::class, $entityTraits, true) && method_exists($entity, 'setUpdatedAt')) {
      $entity->setUpdatedAt($this->getNow());
    }
  }

  private function getEntityTraits($entity) {
    $entityReflection = new ReflectionObject($entity);
    return $entityReflection->getTraitNames();
  }

  private function getNow(): \DateTimeInterface {
    return Carbon::createFromTimestamp($this->wp->currentTime('timestamp'));
  }
}
