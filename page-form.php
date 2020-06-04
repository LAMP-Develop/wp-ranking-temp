<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri().'/dist/';
get_header(); the_post(); ?>
<section class="mv-suv">
<div class="container">
<h2><span><?php the_title(); ?></span></h2>
</div>
</section>
<div class="towcolumn sec">
<div class="container">
<div class="main">
<?php the_content(); ?>
</div>
<div class="side">
<?php get_sidebar(); ?>
</div>
</div>
</div>
<?php get_footer();
