<?php get_header();  ?>

<body>
  <?php wp_body_open();  ?>
  <div class="lower-page-mv">
    <div class="lower-page-mv__slide">
      <picture class="lower-page-mv__slide-image">
        <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/blog/pc-blog-mv.jpg')); ?>" media="(min-width: 768px)">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/blog/sp-blog-mv.jpg')); ?>" alt="">
      </picture>
    </div>
    <div class="lower-page-mv__text">
      <p class="lower-page-mv__title">Blog</p>
    </div>
  </div>
  <main>
    <p class="pagetop"><a href="#"><img class="pagetop__button" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
    <?php get_template_part( 'template-parts/breadcrumb' ); ?>
    <section class="l-page-blog page-blog">
      <div class="page-blog__inner inner fish fish--blog">
        <div class="page-blog__content">
          <div class="page-blog__main">
            <div class="pagination__list2  page-blog__items boxes boxes--column">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="pagination__list-item pagination__list-item--blog-size box box--hover">
            <div class="box__image-box">
                <?php 
                if (has_post_thumbnail()) {
                    $image_url = get_the_post_thumbnail_url();
                } else {
                    $image_url = esc_url(get_theme_file_uri('/assets/images/common/noimage.jpg'));
                }
                ?>
                <img class="box__image" src="<?php echo $image_url; ?>" alt="<?php the_title_attribute(); ?>">
            </div>
                    <div class="box__body box__body--under">
                      <div class="box__head box__head--blog-position">
                      <p class="box__head-time "><?php echo get_the_date('Y.m.d'); ?></p>
                        <p class="box__head-text box__head-text--blog-position"><?php the_title(); ?></p>
                      </div>
                    </div>
                    <div class="box__foot box__foot--under">
                      <p class="box__foot-title"></p>
                      <div class="box__foot-price">
                        <p class="box__foot-regular"></p>
                        <p class="box__foot-discount"></p>
                      </div>
                    </div>
                    <p class="box__foot-text "><?php echo wp_trim_words(get_the_content(), 100, '...'); ?>
                    </p>
                  </a>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
            <?php
            if (function_exists('wp_pagenavi')) {
              wp_pagenavi();
            } ?>
          </div>
          <?php get_sidebar();  ?>
        </div>
      </div>
    </section>
  </main>
  <body>
    <?php get_footer();  ?>