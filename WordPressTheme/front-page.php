<?php get_header();  ?>
<?php global $home, $campaign, $about_us, $information, $information1, $information2, $information3, $blog, $voice, $price, $price1, $price2, $price3, $faq, $sitemap, $privacy_policy, $terms_of_service, $contact; ?>
<div class="main-mv">
  <div class="main-mv__slide">
    <picture class="main-mv__slide-image">
      <source srcset="<?php the_field('top_mv1'); ?>" media="(min-width: 768px)">
      <img src="<?php the_field('sp_top_mv1'); ?>" alt="トップ画像1">
    </picture>
    <picture class="main-mv__slide-image">
      <source srcset="<?php the_field('top_mv2'); ?>" media="(min-width: 768px)">
      <img src="<?php the_field('sp_top_mv2'); ?>" alt="トップ画像2">
    </picture>
    <picture class="main-mv__slide-image">
      <source srcset="<?php the_field('top_mv3'); ?>" media="(min-width: 768px)">
      <img src="<?php the_field('sp_top_mv3'); ?>" alt="トップ画像3">
    </picture>
    <picture class="main-mv__slide-image">
      <source srcset="<?php the_field('top_mv4'); ?>" media="(min-width: 768px)">
      <img src="<?php the_field('sp_top_mv4'); ?>" alt="トップ画像4">
    </picture>
  </div>
  <div class="main-mv__text">
    <p class="main-mv__title">DIVING</p>
    <p class="main-mv__subtitle">into the ocean</p>
  </div>
</div>
<main>
  <p class="pagetop"><a href="#"> <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
  <?php
  // メインループを妨げないようにサブループを作成
  $args = array(
    'post_type' => 'campaign',
    'posts_per_page' => 8, // 表示する投稿数を指定
    'orderby' => 'date',
    'order' => 'DESC'
  );
  // 現在のクエリを保存
  $current_query = $wp_query;
  // サブループ用の新しいクエリを作成
  $campaign_query = new WP_Query($args);
  ?>
  <section class="l-campaign campaign">
    <div class="campaign__inner inner">
      <div class="campaign__title section-header">
        <h2 class="section-header__english">Campaign</h2>
        <p class="section-header__japanese">キャンペーン</p>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-area">
        <div class="swiper js-campaign-swiper">
          <div class="swiper-wrapper campaign__cards">
            <?php if ($campaign_query->have_posts()) : ?>
              <?php while ($campaign_query->have_posts()) : $campaign_query->the_post(); ?>
                <?php
                $left_price = get_field('left_price');
                $right_price = get_field('right_price');
                if ($left_price && $right_price): ?>
                  <a href="<?php the_permalink(); ?>" class="swiper-slide campaign__item card">
                    <div class="card__img">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                      <?php else : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage.jpg')); ?>" alt="No Image">
                      <?php endif; ?>
                    </div>
                    <div class="card__body card__body--under">
                      <div class="card__head">
                        <p class="card__head-title">
                          <?php
                          $terms = get_the_terms(get_the_ID(), 'campaign_category');
                          if (!empty($terms) && !is_wp_error($terms)) {
                            echo esc_html($terms[0]->name);
                          }
                          ?>
                        </p>
                        <p class="card__head-text"><?php the_title(); ?></p>
                      </div>
                    </div>
                    <div class="card__foot card__foot--under">
                      <p class="card__foot-title">全部コミコミ(お一人様)</p>
                      <div class="card__foot-price">
                        <p class="card__foot-regular card__foot-regular--campaign-position"><?php echo esc_html($left_price); ?></p>
                        <p class="card__foot-discount card__foot-discount--size"><?php echo esc_html($right_price); ?></p>
                      </div>
                    </div>
                  </a>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="campaign__button-inner">
        <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="button">
          <span class="button__text">View more</span>
        </a>
      </div>
    </div>
  </section>
  <?php
  // メインループを元に戻す
  wp_reset_postdata();
  $wp_query = $current_query;
  ?>
  <section class="about l-about">
    <div class="inner">
      <div class="about__title-inner">
        <div class="section-header">
          <h2 class="section-header__english">About&nbsp;us</h2>
          <p class="section-header__japanese">私たちについて</p>
        </div>
      </div>
      <div class="about__inner">
        <div class="about__main content-block  ">
          <div class="content-block__img1">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/top/top-aboutus-right-image.jpg')); ?>" alt="セクションタイトル2">
          </div>
          <div class="content-block__img2">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/top/top-aboutus-left-image.jpg')); ?>" alt="セクションタイトル2">
          </div>
          <div class="content-block__group">
            <div class="content-block__title">
              <p class="content-block__title-text">Dive&nbsp;into<br>the&nbsp;Ocean</p>
            </div>
            <div class="content-block__texts">
              <p class="content-block__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              <div class="content-block__button-inner">
                <a href="<?php echo $about_us ?>" class="button">
                  <span class="button__text">View more</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="l-information information">
    <div class="inner">
      <div class="information__title-inner">
        <div class="section-header">
          <h2 class="section-header__english">Information</h2>
          <p class="section-header__japanese">ダイビング情報</p>
        </div>
      </div>
      <div class="information__main">
        <div class="information__img">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/top/top-information-image.jpg')); ?>" alt="information画像">
        </div>
        <div class="information__group">
          <p class="information__title">ライセンス講習</p>
          <p class="information__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
          <div class="information__button-inner ">
            <a href="<?php echo $information ?>" class="button">
              <span class="button__text">View more</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="blog l-blog">
    <div class="blog__bg">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/top/top-blog-bg-image.jpg')); ?>" alt="水面画像">
    </div>
    <div class="inner">
      <div class="blog__title-inner">
        <div class="section-header section-header--color-white ">
          <h2 class="section-header__english section-header--color-white">Blog</h2>
          <p class="section-header__japanese section-header--color-white">ブログ</p>
        </div>
      </div>
      <div class="blog__items boxes">
        <?php
        // サブループを設定
        $args = array(
          'post_type' => 'post', // カスタム投稿タイプを指定する場合は 'post' を変更
          'posts_per_page' => 3, // 表示する投稿数
          'orderby' => 'date', // 日付順
          'order' => 'DESC' // 新しい順
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="boxes__item box">
              <div class="box__img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('medium'); ?>
                <?php else : ?>
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage.jpg')); ?>" alt="デフォルト画像">
                <?php endif; ?>
              </div>

              <div class="box__body">
                <p class="box__day"><?php echo get_the_date('Y.m/d'); ?></p>
                <p class="box__title"><?php the_title(); ?></p>
                <p class="box__text">
                  <?php echo wp_trim_words(get_the_excerpt(), 90, '...'); ?>
                </p>
              </div>
            </a>
          <?php endwhile;
          wp_reset_postdata();
        else : ?>
          <p class="no-posts">投稿がありません。</p>
        <?php endif; ?>
      </div>
    </div>
    <div class="blog__button-inner">
      <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="button">
        <span class="button__text">View more</span>
      </a>
    </div>
  </section>
  <section class="l-vice vice">
    <div class="inner">
      <div class="vice__bg-img2">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/top/top-blog-seabream-image2.png')); ?>" alt="魚画像">
      </div>
      <div class="vice__title-inner">
        <div class="section-header">
          <h2 class="section-header__english">Voice</h2>
          <p class="section-header__japanese">お客様の声</p>
        </div>
      </div>
      <div class="vice__items cards2">
        <?php
        // サブループで「お客様の声」を取得
        $args = [
          'post_type'      => 'voice', // カスタム投稿タイプ名
          'posts_per_page' => 2, // 表示する投稿数
          'order'          => 'DESC', // 新しい順に取得
          'orderby'        => 'date', // 日付で並べ替え
        ];
        $voice_query = new WP_Query($args);

        if ($voice_query->have_posts()) :
          while ($voice_query->have_posts()) : $voice_query->the_post();
        ?>
            <div class="cards2__item card2">
              <div class="card2__head">
                <div class="card2__detail">
                  <div class="card2__category">
                    <p class="card2__age">
                      <?php the_field('voice-age'); ?>
                    </p>
                    <p class="card2__course">
                      <?php
                      // the_terms() 関数を使用してタームを表示
                      $terms = get_the_terms(get_the_ID(), 'voice_category');
                      if (!empty($terms) && !is_wp_error($terms)) {
                        the_terms(get_the_ID(), 'voice_category', '', ', ');
                      } else {
                        echo '未分類';
                      }
                      ?>
                    </p>
                  </div>
                  <p class="card2__title"><?php the_title(); ?></p>
                </div>
                <div class="card2__img">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                  <?php else : ?>
                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage.jpg')); ?>" alt="デフォルト画像">
                  <?php endif; ?>
                </div>
              </div>
              <p class="card2__text">
                <?php echo wp_trim_words(get_the_content(), 210, '...'); ?>
              </p>
            </div>
        <?php
          endwhile;
          wp_reset_postdata();
        else :
          echo '<p>現在、お客様の声はありません。</p>';
        endif;
        ?>
      </div>
      <div class="vice__button-inner">
        <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="button">
          <span class="button__text">View more</span>
        </a>
      </div>
    </div>
  </section>
  <section class="l-price price">
    <div class="inner">
      <div class="price__title-inner">
        <div class="section-header">
          <h2 class="section-header__english">Price</h2>
          <p class="section-header__japanese">料金一覧</p>
        </div>
      </div>
      <div class="price__main">
        <div class="sp-price__img">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/top/sp-top-price-image.jpg')); ?>" alt="スマホ用料金画像">
        </div>
        <div class="pc-price__img">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/top/pc-top-price-image.jpg')); ?>" alt="PC用料金画像">
        </div>
        <div class="price__course">
          <?php
          $args = array(
            'post_type'      => 'price',
            'posts_per_page' => 5,
            'orderby'        => 'date',
            'order'          => 'DESC',
          );
          $product_query = new WP_Query($args);
          if ($product_query->have_posts()) :
            echo '<div class="product-list">';
            while ($product_query->have_posts()) : $product_query->the_post();

              for ($i = 0; $i <= 4; $i++) {
                $prices[$i] = get_post_meta(get_the_ID(), "price_name{$i}", true);
                $descriptions[$i] = get_post_meta(get_the_ID(), "price_price{$i}", true);
              }
          ?>
              <div class="price__content">
                <h3 class="price__title"><?php echo esc_html($prices[0]); ?></h3>
                <div class="price__information">
                  <?php for ($i = 1; $i <= 4; $i++) : ?>
                    <?php if (!empty($prices[$i]) && !empty($descriptions[$i])) : ?>
                      <dl class="price__list">
                        <dt class="price__name"><?php echo esc_html($prices[$i]); ?></dt>
                        <dd class="price__money"><?php echo esc_html($descriptions[$i]); ?></dd>
                      </dl>
                    <?php endif; ?>
                  <?php endfor; ?>
                </div>
              </div>
          <?php
            endwhile;
            echo '</div>';
            wp_reset_postdata();
          else :
            echo '<p>投稿が見つかりませんでした。</p>';
          endif;
          ?>
        </div>
      </div>
      <div class="price__button-inner">
        <a href="<?php echo $price  ?>" class="button">
          <span class="button__text">View more</span>
        </a>
      </div>
    </div>
  </section>
  <?php get_footer();  ?>