<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

</main>
<footer class="footer py-3">
<div class="container">
<div class="footer__links">
<div class="footer__links-link">
<a href="<?php echo $home; ?>/">サイトマップ</a>
<a href="<?php echo $home; ?>/">プライバシーポリシー</a>
<a href="<?php echo $home; ?>/">お問い合わせ</a>
</div>
<div class="footer__links-copy">
<p>©2020 <?php bloginfo("name"); ?></p>
</div>
</div>
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>