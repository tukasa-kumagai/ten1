<?php global $home, $campaign, $about_us, $information, $information1, $information2, $information3, $blog, $voice, $price, $price1, $price2, $price3, $faq, $sitemap, $privacy_policy, $terms_of_service, $contact; ?>
<div class="l-page-blog__sub page-blog__sub ">
  <div class="page-blog__sub-inner inner">
    <div class="page-blog__sub-article">
      <div class="title-name">
        <div class="title-name__image">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/blog/blog-article-logo-image.jpg')); ?>" alt="画像">
        </div>
        <p class="title-name__text">人気記事</p>
      </div>
    </div>
    <div class="page-blog__sub-cards">
      <?php
      // 最新の投稿を3件取得するクエリ
      $args = array(
        'post_type'      => 'post',        // 投稿タイプを指定
        'posts_per_page' => 3,            // 表示する記事数を指定
        'orderby'        => 'date',       // 日付でソート
        'order'          => 'DESC',       // 新しい順に並べる
      );
      $query = new WP_Query($args);
      // クエリのループを開始
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="page-blog__sub-card">
            <div class="page-blog__sub-card-image">
              <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
              <?php else : ?>
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/no_image.png')); ?>" alt="No Image">
              <?php endif; ?>
            </div>
            <div class="page-blog__sub-card-text">
              <time class="page-blog__sub-card-day" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date('Y.m.d'); ?>
              </time>
              <p class="page-blog__sub-card-title"><?php the_title(); ?></p>
            </div>
          </a>
        <?php endwhile; ?>
      <?php else : ?>
        <p>投稿が見つかりませんでした。</p>
      <?php endif; ?>
      <?php
      // クエリのリセット
      wp_reset_postdata();
      ?>
    </div>
    <div class="page-blog__sub-reviews">
      <div class="title-name">
        <div class="title-name__image">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/blog/blog-article-logo-image.jpg')); ?>" alt="画像">
        </div>
        <p class="title-name__text">口コミ</p>
      </div>
    </div>
    <?php
$args = [
  'post_type'      => 'voice',
  'posts_per_page' => 1,
  'post_status'    => 'publish',
  'orderby'        => 'date',
  'order'          => 'DESC'
];
$custom_posts_query = new WP_Query($args);

if ($custom_posts_query->have_posts()) : ?>
  <?php while ($custom_posts_query->have_posts()) : $custom_posts_query->the_post(); ?>
    <?php
    $group = get_field('customer_group');
    $voice_age = $group['voice-age'] ?? '';
    $sex = $group['sex'] ?? '';
    ?>
    <div class="custom-posts-sidebar">
      <div class="page-blog__sub-reviews-card">
        <div class="page-blog__sub-reviews-image">
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('custom-size'); ?>
            <?php else : ?>
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage.jpg')); ?>" alt="デフォルト画像" width="294" height="218">
            <?php endif; ?>
          </a>
        </div>
        <div class="page-blog__sub-reviews-text">
          <?php if ($voice_age && $sex): ?>
            <div class="page-blog__sub-reviews-age"><?php echo esc_html($voice_age . '代(' . $sex . ')'); ?></div>
          <?php endif; ?>
          <p class="page-blog__sub-reviews-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </p>
          <div class="page-blog__sub-reviews-button-inner">
            <a href="<?php the_permalink(); ?>" class="button">
              <span class="button__text">View more</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>

   <div class="page-blog__sub-campaign">
  <div class="title-name">
    <div class="title-name__image">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/blog/blog-article-logo-image.jpg')); ?>" alt="キャンペーンロゴ">
    </div>
    <p class="title-name__text">キャンペーン</p>
  </div>

  <div class="page-blog__sub-campaign__items">
    <?php
    $campaign_query = new WP_Query([
      'post_type'      => 'campaign',
      'posts_per_page' => 2,
      'post_status'    => 'publish',
      'orderby'        => 'date',
      'order'          => 'DESC'
    ]);

    if ($campaign_query->have_posts()) :
      while ($campaign_query->have_posts()) : $campaign_query->the_post();
        $campaign_group = get_field('campaign_group');

        if (!empty($campaign_group)) :
          $left_price  = $campaign_group['left_price'] ?? '';
          $right_price = $campaign_group['right_price'] ?? '';
          $price_text  = $campaign_group['price_text'] ?? '';
          $start_date  = $campaign_group['start_date'] ?? '';
          $end_date    = $campaign_group['end_date'] ?? '';

          $period = ($start_date && $end_date) ? $start_date . ' - ' . $end_date : '';

          if ($left_price && $right_price && $price_text && $period) :
    ?>
            <a href="<?php the_permalink(); ?>" class="page-blog__sub-campaign__item card">
              <div class="card__img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('thumbnail'); ?>
                <?php else : ?>
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage.jpg')); ?>" alt="No Image" width="150" height="150">
                <?php endif; ?>
              </div>

              <div class="card__body card__body--under">
                <div class="card__head card__head--blog-position card__head--blog-size">
                  <p class="card__head-text card__head-text--size">
                    <?php
                    $title = get_the_title();
                    $short_title = mb_substr($title, 0, 20);
                    if (mb_strlen($title) > 20) {
                      $short_title .= '…';
                    }
                    echo esc_html($short_title);
                    ?>
                  </p>
                </div>
              </div>

              <div class="card__foot card__foot--under2">
                <p class="card__foot-title card__foot-title--font-size">全部コミコミ(お一人様)</p>
                <div class="card__foot-price">
                  <p class="card__foot-regular card__foot-regular--position">
                    ¥<?php echo number_format((int)str_replace(['¥', ','], '', $left_price)); ?>
                  </p>
                  <p class="card__foot-discount card__foot-discount--position">
                    ¥<?php echo number_format((int)str_replace(['¥', ','], '', $right_price)); ?>
                  </p>
                </div>
            
              </div>
            </a>
    <?php
          endif;
        endif;
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
  </div>
</div>

<div class="page-blog__sub-reviews-button-inner">
  <a href="<?php echo esc_url($campaign); ?>" class="button">
    <span class="button__text">View more</span>
  </a>
</div>

      <div class="page-blog__sub-archive-title">
        <div class="title-name">
          <div class="title-name__image">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/blog/blog-article-logo-image.jpg')); ?>" alt="画像">
          </div>
          <p class="title-name__textarchive">アーカイブ</p>
        </div>
      </div>
      <div class="page-blog__sub-archive">
        <?php
        // 年ごとにアーカイブを取得
        $years = $wpdb->get_results("
    SELECT DISTINCT YEAR(post_date) as year 
    FROM $wpdb->posts
    WHERE post_type = 'post' AND post_status = 'publish'
    ORDER BY year DESC
  ");
        ?>
        <?php if ($years): ?>
          <?php foreach ($years as $year): ?>
            <details class="js-animation" <?php if ($year->year === date('Y')) echo 'open'; ?>>
              <summary class="summary-items">
                <span class="summary-item"><?php echo esc_html($year->year); ?></span>
              </summary>
              <div class="details-content-wrapper">
                <div class="details-content">
                  <ul class="page-blog__triangle-items triangle-block">
                    <?php
                    // 月ごとのアーカイブリンクを取得
                    $months = $wpdb->get_results($wpdb->prepare("
                SELECT DISTINCT MONTH(post_date) as month 
                FROM $wpdb->posts
                WHERE YEAR(post_date) = %d AND post_type = 'post' AND post_status = 'publish'
                ORDER BY month DESC
              ", $year->year));
                    ?>
                    <?php if ($months): ?>
                      <?php foreach ($months as $month): ?>
                        <li class="triangle-block__list">
                          <a href="<?php echo esc_url(get_month_link($year->year, $month->month)); ?>">
                            <?php echo esc_html($month->month . '月'); ?>
                          </a>
                        </li>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            </details>
          <?php endforeach; ?>
        <?php else: ?>
          <p>アーカイブはありません。</p>
        <?php endif; ?>
      </div>
  </div>
</div>