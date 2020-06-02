<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri().'/dist/'; ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php if (get_post_type() === 'merchant'): ?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
<?php endif; ?>
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168095299-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-168095299-1');
</script>
<?php endif; ?>
</head>
<body>
<!-- ヘッダー -->
<header class="header sticky-top shadow-sm p-3">
<div class="conatiner">
<div class="header__logo">
<div class="header__logo-img"><img src="<?php echo $wp_url; ?>/images/logo_icon.png" alt="<?php bloginfo("name")?>" srcset="<?php echo $wp_url; ?>/images/logo_icon.png 1x, <?php echo $wp_url; ?>/images/logo_icon@2x.png 2x"></div>
<h1 class="header__logo-ttl"><a href="<?php echo $home; ?>">内装解体の<br class="d-md-none">業者・会社の比較サイト<span>大阪</span></a></h1>
</div>
</div>
</header>
<!-- ヘッダー終了 -->

<!-- メインコンテンツ -->
<main>
