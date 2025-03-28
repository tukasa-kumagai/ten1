<?php get_header();  ?>
<div class="lower-page-mv">
  <div class="lower-page-mv__slide">
    <picture class="lower-page-mv__slide-image">
      <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/site-map/pc-sitemap-mv.jpg')); ?>" media="(min-width: 768px)">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/site-map/sp-sitemap-mv.jpg')); ?>" alt="">
    </picture>
  </div>
  <div class="lower-page-mv__text">
    <p class="lower-page-mv__title lower-page-mv__title--size">Privacy&nbsp;Policy</p>
  </div>
</div>
<main>
  <p class="pagetop"><a href="#"> <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
  <div class="inner">
  <?php get_template_part( 'template-parts/breadcrumb' ); ?>
  </div>
  <section class="l-page-privacy-policy page-privacy-policy">
    <div class="page-privacy-policy__inner inner fish">
      <div class="page-privacy-policy__inner1">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <h2 class="sentence__title"><?php the_title(); ?></h2>
      </div>
      <div class="page-privacy-policy__inner inner ">
        <div class="page-privacy-policy__inner6">
        </div>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php endif; ?>
      </div>
  </section>
</main>
<?php get_footer();  ?>