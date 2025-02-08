<?php get_header();  ?>
<div class="lower-page-mv">
  <div class="lower-page-mv__slide">
    <picture class="lower-page-mv__slide-image">
      <source srcset="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/price/pc-sp-price-mv.jpg')); ?>" media="(min-width: 768px)">
      <img src="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/price/sp-sp-price-mv.jpg')); ?>" alt="">
    </picture>
  </div>
  <div class="lower-page-mv__text">
    <p class="lower-page-mv__title">Price</p>
  </div>
</div>

<body>
  <main>
    <p class="pagetop"><a href="#"><img class="pagetop__button" src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
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
    <section class="l-page-price page-price">
      <div class="page-price__inner inner fish">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
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
              <div id="example1" class="page-price__image">
                <p class="page-price__text"><?php echo esc_html($text0); ?></p>
                <img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/price/price-icon-image.jpg')); ?>" alt="2">
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
                    <div class="page-price__th "><?php echo esc_html($text3); ?></div>
                    <div class="page-price__td "><?php echo esc_html($text4); ?></div>
                  </div>
                <?php endif; ?>
                <?php if ($text5 && $text6) : ?>
                  <div class="page-price__tr">
                    <div class="page-price__th "><?php echo esc_html($text5); ?></div>
                    <div class="page-price__td n"><?php echo esc_html($text6); ?></div>
                  </div>
                <?php endif; ?>
                <?php if ($text7 && $text8) : ?>
                  <div class="page-price__tr">
                    <div class="page-price__th "><?php echo esc_html($text7); ?></div>
                    <div class="page-price__td "><?php echo esc_html($text8); ?></div>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>

    
    <section class="l-page-price page-price">
      <div class="page-price__inner inner fish">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
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
              <div id="example1" class="page-price__image">
                <p class="page-price__text"><?php echo esc_html($text0); ?></p>
                <img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/price/price-icon-image.jpg')); ?>" alt="2">
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
                    <div class="page-price__th "><?php echo esc_html($text3); ?></div>
                    <div class="page-price__td "><?php echo esc_html($text4); ?></div>
                  </div>
                <?php endif; ?>
                <?php if ($text5 && $text6) : ?>
                  <div class="page-price__tr">
                    <div class="page-price__th "><?php echo esc_html($text5); ?></div>
                    <div class="page-price__td n"><?php echo esc_html($text6); ?></div>
                  </div>
                <?php endif; ?>
                <?php if ($text7 && $text8) : ?>
                  <div class="page-price__tr">
                    <div class="page-price__th "><?php echo esc_html($text7); ?></div>
                    <div class="page-price__td "><?php echo esc_html($text8); ?></div>
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