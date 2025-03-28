<?php get_header();  ?>
<div class="lower-page-mv">
  <div class="lower-page-mv__slide">
    <picture class="lower-page-mv__slide-image">
      <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/faq/pc-faq-mv.jpg')); ?>" media="(min-width: 768px)">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/faq/sp-faq-mv.jpg')); ?>" alt="">
    </picture>
  </div>
  <div class="lower-page-mv__text">
    <p class="lower-page-mv__title">FAQ</p>
  </div>
</div>
<main>
  <p class="pagetop"><a href="#"><img class="pagetop__button" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
  <?php get_template_part( 'template-parts/breadcrumb' ); ?>
  <section class="l-page-faq page-faq">
      <div class="page-faq__inner inner fish">
        <nav class="page-faq__nav">
          <ul class="accordion__items">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php
              // Smart Custom Fieldsから繰り返しフィールドのデータを取得
              $faq_items = SCF::get('faq_group'); // 繰り返しグループのスラッグを設定
              if (!empty($faq_items)) :
                foreach ($faq_items as $faq) :
                  $question = $faq['fq_problem']; // 繰り返しグループ内の「質問」
                  $answer = $faq['fq_answer'];   // 繰り返しグループ内の「答え」
              ?>
            <li class="accordion__item js-accordion-item">
              <div class="accordion__title js-accordion-title is-open">
                <h3 class="accordion__title-text"><?php echo esc_html($question); ?></h3>
              </div>
              <div class="accordion__content js-accordion-content">
                <p class="accordion__text">
                <?php echo esc_html($answer); ?>
                </p>
              </div>
            </li>
            <?php endforeach; ?>
              <?php else : ?>
                <p>FAQがありません。</p>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
          </ul>
        </nav>
      </div>
    </section>
</main>
<?php get_footer();  ?>