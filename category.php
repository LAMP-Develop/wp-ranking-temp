<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri().'/dist/';
get_header(); ?>
<div class="towcolumn sec">
<div class="container">
<div class="main">
<div class="blog-list">
<?php if (have_posts()): while (have_posts()):
the_post();
$id = get_the_ID();
$t = get_the_title();
$p = get_the_permalink();
$thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'medium');
?>
<a class="blog-list__inner" href="<?php echo $p; ?>">
<div class="blog-list__inner__thumbnail">
<img src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
</div>
<div class="blog-list__inner__info">
<h3><?php echo $t; ?></h3>
<p class="d-md-block d-none"><?php echo mb_substr(strip_tags(get_the_content()), 0, 90).'...'; ?></p>
<p class="text-right small mb-0 mt-3"><span><?php the_time('Y-m-d'); ?></span></p>
</div>
</a>
<?php endwhile; endif; ?>
</div>
</div>
<!-- main -->
<div class="side">
<?php get_sidebar(); ?>
</div>
<!-- side -->
</div>
<!-- container -->
</div>
<!-- towcolumn -->
<?php get_footer();
