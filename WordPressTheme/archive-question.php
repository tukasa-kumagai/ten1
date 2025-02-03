<?php get_header();  ?>

<body>
  <?php wp_body_open();  ?>
  <div class="lower-page-mv">
    <div class="lower-page-mv__slide">
      <picture class="lower-page-mv__slide-image">
        <source srcset="<?php echo esc_url(get_theme_file_uri('dist/assets/images/faq/pc-faq-mv.jpg')); ?>" media="(min-width: 768px)">
        <img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/faq/sp-faq-mv.jpg')); ?>" alt="キャンペーンメイン画像">
      </picture>
    </div>
    <div class="lower-page-mv__text">
      <p class="lower-page-mv__title">FAQ</p>
    </div>
  </div>
  <main>
    <p class="pagetop"><a href="#"><img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
    <nav class="breadcrumb breadcrumb--position">
      <div class="breadcrumb__inner inner">
        <ol class="breadcrumb__group breadcrumb__group--position2">
          <?php if (!is_front_page()) { ?>
            <?php if (function_exists('bcn_display')) { ?>
              <div id="breadcrumb" class="w_inner" vocab="http://schema.org/" typeof="BreadcrumbList">
                <?php bcn_display(); ?>
              </div>
            <?php } ?>
          <?php } ?>
        </ol>
      </div>
    </nav>
    <section class="l-page-faq page-faq">
      <div class="page-faq__inner inner fish">
        <nav class="page-faq__nav">
          <ul class="accordion__items">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <?php
                $question1 = SCF::get('fq_problem');
                $question2 = SCF::get('fq_answer');
                ?>
                <li class="accordion__item js-accordion-item">
                  <div class="accordion__title js-accordion-title is-open">
                    <h3 class="accordion__title-text"><?php echo esc_html($question1); ?></h3>
                  </div>
                  <div class="accordion__content js-accordion-content">
                    <p class="accordion__text">
                      <?php echo esc_html($question2); ?>
                    </p>
                  </div>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </nav>
      </div>
    </section>
  </main>
  <?php get_footer();  ?>