<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <!-- meta情報 -->
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="このページの概要を説明するテキストです。" />
  <meta name="keywords" content="キーワード1, キーワード2, キーワード3" />
  <meta name=”robots” content=”noindex”>
  <!-- ogp -->
  <meta property="og:title" content="ポートフォリオサイト" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.tukasa-test.website/test-site" />
  <meta property="og:image" content="https://www.tukasa-test.website/test-siteimages/about-aboutus-right-image.jpg" />
  <meta property="og:site_name" content="ポートフォリオサイト" />
  <meta property="og:description" content="私のポートフォリオサイトでは、これまでのプロジェクトやスキルを紹介しています。" />
  <!-- ファビコン -->
  <link rel="”icon”" href="" />
  <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('/assets/images/common/codeups-logo-contact.png')); ?>" id="favicon">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/common/apple-touch-icon.png">
  <!-- googleフォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gotu&family=Noto+Sans+JP:wght@200;300;400;700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-SZP6NEWWYY"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-SZP6NEWWYY');
  </script>
  <?php wp_head(); ?>
</head>
<?php wp_body_open();  ?>

<body>
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
  <header class="l-header header">
    <div class="header__inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo-link">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/codeups-logo-heaser.jpg')); ?>" alt="ヘッダーロゴ">
      </a>
      <button class="header__drawer hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="header__sp-nav sp-nav">
        <div class="sp-nav__inner">
          <div class="sp-nav__left">
            <ul class="sp-nav__left-items">
              <li class="sp-nav__left-item"><a href="<?php echo $campaign ?>">キャンペーン</a></li>
              <?php
              // 用語IDとタクソノミー名を指定
              $term_id = 5; // 用語ID
              $taxonomy = 'campaign_category'; // タクソノミー名

              // タクソノミーページリンクを取得
              $term_link = get_term_link($term_id, $taxonomy);

              // リンクを表示（li タグを含める）
              if (!is_wp_error($term_link)) {
                echo '<li class="sp-nav__left-item">';
                echo '<a class="footer__button" href="' . esc_url($term_link) . '">ライセンス取得</a>';
                echo '</li>';
              } else {
                // エラーハンドリング（リンクが取得できない場合）
                echo '<li class="sp-nav__left-item">';
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
                echo '<li class="sp-nav__left-item">';
                echo '<a class="footer__button" href="' . esc_url($term_link) . '">貸切体験ダイビング</a>';
                echo '</li>';
              } else {
                // エラーハンドリング（リンクが取得できない場合）
                echo '<li class="sp-nav__left-item">';
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
                echo '<li class="sp-nav__left-item">';
                echo '<a class="footer__button" href="' . esc_url($term_link) . '">ファンダイビング</a>';
                echo '</li>';
              } else {
                // エラーハンドリング（リンクが取得できない場合）
                echo '<li class="sp-nav__left-item">';
                echo '<a class="footer__button" href="#">リンクが無効です</a>';
                echo '</li>';
              }
              ?>
            </ul>
            <ul class="sp-nav__left-items">
              <li class="sp-nav__left-item"><a href="<?php echo $about_us ?>">私たちについて</a></li>
            </ul>
            <ul class="sp-nav__left-items">
              <li class="sp-nav__left-item"><a href="<?php echo $information ?>">ダイビング情報</a></li>
              <li class="sp-nav__left-item"><a href="<?php echo $information1 ?>">ライセンス講習</a></li>
              <li class="sp-nav__left-item"><a href="<?php echo $information2 ?>">体験ダイビング</a></li>
              <li class="sp-nav__left-item"><a href="<?php echo $information3 ?>">ファンダイビング</a></li>
            </ul>
            <ul class="sp-nav__left-items">
              <li class="sp-nav__left-item"><a href="<?php echo $blog ?>">ブログ</a></li>
            </ul>
          </div>
          <div class="sp-nav__right">
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item"><a href="<?php echo $voice ?>">お客様の声</a></li>
            </ul>
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item"><a href="<?php echo $price ?>">料金一覧</a></li>
              <li class="sp-nav__right-item"><a href="<?php echo $price1 ?>">ライセンス講習</a></li>
              <li class="sp-nav__right-item"><a href="<?php echo $price2 ?>">体験ダイビング</a></li>
              <li class="sp-nav__right-item"><a href="<?php echo $price3 ?>">ファンダイビング</a></li>
            </ul>

            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item"><a href="<?php echo $faq ?>">よくある質問</a></li>
            </ul>
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item"><a href="<?php echo $sitemap ?>">サイトマップ</a></li>
            </ul>
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item"><a href="<?php echo $privacy_policy  ?>">プライバシー<br>ポリシー</a></li>
            </ul>
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item"><a href="<?php echo $terms_of_service ?>">利用規約</a></li>
            </ul>
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item"><a href="<?php echo $contact ?>">おい問わ合せ</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo $campaign ?>">
              <span class="pc-nav__item-head">Campaign</span>
              <span class="pc-nav__item-foot">キャンペーン</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $about_us ?>">
              <span class="pc-nav__item-head">Aboutus</span>
              <span class="pc-nav__item-foot">私たちについて</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $information ?>">
              <span class="pc-nav__item-head">Information</span>
              <span class="pc-nav__item-foot">ダイビング情報</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $blog ?>">
              <span class="pc-nav__item-head">Blog</span>
              <span class="pc-nav__item-foot">ブログ</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $voice ?>">
              <span class="pc-nav__item-head">Voice</span>
              <span class="pc-nav__item-foot">お客様の声</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $price ?>">
              <span class="pc-nav__item-head">Price</span>
              <span class="pc-nav__item-foot">料金一覧</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $faq ?>">
              <span class="pc-nav__item-head">FAQ</span>
              <span class="pc-nav__item-foot">よくある質問</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $contact ?>">
              <span class="pc-nav__item-head">Contact</span>
              <span class="pc-nav__item-foot">お問合せ</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </header>