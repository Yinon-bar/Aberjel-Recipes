<?php get_header('transparent') ?>

<?php
$obj = get_queried_object();
echo "dfgsdf" . $cat = $obj->cat_name; ?>

<div class="front-page">
    <div class="container">
        <section class="newest-recipes">
            <h2>המתכונים הבשריים המנצחים של אמא</h2>
            <?php
            $category_recipes = new WP_Query(array(
                'posts_per_page' => 4,
                'post_type' => 'recipes',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'טוקסונומיות',
                        'field' => 'food_category',
                        'terms' => 'בשרי'
                    )
                ),
                // 'category_name' => wp_title('')
            ));
            // echo wp_title();
            ?>
            <div class="cards">
                <?php
                while ($category_recipes->have_posts()) {
                    $category_recipes->the_post();
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