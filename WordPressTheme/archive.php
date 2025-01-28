<?php get_header(); ?>

<main>
<section class="l-page-blog page-blog">
  <div class="page-blog__inner inner fish fish--blog">
    <div class="page-blog__content">
      <!-- メインコンテンツ -->
      <div class="page-blog__main">
        <div class="pagination__list2  page-blog__items boxes boxes--column">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="pagination__list-item pagination__list-item--blog-size box box--hover">
                <div class="box__image-box">
                  <img class="box__image" src="<?php
                                                if (has_post_thumbnail()) {
                                                  echo get_the_post_thumbnail_url();
                                                } else {
                                                  echo esc_url(get_theme_file_uri('dist/assets/images/common/no_image.png'));
                                                }
                                                ?>" alt="<?php the_title_attribute(); ?>">
                </div>
                <div class="box__body box__body--under">
                  <div class="box__head box__head--blog-position">
                    <p class="box__head-time "><?php the_date('Y.m.d') ?></p>
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
                <p class="box__foot-text "> <?php echo wp_trim_words(get_the_content(), 100, '...'); ?> 
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

      <!-- サイドバー -->
    
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
