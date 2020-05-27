<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri().'/dist/';
get_header();

if (have_posts()):
while (have_posts()): the_post();
$id = get_the_ID();
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $img = get_the_post_thumbnail_url($id, 'medium');
}
?>
<section class="mv-suv">
<div class="container">
<h2><span><?php echo $t; ?></span></h2>
</div>
</section>
<div class="towcolumn sec">
<div class="container">
<div class="main">
</div>
<div class="side">
<?php get_sidebar(); ?>
</div>
</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer();