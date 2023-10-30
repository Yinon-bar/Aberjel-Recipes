<?php get_header('transparent') ?>

<?php
$obj = get_queried_object();
$cat = $obj->name;
$category_recipes = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'recipes',
    'tax_query' => array(
        array(
            'taxonomy' => 'type',
            'field' => 'slug',
            'terms' => $cat,
        )
    )
));
$desc = category_description();
// echo "<pre>";
// print_r($obj);
// echo "</pre>";
// echo get_field("subtitle", $obj);
?>

<div class="archive">
    <div class="page-banner" style="background: linear-gradient(rgb(0, 0, 0, 0.6), rgb(0, 0, 0, 0.6)),
                    url(<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>);">
        <div class="container">
            <h2><?php echo the_field('subtitle', $obj) ?></h2>
            <p><?php echo $desc ?></p>
            <form method="get" action="<?php echo esc_url(site_url('/')) ?>">
                <input type="search" name="s" id="" placeholder="הקלד מילה לחיפוש">
                <input type="submit" value="חיפוש מתכון">
            </form>
        </div>
    </div>
    <div class="container">
        <section class="newest-recipes">
            <div class="cards">
                <?php
                while ($category_recipes->have_posts()) {
                    $category_recipes->the_post(); ?>
                    <div class="card">
                        <?php $image = get_field('recipe_image') ?>
                        <div class="card-image" style="background-image: url(<?php echo esc_url($image[0]['url']); ?>);">
                        </div>
                        <div class="card-body">
                            <h3><?php the_field('title') ?></h3>
                            <div class="badge"><span class="time"><?php the_field('time') ?></span>
                                דקות הכנה
                            </div>
                            <a class="link" href="<?php the_permalink() ?>">קרא עוד</a>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
        </section>
    </div>
</div>


<?php get_footer() ?>