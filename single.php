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
$terms = get_the_terms($id, 'merchant_tag');
// var_dump($tems);
// ACF取得
$name = get_field('merchant_name');
$explanation = get_field('merchant_explanation');
$area = get_field('merchant_area');
$genre = get_field('merchant_genre');
$tel = get_field('merchant_tel');
$url = get_field('merchant_url');
if ($temp === 1) {
    $point = [];
    for ($i=1; $i <= 3; $i++) {
      $point[get_field('merchant_point_ttl_'.$i)] = get_field('merchant_point_txt_'.$i);
    }
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
<?php get_sidebar(); ?>
<?php get_footer();