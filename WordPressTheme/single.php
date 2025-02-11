<?php get_header();  ?>

<body>
  <?php wp_body_open();  ?>
  <div class="lower-page-mv">
    <div class="lower-page-mv__slide">
      <picture class="lower-page-mv__slide-image">
        <source srcset="<?php echo esc_url(get_theme_file_uri('../dist/assets//images/blog/pc-blog-mv.jpg')); ?>" media="(min-width: 768px)">
        <img src="<?php echo esc_url(get_theme_file_uri('../dist/assets//images/blog/sp-blog-mv.jpg')); ?>" alt="">
      </picture>
    </div>
    <div class="lower-page-mv__text">
      <p class="lower-page-mv__title">Blog</p>
    </div>
  </div>
  <main>
    <p class="pagetop"><a href="#"><img class="pagetop__button" src="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
    <nav class="breadcrumb breadcrumb--position">
      <div class="breadcrumb__inner inner">
        <?php if (!is_front_page()) { ?>
          <?php if (function_exists('bcn_display')) { ?>
            <div id="breadcrumb" class="w_inner" vocab="http://schema.org/" typeof="BreadcrumbList">
              <?php bcn_display(); ?>
            </div>
          <?php } ?>
        <?php } ?>
      </div>
    </nav>
    </div>
    <section class="l-page-blog-low-page page-blog-low-page">
      <div class="page-blog-low-page__inner inner fish">
        <div class="page-blog-low-page__content">
          <div class="page-blog-low-page-main">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <div class="page-blog-low-page__container">
                  <p class="page-blog-low-page__time"><?php the_date('Y.m.d') ?></p>
                  <p class="page-blog-low-page__title"><?php the_title(); ?></p>
                  <div class="page-blog-low-page__image">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                  </div>
                  <p class="page-blog-low-page__text">
                    <?php the_content(); ?>
                  </p>
                </div>

                <div class="page-blog-low-page__container">
                 
                  <div class="page-blog-low-page__image">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                  </div>
                  <p class="page-blog-low-page__text">
                    <?php the_content(); ?>
                  </p>
                </div>
                <div class="page-blog-low-page__container">
                  <ul class="page-blog-low-page__nav">
                    <li class="page-blog-low-page__list">リスト1</li>
                    <li class="page-blog-low-page__list">リスト2</li>
                    <li class="page-blog-low-page__list">リスト3</li>
                  </ul>
                  <p class="page-blog-low-page__text">
                    <?php the_content(); ?>
                  </p>
                </div>
                <!-- 次の投稿・前の投稿リンク -->
                <div class="page-blog-low-page__nav">
                  <div class="page-blog-low-page__nav-item">
                    <div class="l-page-blog-low-page__box page-blog-low-page__box">
                      <?php previous_post_link(
                        '<span>%link</span>', // 矢印を削除
                        '<span class="page-blog-low-page__box-image1"></span>'
                      ); ?>
                        <?php previous_post_link(
                        '<span>%link</span>', // 矢印を削除
                        '<span class="page-blog-low-page__box-image2"></span>'
                      ); ?>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <?php get_sidebar();  ?>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer();  ?>