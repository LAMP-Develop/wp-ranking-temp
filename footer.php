<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

</main>
<footer class="footer py-3">
<div class="container">
<div class="footer__links">
<div class="footer__links-link mb-md-0 mb-3">
<!-- <a href="<?php echo $home; ?>/sitemap/">サイトマップ</a> -->
<a href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a>
<!-- <a href="<?php echo $home; ?>/">お問い合わせ</a> -->
</div>
<div class="footer__links-copy">
<p>©2020 <?php bloginfo("name"); ?></p>
</div>
</div>
</div>
</footer>

<a class="fix-btn" href="https://mie-sumai.net/merchant/kowarsu/"><img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/fix_btn_pc.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/fix_btn_pc.png 1x, <?php echo $wp_url; ?>/dist/images/fix_btn_pc@2x.png 2x"></a>

<?php wp_footer(); ?>
</body>
</html>