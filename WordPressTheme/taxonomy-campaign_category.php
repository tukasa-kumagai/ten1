<?php get_header();  ?>

<body>
  <?php wp_body_open();  ?>
  <div class="lower-page-mv">
    <div class="lower-page-mv__slide">
      <picture class="lower-page-mv__slide-image">
        <source srcset="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/campaign/pc-campign-mv-image.jpg')); ?>" media="(min-width: 768px)">
        <img src="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/campaign/sp-campign-mv-image.jpg')); ?>" alt="キャンペーンメイン画像">
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
                    echo '<ul class="tabs">';

                    // 「ALL」タブをアクティブにする条件
                    $current_url = home_url(add_query_arg(array(), $wp->request));
                    $all_class = (get_post_type() === 'campaign' && !is_tax('campaign_category')) ? 'active' : '';
                    echo '<li class="' . esc_attr($all_class) . '"><a class="tabs__text button2__item" href="' . esc_url(get_post_type_archive_link('campaign')) . '">ALL</a></li>';

                    foreach ($terms as $term) {
                      $is_active = (is_tax('campaign_category', $term->slug)) ? 'active' : '';
                      echo '<li class="' . esc_attr($is_active) . '"><a class="tabs__text button2__item" href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a></li>';
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
                                                        echo '<li>No categories assigned.</li>';
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
                    <p class="card__foot-day card__foot-day--position">2023/6/1-9/30</p>
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
    </section>

  </main>
</body>
<?php get_footer();  ?>