<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="<?php echo get_template_directory_uri(); ?>/reset.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
  
  <!-- [swiper]用読み込み -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <?php 
  wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');
  wp_enqueue_script('jquery');
  wp_enqueue_script('kappa008-main', get_template_directory_uri(). '/assets/js/main.js');
  wp_enqueue_style( 'wp-pagenavi', $css_file, false, '2.70' );
  wp_head(); 
  ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header_pc">
    <div class="header_inner">
      <div class="header_logo">
        <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/header.png" alt="かっぱ手芸店"></a></h1>
      </div>

      <div class="header_desc">
        <p><?php bloginfo('description'); ?></p>
      </div>

      <?php get_search_form(); ?>
    </div>

    <div class="header_links">
      <nav class="gnav_pc">
        <?php
        $args = array(
          'menu' => 'global-navigation', //管理画面で作成したメニューの名前
          'menu_class' => '', //メニューを構成するulタグのクラス名
          'container' => false, //<ul>タグを囲んでいる<div>タグを削除  
        );
        wp_nav_menu($args);
        ?>
      </nav>

      <ul class="header_sns">
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
      </ul>
    </div>

    <svg class="header_menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
			width="30" height="30" viewBox="0 0 30 30">
			<defs>
				<clipPath id="clip-path">
					<rect width="30" height="30" fill="none" />
				</clipPath>
			</defs>
			<g clip-path="url(#clip-path)">
				<rect class="header_border header_border-1" width="30" height="2" transform="translate(0 0)" />
				<rect class="header_border header_border-2" width="30" height="2" transform="translate(0 10)" />
				<rect class="header_border header_border-3" width="30" height="2" transform="translate(0 20)" />
			</g>
		</svg>
  </header>