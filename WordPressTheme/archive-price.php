<?php get_header();  ?>
<div class="lower-page-mv">
  <div class="lower-page-mv__slide">
    <picture class="lower-page-mv__slide-image">
      <source srcset="<?php echo esc_url(get_theme_file_uri('assets/images/price/pc-sp-price-mv.jpg')); ?>" media="(min-width: 768px)">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/price/sp-price-mv.jpg')); ?>" alt="">
    </picture>
  </div>
  <div class="lower-page-mv__text">
    <p class="lower-page-mv__title">Price</p>
  </div>
</div>

<body>
  <main>
    <p class="pagetop"><a href="#"> <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
    <?php get_template_part( 'template-parts/breadcrumb' ); ?>
    <section class="l-page-price page-price">
  <div class="page-price__inner inner fish">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php
        $post_id = get_the_ID();
        $text0 = SCF::get('price_name0', $post_id); // 冒頭テキスト
        $price_list = SCF::get('couse', $post_id); // 繰り返しフィールド（item, price）
        ?>
        <div class="page-price__main">
          <div id="post-<?php echo esc_attr($post_id); ?>" class="page-price__image">
            <p class="page-price__text"><?php echo nl2br(esc_html($text0)); ?></p>
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/price/price-icon-image.jpg')); ?>" alt="2">
          </div>
          <div class="page-price__table">
            <?php if (!empty($price_list)) : ?>
              <?php foreach ($price_list as $row) : ?>
                <div class="page-price__tr">
                  <div class="page-price__th"><?php echo esc_html($row['price_name']); ?></div>
                  <div class="page-price__td"><?php echo esc_html($row['price']); ?></div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>


  </main>
  <?php get_footer();  ?>