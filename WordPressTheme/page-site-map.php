<?php get_header();  ?>
<div class="lower-page-mv">
  <div class="lower-page-mv__slide">
    <picture class="lower-page-mv__slide-image">
      <source srcset="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/site-map/pc-sitemap-mv.jpg')); ?>" media="(min-width: 768px)">
      <img src="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/site-map/sp-sitemap-mv.jpg')); ?>" alt="">
    </picture>
  </div>
  <div class="lower-page-mv__text">
    <p class="lower-page-mv__title">Site&nbsp;MAP</p>
  </div>
</div>
<main>
  <p class="pagetop"><a href="#"><img class="pagetop__button" src="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
  </a></p>
  <nav class="breadcrumb breadcrumb--position">
    <div class="breadcrumb__inner inner">
      <ol class="breadcrumb__group breadcrumb__group--position2">
        <?php if (!is_front_page()) { ?>
          <?php if (function_exists('bcn_display')) { ?>
            <div id="breadcrumb" class="w_inner" vocab="http://schema.org/" typeof="BreadcrumbList">
              <?php bcn_display(); ?>
            </div>
          <?php } ?>
        <?php } ?>
      </ol>
    </div>
  </nav>

  <?php
  $home = esc_url(home_url('/home'));
  $campaign = esc_url(home_url('/campaign'));
  $about_us = esc_url(home_url('/about_us'));
  $information = esc_url(home_url('/information'));
  $information1 = esc_url(home_url('/information#tab_panel-1'));
  $information2 = esc_url(home_url('/information#tab_panel-2'));
  $information3 = esc_url(home_url('/information#tab_panel-3'));
  $blog = esc_url(home_url('/blog'));
  $voice = esc_url(home_url('/voice'));
  $price = esc_url(home_url('/price'));
  $price1 = esc_url(home_url('/price#post-316'));
  $price2 = esc_url(home_url('/price#post-315'));
  $price3 = esc_url(home_url('/price#post-314'));
  $price4 = esc_url(home_url('/price#post-292'));
  $faq = esc_url(home_url('/faq'));
  $sitemap = esc_url(home_url('/site-map'));
  $privacy_policy = esc_url(home_url('/privacy_policy'));
  $terms_of_service = esc_url(home_url('/terms-of-service'));
  $contact = esc_url(home_url('/contact'));
  ?>
  <section class="l-page-site-map page-site-map">
    <div class="page-site-map__inner inner fish fish--site-map">
      <div class="page-site-map__content">
        <div class="page-site-map__wrapper1">
          <div class="page-site-map__group1">
            <ul class="page-site-map__nav1">
              <li class="page-site-map__list1"><a class="page-site-map__button footer__button" href="<?php echo $campaign ?>">キャンペーン</a>
              </li>
              <?php
              // 用語IDとタクソノミー名を指定
              $term_id = 5; // 用語ID
              $taxonomy = 'campaign_category'; // タクソノミー名

              // タクソノミーページリンクを取得
              $term_link = get_term_link($term_id, $taxonomy);

              // リンクを表示（li タグを含める）
              if (!is_wp_error($term_link)) {
                echo '<li class="footer__list2">';
                echo '<a class="footer__button" href="' . esc_url($term_link) . '">ライセンス取得</a>';
                echo '</li>';
              } else {
                // エラーハンドリング（リンクが取得できない場合）
                echo '<li class="footer__list2">';
                echo '<a class="footer__button" href="#">リンクが無効です</a>';
                echo '</li>';
              }
              ?>
              <?php
              // 用語IDとタクソノミー名を指定
              $term_id = 6; // 用語ID
              $taxonomy = 'campaign_category'; // タクソノミー名

              // タクソノミーページリンクを取得
              $term_link = get_term_link($term_id, $taxonomy);

              // リンクを表示（li タグを含める）
              if (!is_wp_error($term_link)) {
                echo '<li class="footer__list2">';
                echo '<a class="footer__button" href="' . esc_url($term_link) . '">貸切体験ダイビング</a>';
                echo '</li>';
              } else {
                // エラーハンドリング（リンクが取得できない場合）
                echo '<li class="footer__list2">';
                echo '<a class="footer__button" href="#">リンクが無効です</a>';
                echo '</li>';
              }
              ?>
              <?php
              // 用語IDとタクソノミー名を指定
              $term_id = 7; // 用語ID
              $taxonomy = 'campaign_category'; // タクソノミー名

              // タクソノミーページリンクを取得
              $term_link = get_term_link($term_id, $taxonomy);

              // リンクを表示（li タグを含める）
              if (!is_wp_error($term_link)) {
                echo '<li class="footer__list2">';
                echo '<a class="footer__button" href="' . esc_url($term_link) . '">ファンダイビング</a>';
                echo '</li>';
              } else {
                // エラーハンドリング（リンクが取得できない場合）
                echo '<li class="footer__list2">';
                echo '<a class="footer__button" href="#">リンクが無効です</a>';
                echo '</li>';
              }
              ?>
            </ul>
            <ul class="page-site-map__nav2">
              <li class="page-site-map__list1"><a class="page-site-map__button" href="<?php echo $about_us ?>">私たちについて</a></li>
            </ul>
          </div>
          <div class="page-site-map__group1">
            <ul class="page-site-map__nav1-2">
              <li class="page-site-map__list1"><a class="page-site-map__button" href="<?php echo $information ?>">ダイビング情報</a></li>
              <li class="page-site-map__list2"><a class="page-site-map__button footer__button" href="<?php echo $information1 ?>">ライセンス講習</a>
              </li>
              <li class="page-site-map__list2"><a class="page-site-map__button footer__button" href="<?php echo $information2 ?>">体験ダイビング</a>
              </li>
              <li class="page-site-map__list2"><a class="page-site-map__button footer__button" href="<?php echo $information3 ?>">ファンダイビング</a>
              </li>
            </ul>
            <ul class="page-site-map__nav2">
              <li class="page-site-map__list1"><a class="page-site-map__button footer__button4" href="<?php echo $blog ?>">ブログ</a></li>
            </ul>
          </div>
        </div>
        <div class="page-site-map__wrapper2">
          <div class="page-site-map__group2">
            <ul class="page-site-map__nav1">
              <li class="page-site-map__list1-2"><a class="page-site-map__button" href="<?php echo $voice ?>">お客様の声</a></li>
            </ul>
            <ul class="page-site-map__nav1-3">
              <li class="page-site-map__list1-2"><a class="page-site-map__button" href="<?php echo $price ?>">料金一覧</a></li>
              <li class="page-site-map__list2-2"><a class="page-site-map__button footer__button2" href="<?php echo $price1 ?>">ライセンス講習</a>
              </li>
              <li class="page-site-map__list2-2"><a class="page-site-map__button footer__button2" href="<?php echo $price2 ?>">体験ダイビング</a>
              </li>
              <li class="page-site-map__list2-2"><a class="page-site-map__button footer__button2" href="<?php echo $price3 ?>">ファンダイビング</a></li>
            </ul>
          </div>
          <div class="page-site-map__group2-2">
            <ul class="page-site-map__nav1-4">
              <li class="page-site-map__list1-2"><a class="page-site-map__button" href="<?php echo $faq ?>">よくある質問</a></li>
            </ul>
            <ul class="page-site-map__nav2">
              <li class="page-site-map__list1"><a class="page-site-map__button footer__button3" href="<?php echo $privacy_policy ?>">プライバシー<br
                    class="br-one">ポリシー</a></li>
            </ul>
            <ul class="page-site-map__nav2">
              <li class="page-site-map__list1"><a class="page-site-map__button footer__button3" href="<?php echo $terms_of_service ?>">利用規約</a></li>
            </ul>
            <ul class="page-site-map__nav2">
              <li class="page-site-map__list1"><a class="page-site-map__button footer__button3" href="<?php echo $contact ?>">お問い合わせ</a>
              </li>
            </ul>
            <ul class="page-site-map__nav2">
              <li class="page-site-map__list1"><a class="page-site-map__button footer__button3" href="<?php echo $sitemap ?>">サイトマップ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer();  ?>