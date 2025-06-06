<?php get_header();  ?>
<?php global $home, $campaign, $about_us, $information, $information1, $information2, $information3, $blog, $voice, $price, $price1, $price2, $price3, $faq, $sitemap, $privacy_policy, $terms_of_service, $contact; ?>
  <main class="main__content">
  <p class="pagetop"><a href="#"> <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
 
  <?php get_template_part( 'template-parts/breadcrumb' ); ?>

    <?php
  $home = esc_url(home_url('/'));
  ?>
    <section class="page-404">
      <div class="page-404__inner inner">
        <p class="page-404__title">404</p>
        <p class="page-404__text ">申し訳ありません。<br>
          お探しのページが見つかりません。</p>
        <div class="page-404__button-inner">
          <a href="<?php echo $home; ?>"  class="button button--white">
            <span class="button__text button__text--green">View more</span>
          </a>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer();  ?>