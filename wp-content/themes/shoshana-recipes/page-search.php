<?php get_header('transparent') ?>

<div class="page-search">
    <h1>עמוד חיפוש</h1>
    <form method="get" action="<?php echo esc_url(site_url('/')) ?>">
        <input type="search" name="s" id="">
        <input type="submit" value="Search">
    </form>
</div>


<?php get_footer() ?>