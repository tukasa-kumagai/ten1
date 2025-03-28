<?php get_header();  ?>
  <main class="main__content">
  <p class="pagetop"><a href="#"> <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
  <?php get_template_part( 'template-parts/breadcrumb' ); ?>
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
    <section class="page-404">
      <div class="page-404__inner inner">
        <p class="page-404__title">404</p>
        <p class="page-404__text">申し訳ありません。<br>
          お探しのページが見つかりません。</p>
        <div class="page-404__button-inner">
          <a href="<?php echo esc_url(home_url('/')); ?>"  class="button button--white">
            <span class="button__text button__text--green">View more</span>
          </a>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer();  ?>