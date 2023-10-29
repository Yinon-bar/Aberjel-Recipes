<?php get_header('transparent') ?>

<div class="front-page">
    <div class="container">
        <section class="newest-recipes">
            <h2>המתכונים הבשריים המנצחים של אמא</h2>
            <?php
            $cat = 'meat';
            $category_recipes = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'recipes',
                'category_name' => $cat
            ));
            ?>
            <div class="cards">
                <?php
                while ($category_recipes->have_posts()) {
                    $category_recipes->the_post();
                    $post_categories = get_the_category();
                    print_r($post_categories);
                ?>
                    <div class="card">
                        <div class="card-image">
                            <?php the_post_thumbnail('card') ?>
                        </div>
                        <div class="card-body">
                            <div class="badge"><span class="time"><?php the_field('time') ?></span>
                                דקות הכנה
                            </div>
                            <h3><?php the_field('title') ?></h3>
                            <a class="link" href="<?php the_permalink() ?>">קרא עוד</a>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
        </section>
        <section class="see-also">
            <h2>גם יכול לעניין</h2>
        </section>
    </div>
</div>


<?php get_footer() ?>