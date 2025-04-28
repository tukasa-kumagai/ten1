<?php get_header();  ?>
<?php global $home, $campaign, $about_us, $information, $information1, $information2, $information3, $blog, $voice, $price, $price1, $price2, $price3, $faq, $sitemap, $privacy_policy, $terms_of_service, $contact; ?>
<body>
  <?php wp_body_open();  ?>
  <div class="lower-page-mv">
    <div class="lower-page-mv__slide">
      <picture class="lower-page-mv__slide-image">
        <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/contact/pc-contact-image.jpg')); ?>" media="(min-width: 768px)">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/contact/sp-contact-image.jpg')); ?>" alt="問い合わせページのメインビュー">
      </picture>
    </div>
    <div class="lower-page-mv__text">
      <p class="lower-page-mv__title">Contact</p>
    </div>
  </div>
  <main>
    <p class="pagetop"><a href="#"><img class="pagetop__button" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
    <?php get_template_part('template-parts/breadcrumb'); ?>
    <section class="l-page-contact page-contact">
      <div class="page-contact__inner inner fish fish--contact">
        <?php echo apply_shortcodes('[contact-form-7 id="af69ff5" title="お問い合わせフォーム"]'); ?>
      </div>
    </section>
  </main>
  <?php get_footer();  ?>