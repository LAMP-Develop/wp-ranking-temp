<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri().'/dist/';
get_header(); ?>
<section class="mv">
<img class="w-100 border-0 img-switch" src="<?php echo $wp_url; ?>/images/mv_pc.png" alt="<?php bloginfo("name"); ?>" srcset="<?php echo $wp_url; ?>/images/mv_pc.png 1x, <?php echo $wp_url; ?>/images/mv_pc@2x.png 2x">
</section>
<!-- mv -->

<div class="towcolumn sec">
<div class="container">
<div class="main">
<section class="read">
<div class="read__wrap">
<div class="read__wrap__inner">
<h2 class="read__wrap__inner-ttl"><img src="<?php echo $wp_url; ?>/images/about_ttl_pc.png" alt="業者比較" srcset="<?php echo $wp_url; ?>/images/about_ttl_pc.png 1x, <?php echo $wp_url; ?>/images/about_ttl_pc@2x.png 2x"></h2>
<div class="read__wrap__inner-star"><img src="<?php echo $wp_url; ?>/images/about_star.png" alt="星" srcset="<?php echo $wp_url; ?>/images/about_star.png 1x, <?php echo $wp_url; ?>/images/about_star@2x.png 2x"></div>
<h3 class="read__wrap__inner-h3">あなたの内装解体業者探しをお手伝い</h3>
<p class="read__wrap__inner-p">徹底した自社検証と専門家の声をもとにおすすめ情報を用意しました徹底した自社検証と専門家の声をもとにおすすめ情報を用意しました徹底した自社検証と専門家の声をもとにおすすめ情報を用意しました徹底した自社検証と専門家の声をもとにおすすめ情報を用意しました徹底した自社検証と専門家の声をもとにおすすめ情報を用意しました徹底した自社検証と専門家の声をもとにおすすめ情報を用意しました</p>
</div>
</div>
</section>

<?php get_template_part('templates/merchant'); ?>

<div id="seotxt" class="py-4 my-4 border-top">
<?php the_content(); ?>
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
