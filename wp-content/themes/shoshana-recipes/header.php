<!DOCTYPE html>
<html lang="he">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

    <header class="header">
        <nav class="transparent-nav">
            <?php wp_nav_menu('header-menu') ?>
        </nav>
        <?php
        if ($pageBanner = get_field('page_image')) { ?>
            <div class="page-banner" style="background: linear-gradient(rgb(0, 0, 0, 0.6), rgb(0, 0, 0, 0.6)),
                url(<?php echo $pageBanner['sizes']['banner'] ?>);">
                <div class="container">
                    <h3><?php the_field('page_headline') ?></h3>
                    <p><?php the_field('page_banner_paragraph'); ?></p>
                    <form method="get" action="<?php echo esc_url(site_url('/')) ?>">
                        <input type="search" name="s" id="" placeholder="הקלד מילה לחיפוש">
                        <input type="submit" value="חיפוש מתכון">
                    </form>
                </div>
            </div>
        <?php };
        ?>
    </header>