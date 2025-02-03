<?php get_header();  ?>

<body>
  <?php wp_body_open();  ?>
  <div class="lower-page-mv">
    <div class="lower-page-mv__slide">
      <picture class="lower-page-mv__slide-image">
        <source srcset="<?php echo esc_url(get_theme_file_uri('dist/assets//images/blog/pc-blog-mv.jpg')); ?>" media="(min-width: 768px)">
        <img src="<?php echo esc_url(get_theme_file_uri('dist/assets//images/blog/sp-blog-mv.jpg')); ?>" alt="">
      </picture>
    </div>
    <div class="lower-page-mv__text">
      <p class="lower-page-mv__title">Blog</p>
    </div>
  </div>
  <main>
    <p class="pagetop"><a href="#"><img class="pagetop__button" src="<?php echo esc_url(get_theme_file_uri('/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
    <nav class="breadcrumb breadcrumb--position">
      <div class="breadcrumb__inner inner ">
        <?php if (!is_front_page()) { ?>
          <?php if (function_exists('bcn_display')) { ?>
            <div id="breadcrumb" class="w_inner" vocab="http://schema.org/" typeof="BreadcrumbList">
              <?php bcn_display(); ?>
            </div>
          <?php } ?>
        <?php } ?>
      </div>
    </nav>
    <section class="l-page-blog page-blog">
      <div class="page-blog__inner inner fish fish--blog">
        <div class="page-blog__content">
          <div class="page-blog__main">
            <div class="pagination__list2  page-blog__items boxes boxes--column">
              <a href="" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image1.jpg')); ?>" alt="ブログカード1">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time ">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ライセンス取得</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page2.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image2.jpg')); ?>" alt="ブログカード2">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ウミガメと泳ぐ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page3.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image3.jpg')); ?>" alt="ブログカード3">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">カクレクマノミ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page4.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image4.jpg')); ?>" alt="ブログカード5">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ライセンス取得</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page5.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image5.jpg')); ?>" alt="ブログカード">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ウミガメと泳ぐ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page6.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image6.jpg')); ?>" alt="ブログカード6">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">カクレクマノミ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page1.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image1.jpg')); ?>" alt="ブログカード1">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time ">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ライセンス取得</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page2.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image2.jpg')); ?>" alt="ブログカード2">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ウミガメと泳ぐ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page3.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image3.jpg')); ?>" alt="ブログカード3">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">カクレクマノミ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page4.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image4.jpg')); ?>" alt="ブログカード4">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ライセンス取得</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page5.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image5.jpg')); ?>" alt="ブログカード5">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ウミガメと泳ぐ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page6.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image6.jpg')); ?>" alt="ブログカード6">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">カクレクマノミ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page1.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image1.jpg')); ?>" alt="ブログカード1">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time ">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ライセンス取得</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page2.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image2.jpg')); ?>" alt="ブログカード2">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ウミガメと泳ぐ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page3.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image3.jpg')); ?>" alt="ブログカード3">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">カクレクマノミ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page4.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image4.jpg')); ?>" alt="ブログカード4">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ライセンス取得</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page5.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image5.jpg')); ?>" alt="ブログカード5">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ウミガメと泳ぐ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page6.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image6.jpg')); ?>" alt="ブログカード6">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">カクレクマノミ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page1.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image1.jpg')); ?>" alt="ブログカード1">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time ">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ライセンス取得</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page2.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image2.jpg')); ?>" alt="ブログカード2">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ウミガメと泳ぐ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page3.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image3.jpg')); ?>" alt="ブログカード3">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">カクレクマノミ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page4.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image4.jpg')); ?>" alt="ブログカード4">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ライセンス取得</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page5.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image5.jpg')); ?>" alt="ブログカード5">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ウミガメと泳ぐ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page6.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image6.jpg')); ?>" alt="ブログカード6">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">カクレクマノミ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page1.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image1.jpg')); ?>" alt="ブログカード1">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time ">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ライセンス取得</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page2.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image2.jpg')); ?>" alt="ブログカード2">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ウミガメと泳ぐ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page3.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image3.jpg')); ?>" alt="ブログカード3">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">カクレクマノミ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page4.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image4.jpg')); ?>" alt="ブログカード4">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ライセンス取得</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page5.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image5.jpg')); ?>" alt="ブログカード5">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">ウミガメと泳ぐ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
              <a href="./page-blog-low-page6.html" class="pagination__list-item pagination__list-item--blog-size   box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php echo esc_url(get_theme_file_uri('/images/blog/blog-card-image6.jpg')); ?>" alt="ブログカード6">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time">2023.11/17</p>
                    <p class="box__head-text box__head-text--blog-position">カクレクマノミ</p>
                  </div>
                </div>
                <div class="box__foot box__foot--under">
                  <p class="box__foot-title"></p>
                  <div class="box__foot-price">
                    <p class="box__foot-regular"></p>
                    <p class="box__foot-discount"></p>
                  </div>
                </div>
                <p class="box__foot-text ">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                </p>
              </a>
            </div>
          </div>
          <?php get_sidebar();  ?>
        </div>
      </div>
    </section>
    <section class="l-contact l-contact--low-page-position9  contact">
      <div class="contact__bg">
        <div class="inner">
          <div class="contact__maim">
            <div class="contact__head">
              <div class="contact__logo">
                <h2><img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/common/codeups-logo-contact.png')); ?>" alt="ロゴ画像"></h2>
              </div>
              <div class="contact__head-under">
                <div class="contact__information">
                  <p class="contact__address">沖縄県那覇市1-1</p>
                  <p class="contact__phone">TEL:0120-000-0000</p>
                  <p class="contact__time">営業時間:8:30-19:00</p>
                  <p class="contact__holiday">定休日:毎週火曜日</p>
                </div>
                <div class="contact__map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3230.6569523440035!2d139.791361!3d35.930896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzXCsDU1JzUxLjIiTiAxMznCsDQ3JzI4LjkiRQ!5e0!3m2!1sja!2sjp!4v1693382799043!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
            <div class="contact__footer">
              <div class="contact__title">
                <p class="contact__title-name">Contact</p>
              </div>
              <div class="contact__inquiry">
                <p class="sp-contact__text">お問合せ</p>
                <p class="pc-contact__text">お問い合わせ</p>
                <p class="contact__subtext">ご予約・お問い合わせはコチラ</p>
              </div>
              <div class="contact__button-inner">
                <a href="./page-contact.html" class="button">
                  <span class="button__text">Contact us</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer();  ?>