<?php get_header();  ?>

<body>
  <?php wp_body_open();  ?>
  <div class="lower-page-mv">
    <div class="lower-page-mv__slide">
      <picture class="lower-page-mv__slide-image">
        <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/campaign/pc-campign-mv-image.jpg')); ?>" media="(min-width: 768px)">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/campaign/sp-campign-mv-image.jpg')); ?>" alt="キャンペーンメイン画像">
      </picture>
    </div>
    <div class="lower-page-mv__text">
      <p class="lower-page-mv__title">Campaign</p>
    </div>
  </div>
  <main>
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
    <p class="pagetop"><a href="#"><img class="pagetop__button" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
    <?php get_template_part('template-parts/breadcrumb'); ?>
    <section class="l-page-campaign page-campaign">
      <div class="page-campaign__inner inner fish">
        <div class="page-campaign__categories button2">
          <div class="page-campaign__category button2__items">
            <div class="container">
              <div class="tab-main">
                <div class="tab-menu">
                  <?php
                  $terms = get_terms(array(
                    'taxonomy' => 'campaign_category',
                    'hide_empty' => false,
                  ));

                  if ($terms && !is_wp_error($terms)) {
                    echo '<ul class="tabs category-grid">';

                    // 「すべての投稿を表示」タブをアクティブに設定
                    echo '<li class="category-grid__item active"><a class="tabs__all button2__item" href="' . esc_url(get_post_type_archive_link('campaign')) . '">ALL</a></li>';

                    foreach ($terms as $term) {
                      echo '<li class="category-grid__item"><a class="tabs__text button2__item" href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a></li>';
                    }
                    echo '</ul>';
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="page-campaign__main">
            <div class="pagination__list page-campaign__items">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <div class="pagination__list-item page-campaign__item  swiper-slide card">
                    <div class="card__img">
                      <?php if (has_post_thumbnail()) : ?>
                        <div class="campaign-item-thumbnail">
                          <?php the_post_thumbnail('full'); ?>
                        </div>
                      <?php else : ?>
                        <div class="campaign-item-thumbnail">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.jpg" alt="No Image Available">
                        </div>
                      <?php endif; ?>
                    </div>
                    <div class="card__body card__body--under">
                      <div class="card__head card__head--campaign-position">
                        <div class="card__head-title"><?php
                                                      $terms = get_the_terms(get_the_ID(), 'campaign_category');
                                                      if (!empty($terms) && !is_wp_error($terms)) {
                                                        foreach ($terms as $term) {
                                                          echo '<li><a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a></li>';
                                                        }
                                                      } else {
                                                        echo '<li>未分類</li>';
                                                      }
                                                      ?></div>
                        <p class="card__head-text card__head-text--campaign-size"><?php the_title(); ?></p>
                      </div>
                    </div>
                    <div class="card__foot card__foot--campaign-under">
                      <p class="card__foot-title">全部コミコミ(お一人様)</p>
                      <div class="card__foot-price card__foot-price--campaign-position">
                        <p class="card__foot-regular card__foot-regular--campaign-position"><?php the_field('left_price'); ?></p>
                        <p class="card__foot-discount card__foot-discount--size"><?php the_field('right_price'); ?></p>
                      </div>
                    </div>
                    <div class="card__foot-text card__foot-text--campaign-width">
                      <?php the_content(); ?>
                    </div>
                    <time class="card__foot-day card__foot-day--position"><?php the_time( get_option( 'date_format' ) ); ?></time>
                    <p class="card__foot-inquiry">ご予約・お問い合わせはコチラ</p>
                    <a href="<?php echo $contact ?>" class="button button--position1">
                      <span class="button__text">Contact us</span>
                    </a>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
            <?php
            if (function_exists('wp_pagenavi')) {
              wp_pagenavi();
            }
            ?>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
<?php get_footer();  ?>