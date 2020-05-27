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
<div class="single">
<div class="single__merchant__info">
<div class="single__merchant__info-wrap">
<div class="single__merchant__info-thumbnail">
<img src="<?php echo $img; ?>" alt="<?php echo $t; ?>">
</div>
<div class="single__merchant__info-txt">
<h3><?php echo $t; ?></h3>
<table>
<tbody>
<tr>
<th>対応エリア</th>
<td><?php echo $area; ?></td>
</tr>
<tr>
<th>建物の種類</th>
<td><?php echo $genre; ?></td>
</tr>
</tbody>
</table>
</div>
</div>
<p class="mt-3 mb-0"><?php the_field('merchant_explanation'); ?></p>
</div>
<!-- single__merchant__info -->
<div class="mt-5 px-md-4">
<div class="merchant__inner__cta">
<a class="merchant__inner__cta-tel" href="tel:<?php echo $tel; ?>">
<img class="img-switch" src="<?php echo $wp_url; ?>/images/btn_balloon_pc.png" alt="" srcset="<?php echo $wp_url; ?>/images/btn_balloon_pc.png 1x, <?php echo $wp_url; ?>/images/btn_balloon_pc@2x.png 2x">
<span>TEL <?php echo $tel; ?></span></a>
<a class="merchant__inner__cta-contact" href="<?php echo $url; ?>">フォームからお問い合わせ</a>
</div>
</div>
<!-- merchant__inner__cta -->
<div class="single__merchant__menu">
<a class="active" href="#menu1">評価</a>
<a href="#menu2">施工事例</a>
<a href="#menu3">会社情報</a>
<a href="#menu4">口コミ</a>
<a href="#menu5">おすすめ情報</a>
</div>
<!-- single__merchant__menu -->
<div id="menu1" class="single__merchant__menu__inner">
<h3>評価</h3>
<div class="single__merchant__menu__inner__wrap">
<canvas id="chart" class="mb-3"></canvas>
<?php if (get_field('merchant_point_ttl_1')): ?>
<div class="merchant__inner__point">
<table>
<tbody>
<?php for ($i=1; $i <= 3; $i++): ?>
<tr>
<th><span>POINT<?php echo $i; ?></span><?php the_field('merchant_point_ttl_'.$i); ?></th>
<td><?php the_field('merchant_point_txt_'.$i); ?></td>
</tr>
<?php endfor; ?>
</tbody>
</table>
</div>
<?php endif; ?>
</div>
</div>
<!-- menu1 -->
<?php if (get_field('merchant_work_before_1')): ?>
<div id="menu2" class="single__merchant__menu__inner">
<h3>施工事例</h3>
<div class="single__merchant__menu__inner__wrap">
<div class="single__merchant__menu__inner__wrap-case">
<div class="single__merchant__menu__inner__wrap-case-img">
<div id="case1" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#case1" data-slide-to="0" class="active"></li>
<li data-target="#case1" data-slide-to="1"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active"><img src="<?php the_field('merchant_work_before_1'); ?>" alt=""></div>
<div class="carousel-item"><img src="<?php the_field('merchant_work_after_1'); ?>" alt=""></div>
</div>
<a class="carousel-control-prev" href="#case1" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
<a class="carousel-control-next" href="#case1" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
</div>
<!-- case1 -->
<p class="mt-3 mb-0 font-weight-bold"><?php the_field('merchant_work_ttl_1'); ?></p>
</div>
<div class="single__merchant__menu__inner__wrap-case-img">
<div id="case2" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#case2" data-slide-to="0" class="active"></li>
<li data-target="#case2" data-slide-to="1"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active"><img src="<?php the_field('merchant_work_before_2'); ?>" alt=""></div>
<div class="carousel-item"><img src="<?php the_field('merchant_work_after_2'); ?>" alt=""></div>
</div>
<a class="carousel-control-prev" href="#case2" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
<a class="carousel-control-next" href="#case2" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
</div>
<!-- case2 -->
<p class="mt-3 mb-0 font-weight-bold"><?php the_field('merchant_work_ttl_2'); ?></p>
</div>
<div class="single__merchant__menu__inner__wrap-case-img">
<div id="case3" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#case2" data-slide-to="0" class="active"></li>
<li data-target="#case3" data-slide-to="1"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active"><img src="<?php the_field('merchant_work_before_3'); ?>" alt=""></div>
<div class="carousel-item"><img src="<?php the_field('merchant_work_after_3'); ?>" alt=""></div>
</div>
<a class="carousel-control-prev" href="#case3" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
<a class="carousel-control-next" href="#case3" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
</div>
<!-- case3 -->
<p class="mt-3 mb-0 font-weight-bold"><?php the_field('merchant_work_ttl_3'); ?></p>
</div>
</div>
</div>
</div>
<!-- menu2 -->
<?php endif; ?>
<div id="menu3" class="single__merchant__menu__inner">
<h3>会社情報</h3>
<div class="single__merchant__menu__inner__wrap table-wrap">
<?php the_field('merchant_company'); ?>
</div>
</div>
<!-- menu3 -->
<?php if (get_field('merchant_reviews_ttl_1')): ?>
<div id="menu4" class="single__merchant__menu__inner">
<h3>口コミ</h3>
<div class="single__merchant__menu__inner__wrap">
<div class="review">
<div class="review__inner">
<h4><?php the_field('merchant_reviews_ttl_1'); ?></h4>
<p><?php the_field('merchant_reviews_txt_1'); ?></p>
</div>
<div class="review__inner">
<h4><?php the_field('merchant_reviews_ttl_2'); ?></h4>
<p><?php the_field('merchant_reviews_txt_2'); ?></p>
</div>
<div class="review__inner">
<h4><?php the_field('merchant_reviews_ttl_3'); ?></h4>
<p><?php the_field('merchant_reviews_txt_3'); ?></p>
</div>
</div>
</div>
</div>
<!-- menu4 -->
<?php endif; ?>
<?php if (get_field('merchant_recommend')): ?>
<div id="menu5" class="single__merchant__menu__inner">
<h3>おすすめ情報</h3>
<div class="single__merchant__menu__inner__wrap">
<?php the_field('merchant_recommend'); ?>
</div>
</div>
<!-- menu5 -->
<?php endif; ?>
<div class="mt-5 px-md-4">
<div class="merchant__inner__cta">
<a class="merchant__inner__cta-tel" href="tel:<?php echo $tel; ?>">
<img class="img-switch" src="<?php echo $wp_url; ?>/images/btn_balloon_pc.png" alt="" srcset="<?php echo $wp_url; ?>/images/btn_balloon_pc.png 1x, <?php echo $wp_url; ?>/images/btn_balloon_pc@2x.png 2x">
<span>TEL <?php echo $tel; ?></span></a>
<a class="merchant__inner__cta-contact" href="<?php echo $url; ?>">フォームからお問い合わせ</a>
</div>
</div>
</div>
<!-- single -->
</div>
<div class="side">
<?php get_sidebar(); ?>
</div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
<script>
let ctx = document.getElementById("chart");
let times = 0;
if (window.innerWidth > 768) {
  times = 0.1;
} else {
  times = 0.05;
}
ctx.width = window.innerWidth * 0.1;
ctx.height = window.innerHeight * times;
let radar_chart = new Chart(ctx, {
  type: "radar",
  data: {
    labels: [
      "<?php echo get_field_object('merchant_val_1')['label']; ?>",
      "<?php echo get_field_object('merchant_val_2')['label']; ?>",
      "<?php echo get_field_object('merchant_val_3')['label']; ?>",
      "<?php echo get_field_object('merchant_val_4')['label']; ?>",
      "<?php echo get_field_object('merchant_val_5')['label']; ?>",
    ],
    datasets: [{
      label: "評価",
      data: [
        <?php the_field('merchant_val_1'); ?>,
        <?php the_field('merchant_val_2'); ?>,
        <?php the_field('merchant_val_3'); ?>,
        <?php the_field('merchant_val_4'); ?>,
        <?php the_field('merchant_val_5'); ?>
      ],
      borderWidth: 1,
      borderColor: 'rgb(232, 71, 0)',
      pointBackgroundColor: 'rgb(232, 71, 0)',
      backgroundColor: 'rgba(232, 71, 0, 0.6)'
    }],
  },
  options: {
      title: {
        display: false,
      },
      legend: {
        display: false
      },
      scale: {
        ticks: {
          beginAtZero: true,
          precision: 5
        }
      }
    }
});
</script>
<?php endwhile; endif; ?>
<?php get_footer();
