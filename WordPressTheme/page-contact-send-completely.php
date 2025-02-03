<?php get_header();  ?>

<body>
  <?php wp_body_open();  ?>
  <div class="lower-page-mv">
    <div class="lower-page-mv__slide">
      <picture class="lower-page-mv__slide-image">
        <source srcset="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/contact/pc-contact-image.jpg')); ?>" media="(min-width: 768px)">
        <img src="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/contact/sp-contact-image.jpg')); ?>" alt="キャンペーンメイン画像">
      </picture>
    </div>
    <div class="lower-page-mv__text">
      <p class="lower-page-mv__title">Campaign</p>
    </div>
  </div>
  <main>
    <p class="pagetop"><a href="#"><img class="pagetop__button" src="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
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
    <section class="send-completely">
      <div class="send-completely__inner fish inner">
        <p class="send-completely__title">お問い合わせ内容を送信完了しました。</p>
        <div class="send-completely__text">
          <p class="send-completely__text-sub">このたびは、お問い合わせ頂き<br class="u-mobile">
            誠にありがとうございます。<br class="u-mobile"><br class="u-desktop">
            お送り頂きました内容を確認の上、<br class="u-mobile">
            3営業日以内に折り返しご連絡させて頂きます。<br class="u-mobile"><br class="u-desktop">
            また、ご記入頂いたメールアドレスへ、<br class="u-mobile">
            自動返信の確認メールをお送りしております。</p>
        </div>
      </div>
    </section>
  </main>
</body>
<?php get_footer();  ?>

</html>