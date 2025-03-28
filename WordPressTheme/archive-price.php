<?php get_header();  ?>
<div class="lower-page-mv">
  <div class="lower-page-mv__slide">
    <picture class="lower-page-mv__slide-image">
      <source srcset="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/price/pc-sp-price-mv.jpg')); ?>" media="(min-width: 768px)">
      <img src="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/price/sp-price-mv.jpg')); ?>" alt="">
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
      <?php while (have_posts()) : the_post();
        $post_id = get_the_ID();
      ?>
        <?php
        $text0 = SCF::get('price_name0');
        $text1 = SCF::get('price_name1');
        $text2 = SCF::get('price_price1');
        $text3 = SCF::get('price_name2');
        $text4 = SCF::get('price_price2');
        $text5 = SCF::get('price_name3');
        $text6 = SCF::get('price_price3');
        $text7 = SCF::get('price_name4');
        $text8 = SCF::get('price_price4');
        ?>
        <div class="page-price__main">
          <div id="post-<?php echo $post_id; ?>" class="page-price__image">
            <!-- 改行を反映するために nl2br() を使用 -->
            <p class="page-price__text"><?php echo nl2br(esc_html($text0)); ?></p>
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/price/price-icon-image.jpg')); ?>" alt="2">
          </div>
          <div class="page-price__table">
            <?php if ($text1 && $text2) : ?>
              <div class="page-price__tr">
                <div class="page-price__th"><?php echo esc_html($text1); ?></div>
                <div class="page-price__td"><?php echo esc_html($text2); ?></div>
              </div>
            <?php endif; ?>
            <?php if ($text3 && $text4) : ?>
              <div class="page-price__tr">
                <div class="page-price__th"><?php echo esc_html($text3); ?></div>
                <div class="page-price__td"><?php echo esc_html($text4); ?></div>
              </div>
            <?php endif; ?>
            <?php if ($text5 && $text6) : ?>
              <div class="page-price__tr">
                <div class="page-price__th"><?php echo esc_html($text5); ?></div>
                <div class="page-price__td n"><?php echo esc_html($text6); ?></div>
              </div>
            <?php endif; ?>
            <?php if ($text7 && $text8) : ?>
              <div class="page-price__tr">
                <div class="page-price__th"><?php echo esc_html($text7); ?></div>
                <div class="page-price__td"><?php echo esc_html($text8); ?></div>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

  </main>
  <?php get_footer();  ?>