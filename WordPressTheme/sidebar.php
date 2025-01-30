<?php
$home = esc_url(home_url('/home'));
$campaign = esc_url(home_url('/campaign'));
$about_us = esc_url(home_url('/about_us'));
$information = esc_url(home_url('/information'));
$blog = esc_url(home_url('/blog'));
$voice = esc_url(home_url('/voice'));
$price = esc_url(home_url('/price'));
$faq = esc_url(home_url('/faq'));
$sitemap = esc_url(home_url('/site-map'));
$privacy_policy = esc_url(home_url('/privacy_policy'));
$terms_of_service = esc_url(home_url('/terms-of-service'));
$contact = esc_url(home_url('/contact'));
?>
<div class="l-page-blog__sub page-blog__sub ">
  <div class="page-blog__sub-inner inner">
    <div class="page-blog__sub-article">
      <div class="title-name">
        <div class="title-name__image">
          <img src="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/blog/blog-article-logo-image.jpg')); ?>" alt="画像">
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
                <img src="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/common/no_image.png')); ?>" alt="No Image">
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
          <img src="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/blog/blog-article-logo-image.jpg')); ?>" alt="画像">
        </div>
        <p class="title-name__text">口コミ</p>
      </div>
    </div>
    <?php
    // カスタム投稿タイプ「campaign」の最新の投稿を取得するクエリ
    $args = [
      'post_type'      => 'voice', // カスタム投稿タイプを指定（ここでは「campaign」）
      'posts_per_page' => 1,          // 表示する投稿数
      'post_status'    => 'publish',  // 公開されている投稿のみを取得
      'orderby'        => 'date',     // 投稿日順
      'order'          => 'DESC'      // 降順（新しいものが上）
    ];
    // クエリを実行
    $custom_posts_query = new WP_Query($args);

    // 投稿が存在する場合
    if ($custom_posts_query->have_posts()) : ?>
      <?php while ($custom_posts_query->have_posts()) : $custom_posts_query->the_post(); ?>
        <div class="custom-posts-sidebar">
          <div class="page-blog__sub-reviews-card">
            <!-- アイキャッチ画像 -->
            <?php if (has_post_thumbnail()) : ?>
              <div class="page-blog__sub-reviews-image">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('custom-size'); // custom-sizeサイズの画像を表示 
                  ?>
                </a>
              </div>
            <?php endif; ?>
            <div class="page-blog__sub-reviews-text">
              <div class="page-blog__sub-reviews-age">30代(カップル)</div>
              <p class="page-blog__sub-reviews-title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
              <div class="page-blog__sub-reviews-button-inner">
                <a href="<?php echo $voice ?>" class="button">
                  <span class="button__text">View more</span>
                </a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        </ul>
        </div>
      <?php
      wp_reset_postdata(); // メインクエリを復元
    endif;
      ?>
      <div class="page-blog__sub-campaign">
        <div class="title-name">
          <div class="title-name__image">
            <img src="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/blog/blog-article-logo-image.jpg')); ?>" alt="画像">
          </div>
          <p class="title-name__text">キャンペーン</p>
        </div>
      </div>
      <?php
      // カスタム投稿タイプ「campaign」の最新の投稿を取得するクエリ
      $args = [
        'post_type'      => 'campaign', // カスタム投稿タイプを指定（ここでは「campaign」）
        'posts_per_page' => 2,          // 表示する投稿数
        'post_status'    => 'publish',  // 公開されている投稿のみを取得
        'orderby'        => 'date',     // 投稿日順
        'order'          => 'DESC'      // 降順（新しいものが上）
      ];
      // クエリを実行
      $custom_posts_query = new WP_Query($args);
      // 投稿が存在する場合
      if ($custom_posts_query->have_posts()) : ?>
        <?php while ($custom_posts_query->have_posts()) : $custom_posts_query->the_post(); ?>
          <div class="page-blog__sub-campaign__items">
            <a href="./page-campaign-low-page1.html" class="page-blog__sub-campaign__item card">
              <div class="card__img">
                <!-- アイキャッチ画像 -->
                <?php if (has_post_thumbnail()) : ?>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('thumbnail'); // サムネイルサイズの画像を表示 
                    ?>
                  </a>
                <?php endif; ?>
              </div>
              <div class="card__body card__body--under">
                <div class="card__head card__head--blog-position card__head--blog-size">
                  <p class="card__head-text card__head-text--size"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                </div>
              </div>
              <div class="card__foot card__foot--under2">
                <p class="card__foot-title">全部コミコミ(お一人様)</p>
                <div class="card__foot-price">
                  <?php
                  // カスタムフィールド「price」の値を取得して表示
                  $price = get_post_meta(get_the_ID(), 'left_price', true);
                  if ($price) {
                    echo '<p class="card__foot-regular card__foot-regular--position">' . esc_html($price) . '</p>';
                  }
                  // カスタムフィールド「discount」の値を取得して表示
                  $discount = get_post_meta(get_the_ID(), 'right_price', true);
                  if ($discount) {
                    echo '<p class="card__foot-discount card__foot-discount--position">' . esc_html($discount) . '</p>';
                  }
                  ?>
                </div>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      <?php
        wp_reset_postdata(); // メインクエリを復元
      endif;
      ?>
      <div class="page-blog__sub-reviews-button-inner">
        <a href="<?php echo $campaign ?>" class="button">
          <span class="button__text">View more</span>
        </a>
      </div>
      <div class="page-blog__sub-campaign">
        <div class="title-name">
          <div class="title-name__image">
            <img src="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/blog/blog-article-logo-image.jpg')); ?>" alt="画像">
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