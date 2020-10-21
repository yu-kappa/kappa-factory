<?php get_header(); ?>
  
  <?php if (is_home()): ?>

    <div id="slider"> <!-- class="container" -->

      <div class="swiper-container">
          <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/header001.JPG" alt=""></div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/header002.JPG" alt=""></div>
              <div class="swiper-slide"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/header003.JPG" alt=""></a></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

          <div class="swiper-pagination swiper-pagination-bullets">
              <span class="swiper-pagination-bullet"></span>
              <span class="swiper-pagination-bullet"></span>
              <span class="swiper-pagination-bullet"></span>
          </div>
      </div>

    </div><!-- /slider -->

  <?php endif; ?>

  <section class="sec">
    <div class="container">
      <header class="sec_header">
        <h2 class="title">最新情報<span>NEWS</span></h2>
      </header>

      <div class="posts">
        <?php if (have_posts()): ?>
          <?php while(have_posts()): the_post(); ?>
            <div class="post">
              <?php get_template_part('template-parts/loop', 'news'); ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>
      <p class="sec_btn">
        <?php
        $news = get_term_by('slug', 'news', 'category');
        $news_link = get_term_link($news, 'category');
        ?>
        <a href="<?php echo $news_link; ?>" class="btn btn-default">最新情報の一覧<i class="fas fa-angle-right"></i></a>
      </p>
    </div>
  </section>

  <section class="sec bg-gray">
    <div class="container">
      <header class="sec_header">
        <h2 class="title">店舗情報<span>INFORMATION</span></h2>
      </header>

      <div class="posts">
        <div class="half_box">
          <a href="<?php echo get_permalink(136); ?>" class="bnr" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/header001.JPG')">
            <div class="bnr_inner">
              わたしたちについて<span>ABOUT</span>
            </div>
          </a>
        </div>
        
        <div class="half_box">
          <a href="<?php echo get_permalink(149); ?>" class="bnr" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/header001.JPG')">
            <div class="bnr_inner">
              アクセス<span>ACCESS</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="sec sec-bg">
    <div class="sec_inner">
      <header class="sec_header">
        <h2 class="title">お問い合わせ<span>CONTACT</span></h2>
      </header>

      <div class="sec_body contact">
        <div class="contact_icon">
          <i class="fas fa-phone"></i>
        </div>
        <div class="contact_body">
          <p>
              お気軽にお問い合わせください
                <span>03-1234-5678</span>
          </p>
        </div>
      </div>

      <div class="sec_btn">
        <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-default">メールフォーム<i class="fas fa-angle-right"></i></a>
      </div>
    </div>
  </section>

 <?php get_footer(); ?>