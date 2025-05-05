<?php get_header();  ?>
<div class="lower-page-mv">
    <div class="lower-page-mv__slide">
        <picture class="lower-page-mv__slide-image">
            <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/voice/pc-voice-mv-image.jpg')); ?>" media="(min-width: 768px)">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/voice/sp-voice-mv-image.jpg')); ?>" alt="taxonomy-voice_categoryページのメインビュー">
        </picture>
    </div>
    <div class="lower-page-mv__text">
        <p class="lower-page-mv__title"><?php
                                        if (is_tax('voice_category')) {
                                            // タクソノミーページ（voice_category）でカテゴリー名を表示
                                            single_term_title();
                                        } else {
                                            // 他のアーカイブページなどではタイトルを表示
                                            echo 'カテゴリーなし';
                                        }
                                        ?></p>
    </div>
</div>
<main>
    <p class="pagetop"><a href="#"><img class="pagetop__button" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
    <?php get_template_part('template-parts/breadcrumb'); ?>
    <section class="l-page-voice page-voice">
        <div class="inner page-voice__inner fish fish--blog">
            <div class="page-campaign__category button2__items">
                <div class="container">
                    <div class="tab-main">
                        <div class="tab-menu">
                            <?php
                            $terms = get_terms(array(
                                'taxonomy' => 'voice_category',
                                'hide_empty' => false,
                            ));

                            if ($terms && !is_wp_error($terms)) {
                                echo '<ul class="tabs">';

                                // 「ALL」タブをアクティブにする条件
                                $current_url = home_url(add_query_arg(array(), $wp->request));
                                $all_class = (get_post_type() === 'voice' && !is_tax('voice_category')) ? 'active' : '';
                                echo '<li class="' . esc_attr($all_class) . '"><a class="tabs__text button2__item" href="' . esc_url(get_post_type_archive_link('voice')) . '">ALL</a></li>';

                                foreach ($terms as $term) {
                                    $is_active = (is_tax('voice_category', $term->slug)) ? 'active' : '';
                                    echo '<li class="' . esc_attr($is_active) . '"><a class="tabs__text button2__item" href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a></li>';
                                }
                                echo '</ul>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-vice__list">
    <div class="pagination__list3 page-vice__items cards2 cards2--grid">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php
                // グループフィールド取得
                $group = get_field('customer_group');
                $voice_age = $group['voice-age'] ?? '';
                $sex = $group['sex'] ?? '';
                $voice_text = $group['voice_text'] ?? '';

                // ★ 追加：3つの値がすべてなかったらスキップ
                if (empty($voice_age) || empty($sex) || empty($voice_text)) {
                    continue;
                }

                $limited_voice_text = wp_trim_words($voice_text, 100, '...');
                $title = get_the_title();
                $limited_title = mb_substr($title, 0, 20);
                if (mb_strlen($title) > 20) {
                    $limited_title .= '…';
                }
                ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="cards2__item card2">
                        <div class="card2__head">
                            <div class="card2__detail">
                                <div class="card2__category">
                                    <p class="card2__age"><?php echo esc_html($voice_age . '代' . $sex); ?></p>
                                    <p class="card2__course">
                                        <?php
                                        $terms = get_the_terms(get_the_ID(), 'voice_category');
                                        if (!empty($terms) && !is_wp_error($terms)) {
                                            the_terms(get_the_ID(), 'voice_category', '', ', ');
                                        } else {
                                            echo '未分類';
                                        }
                                        ?>
                                    </p>
                                </div>
                                <p class="card2__title"><?php echo esc_html($limited_title); ?></p>
                            </div>
                            <div class="card2__img">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                }
                                ?>
                            </div>
                        </div>
                        <p class="card2__text card2__text--position">
                            <?php echo esc_html($limited_voice_text); ?>
                        </p>
                    </div>
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


</main>
<?php get_footer();  ?>