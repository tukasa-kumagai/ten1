<?php get_header();  ?>
<div class="lower-page-mv">
  <div class="lower-page-mv__slide">
    <picture class="lower-page-mv__slide-image">
      <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/about/pc-aboutus-mv-imge.jpg')); ?>" media="(min-width: 768px)">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/about/sp-aboutus-mv-imge.jpg')); ?>" alt="ページaboutのメインビュー">
    </picture>
  </div>
  <div class="lower-page-mv__text">
    <p class="lower-page-mv__title">About&nbsp;us</p>
  </div>
</div>
<body>
  <main>
    <p class="pagetop"><a href="#"><img class="pagetop__button" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/back-up-image.jpg')); ?>"
          alt="戻るボタン"></a></p>
          <?php get_template_part( 'template-parts/breadcrumb' ); ?>
    <section class="l-page-about page-about">
      <div class="page-about-inner inner fish fish--about">
        <div class="page-about__main content-block">
          <div class="content-block__img1 content-block__img1--position">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/about/about-aboutus-right-image.jpg')); ?>" alt="セクションタイトル2">
          </div>
          <div class="content-block__img2 content-block__img2--position">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/about/about-aboutus-left-image.jpg')); ?>" alt="セクションタイトル2">
          </div>
          <div class="content-block__group">
            <div class="content-block__title">
              <p class="content-block__title-text content-block__title-text--position">Dive&nbsp;into<br>the&nbsp;Ocean
              </p>
            </div>
            <div class="content-block__texts">
              <p class="content-block__text content-block__text--position">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
$gallery_images = SCF::get('about_gallery');

// 実際に画像があるかどうかをチェック
$has_gallery_image = false;
if (!empty($gallery_images) && is_array($gallery_images)) {
  foreach ($gallery_images as $image) {
    if (!empty($image)) {
      $has_gallery_image = true;
      break;
    }
  }
}

// 画像が1枚でもあればセクションを表示
if ($has_gallery_image) : ?>
  <section class="l-page-about__gallery page-about__gallery gallery">
    <div class="page-about__gallery-inner inner">
      <div class="page-about__gallery-title section-header">
        <h2 class="section-header__english">Gallery</h2>
        <p class="section-header__japanese">フォト</p>
      </div>
      <div class="gallery__content">
        <?php foreach ($gallery_images as $image) : ?>
          <?php if (!empty($image)) : ?>
            <div class="gallery__image js-modal-img">
              <img src="<?php echo wp_get_attachment_image_url($image, 'large'); ?>" alt="ギャラリー画像">
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
      <div class="gallery__modal js-modal">
        <div class="gallery__modal-content js-modal-content"></div>
      </div>
    </div>
  </section>
<?php endif; ?>

  </main>
  <?php get_footer();  ?>