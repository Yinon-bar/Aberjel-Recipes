<!DOCTYPE html>
<html lang="he">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

    <header class="transparent-header">
        <nav class="transparent-nav">
            <div class="container">
                <div class="btns">
                    <?php if (is_user_logged_in()) { ?>
                        <a href="<?php echo wp_login_url() ?>">התנתק</a>
                    <?php } else { ?>
                        <a href="<?php echo site_url('/wp-signup.php') ?>">הירשם</a>
                        <a href="<?php echo site_url('/wp-login.php') ?>">התחבר</a>
                    <?php } ?>
                </div>
                <?php wp_nav_menu('header-menu') ?>
                <div class="btns">
                </div>
            </div>
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