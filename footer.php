<div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>

<footer class="footer">
  <div class="container">
    <div class="footer_inner">
      <nav>
        <?php
          $args = array(
            'menu' => 'global-navigation', //管理画面で作成したメニューの名前
            'menu_class' => '', //メニューを構成するulタグのクラス名
            'container' => false, //<ul>タグを囲んでいる<div>タグを削除  
          );
          wp_nav_menu($args);
        ?>
      </nav>
      <div class="footer_copyright">
        <small>&copy;かっぱ手芸店 All rights reserved.</small>
      </div>
    </div>
  </div>
</footer>

<!-- [slick-slide]用 -->
<!-- <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="./assets/js/home.js"></script> -->

<!-- ↓[swiper]用JavaScript -->
<script type="text/javascript">
  let mySwiper = new Swiper ('.swiper-container', {
    // 以下にオプションを設定
    loop: true, //最後に達したら先頭に戻る
    centeredSlides:true,
    autoplay: {
      delay: 3000,
    },
    
    slidesPerView:1,
    breakpoints: {
      //   768px以上の場合
      768: {
          slidesPerView:2, 
      }
    },
  
    //ページネーション表示の設定
    pagination: { 
      el: '.swiper-pagination', //ページネーションの要素
      type: 'bullets', //ページネーションの種類
      clickable: true, //クリックに反応させる
    },
  
    //ナビゲーションボタン（矢印）表示の設定
    navigation: { 
      nextEl: '.swiper-button-next', //「次へボタン」要素の指定
      prevEl: '.swiper-button-prev', //「前へボタン」要素の指定
    },
  
    //スクロールバー表示の設定
    scrollbar: { 
      el: '.swiper-scrollbar', //要素の指定
    },
  })
</script>

<?php
if (is_home()){
  wp_enqueue_script('kappa008-home', get_template_directory_uri(). '/assets/js/home.js');
}
?>

<?php wp_footer(); ?>
</body>
</html>