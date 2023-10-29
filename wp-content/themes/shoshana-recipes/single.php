<?php get_header('transparent') ?>

<div class="single">
    <div class="container">
        <div class="cards">
            <?php
            while (have_posts()) {
                the_post();
            ?>
                <div class="card">
                    <div class="card-image" style="background-image: url('<?php echo the_post_thumbnail_url() ?>');">
                    </div>
                    <div class="card-body">
                        <h1><?php the_field('title') ?></h1>
                        <p class="time-to-cook"><?php the_field('time') ?> דקות הכנה</p>
                        <h3>מצרכים:</h3>
                        <ul>
                            <?php
                            foreach (get_field('product1') as $x => $value) { ?>
                                <li><?php echo (get_field('product1')[$x]['single_product']) ?></li>
                            <?php } ?>
                        </ul>
                        <h3>הוראות הכנה:</h3>
                        <p class="instructions"><?php the_field('products') ?></p>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</div>


<?php get_footer() ?>