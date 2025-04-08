<?php get_header();  ?>
<div class="lower-page-mv">
  <div class="lower-page-mv__slide">
    <picture class="lower-page-mv__slide-image">
      <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/site-map/pc-sitemap-mv.jpg')); ?>" media="(min-width: 768px)">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/site-map/sp-sitemap-mv.jpg')); ?>" alt="ページterms-of-serviceのメインビュー">
    </picture>
  </div>
  <div class="lower-page-mv__text">
    <p class="lower-page-mv__title lower-page-mv__title--size">Terms&nbsp;of&nbsp;Service</p>
  </div>
</div>
<main>
  <p class="pagetop"><a href="#"> <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
  <?php get_template_part( 'template-parts/breadcrumb' ); ?>
  <section class="l-page-terms-of-service page-terms-of-service">
    <div class=" page-terms-of-service__inner inner fish">
      <div class="page-terms-of-service__sentence">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class=" page-terms-of-service__inner3 inner">
              <h2 class="sentence__title"><?php the_title(); ?></h2>
              <?php the_content(); ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
  </section>
</main>
<?php get_footer();  ?>