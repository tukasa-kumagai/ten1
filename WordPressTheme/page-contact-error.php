<?php get_header();  ?>
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

<body>
  <?php wp_body_open();  ?>
  <div class="lower-page-mv">
    <div class="lower-page-mv__slide">
      <picture class="lower-page-mv__slide-image">
        <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/contact/pc-contact-image.jpg')); ?>" media="(min-width: 768px)">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/contact/sp-contact-image.jpg')); ?>" alt="キャンペーンメイン画像">
      </picture>
    </div>
    <div class="lower-page-mv__text">
      <p class="lower-page-mv__title">Contact</p>
    </div>
  </div>
  <main>
    <p class="pagetop"><a href="#"><img class="pagetop__button" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
    <?php get_template_part( 'template-parts/breadcrumb' ); ?>
    <section class="l-page-contact page-contact">
      <div class="page-contact__inner inner fish fish--contact">
        <?php echo apply_shortcodes('[contact-form-7 id="6aace29" title="Contact form 1"]'); ?>
      </div>
    </section>
  </main>
</body>
<?php get_footer();  ?>