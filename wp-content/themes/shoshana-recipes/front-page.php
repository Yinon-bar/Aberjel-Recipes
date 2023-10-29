<?php get_header('transparent') ?>

<div class="front-page">
    <div class="container">
        <section class="newest-recipes">
            <h2>המתכונים החדשים ביותר</h2>
            <?php
            $last_recipes = new WP_Query(array(
                'posts_per_page' => 4,
                'post_type' => 'recipes',
            ));
            ?>
            <div class="cards">
                <?php
                while ($last_recipes->have_posts()) {
                    $last_recipes->the_post();
                ?>
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
                <?php } ?>
            </div>
        </section>
        <section class="see-also">
            <h2>גם יכול לעניין</h2>
        </section>
    </div>
</div>


<?php get_footer() ?>