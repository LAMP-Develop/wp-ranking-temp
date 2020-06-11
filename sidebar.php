<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

<div class="side__inner">
<h3 class="side__inner-ttl">内装解体業者選びのおすすめ情報</h3>
<div class="blog-list">
<?php
$arg = [
  'posts_per_page' => 5,
  'orderby' => 'date',
  'order' => 'DESC',
];
$posts = get_posts($arg);
foreach ($posts as $post):
setup_postdata($post);
$id = get_the_ID();
$t = get_the_title();
$p = get_the_permalink();
$thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
?>
<a class="blog-list__inner" href="<?php echo $p; ?>">
<div class="blog-list__inner__thumbnail">
<img src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
</div>
<div class="blog-list__inner__info">
<h3><?php echo $t; ?></h3>
<p class="text-right small mb-0 mt-3"><span><?php the_time('Y-m-d'); ?></span></p>
</div>
</a>
<?php endforeach; wp_reset_postdata(); ?>
<?php if(count($posts) === 0): ?>
<p class="mb-0">まだ投稿されていません</p>
<?php endif; ?>
</div>
</div>

<div class="side__inner">
<h3 class="side__inner-ttl">その他の比較情報を見る</h3>
<p class="mb-0">まだ投稿されていません</p>
</div>
