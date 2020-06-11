<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri().'/dist/';
get_header(); ?>
<div class="towcolumn sec">
<div class="container">
<div class="main">
<div class="blog-main">
<?php if (have_posts()): while (have_posts()):
the_post();
$id = get_the_ID();
$t = get_the_title();
$p = get_the_permalink();
$thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
?>
<article>
<figure class="d-block mb-4 p-0">
<img class="w-100" src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
</figure>
<h2 class="font-weight-bold h3 mb-3"><?php echo $t; ?></h2>
<time class="d-block small text-right" data-time="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
<div class="blog-main__inner">
<?php the_content(); ?>
</div>
</article>
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
