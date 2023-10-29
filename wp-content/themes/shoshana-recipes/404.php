<?php get_header('transparent') ?>

<?php

// $desc = category_description(get_category_by_slug($cat)->term_id);
?>
<div class="archive">
    <div class="page-banner" style="background: linear-gradient(rgb(0, 0, 0, 0.6), rgb(0, 0, 0, 0.6)),
                    url(<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>);">
        <div class="container">
            <h2><?php echo $cat ?></h2>
            <!-- <p><?php echo $desc ?></p> -->
            <form method="get" action="<?php echo esc_url(site_url('/')) ?>">
                <input type="search" name="s" id="" placeholder="הקלד מילה לחיפוש">
                <input type="submit" value="חיפוש מתכון">
            </form>
        </div>
    </div>
    <div class="container">
        <section class="newest-recipes">
            <h1>404</h1>
        </section>
    </div>
</div>


<?php get_footer() ?>