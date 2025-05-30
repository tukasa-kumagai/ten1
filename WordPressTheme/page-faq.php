<?php get_header();  ?>
<div class="lower-page-mv">
  <div class="lower-page-mv__slide">
    <picture class="lower-page-mv__slide-image">
      <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/faq/pc-faq-mv.jpg')); ?>" media="(min-width: 768px)">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/faq/sp-faq-mv.jpg')); ?>" alt="質問ページのメインビュー">
    </picture>
  </div>
  <div class="lower-page-mv__text">
    <p class="lower-page-mv__title">FAQ</p>
  </div>
</div>
<main>
  <p class="pagetop"><a href="#"><img class="pagetop__button" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <section class="l-page-faq page-faq">
    <div class="page-faq__inner inner">
      <nav class="page-faq__nav">
        <ul class="accordion__items">
          <?php
          // 「question」投稿タイプから全件取得
          $args = array(
            'post_type' => 'question',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC'
          );
          $faq_query = new WP_Query($args);

          if ($faq_query->have_posts()) :
            while ($faq_query->have_posts()) : $faq_query->the_post();

              // 投稿内の繰り返しフィールド取得
              $faq_items = SCF::get('faq_group');

              if (!empty($faq_items)) :
                foreach ($faq_items as $faq_item) :
                  $question = $faq_item['fq_problem'];
                  $answer = $faq_item['fq_answer'];
          ?>
                  <li class="accordion__item js-accordion-item">
                    <div class="accordion__title js-accordion-title">
                      <h3 class="accordion__title-text"><?php echo esc_html($question); ?></h3>
                    </div>
                    <div class="accordion__content js-accordion-content">
                      <p class="accordion__text"><?php echo esc_html($answer); ?></p>
                    </div>
                  </li>
          <?php
                endforeach;
              endif;

            endwhile;
            wp_reset_postdata();
          else :
            echo '<li>よくある質問は現在ありません。</li>';
          endif;
          ?>
        </ul>
      </nav>
    </div>
  </section>
</main>
<?php get_footer();  ?>