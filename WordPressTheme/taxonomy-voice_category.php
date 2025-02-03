<?php get_header();  ?>
<div class="lower-page-mv">
    <div class="lower-page-mv__slide">
        <picture class="lower-page-mv__slide-image">
            <source srcset="<?php echo esc_url(get_theme_file_uri('dist/assets/images/voice/pc-voice-mv-image.jpg')); ?>" media="(min-width: 768px)">
            <img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/voice/sp-voice-mv-image.jpg')); ?>" alt="">
        </picture>
    </div>
    <div class="lower-page-mv__text">
        <p class="lower-page-mv__title">Voice</p>
    </div>
</div>
<main>
    <p class="pagetop"><a href="#"><img class="pagetop__button" src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
    <nav class="breadcrumb breadcrumb--position">
        <div class="breadcrumb__inner inner">
            <?php if (!is_front_page()) { ?>
                <?php if (function_exists('bcn_display')) { ?>
                    <div id="breadcrumb" class="w_inner" vocab="http://schema.org/" typeof="BreadcrumbList">
                        <?php bcn_display(); ?>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </nav>
    <section class="l-page-voice page-voice">
        <div class="inner page-voice__inner fish fish--blog">
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

                            // 「すべての投稿を表示」タブを追加
                            $is_all_active = !is_tax('voice_category');
                            echo '<li' . ($is_all_active ? ' class="active"' : '') . '><a class="tabs__text button2__item" href="' . esc_url(get_post_type_archive_link('voice')) . '">ALL</a></li>';


                            foreach ($terms as $term) {
                                $is_term_active = (get_queried_object_id() == $term->term_id);
                                echo '<li' . ($is_term_active ? ' class="active"' : '') . '><a class="tabs__text button2__item" href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a></li>';
                            }
                            echo '</ul>';
                        }
                        ?>
                    </div>
                </div>
                <div class="page-vice__list">
                    <div class="pagination__list3 page-vice__items cards2 cards2--grid">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <div class="cards2__item card2">
                                        <div class="card2__head">
                                            <div class="card2__detail">
                                                <div class="card2__category">
                                                    <p class="card2__age"><?php the_field('voice-age'); ?></p>
                                                    <p class="card2__course"><?php single_term_title(); ?></p>
                                                </div>
                                                <p class="card2__title"><?php the_title(); ?></p>
                                            </div>
                                            <div class="card2__img">
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    the_post_thumbnail();
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <p class="card2__text card2__text--position ">
                                            <?php the_content(); ?>
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
            </div>
    </section>
</main>
<?php get_footer();  ?>