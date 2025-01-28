<?php


function add_custom_scripts() {
    // Google Fontsの追加
    wp_enqueue_style( 'google-fonts-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap', false );
    wp_enqueue_style( 'google-fonts-noto', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap', false );

    // swiperのCSSの追加
    wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', false );

    // テーマのCSSの追加
    wp_enqueue_style( 'theme-styles', get_theme_file_uri('/dist/assets/css/style.css'), false );

    // jQueryの追加
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), '3.6.0', true );

    // swiperのJSの追加
    wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array('jquery'), '8.0.0', true );

    // テーマのJSの追加
    wp_enqueue_script( 'theme-scripts', get_theme_file_uri('/dist/assets/js/script.js'), array('jquery'), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'add_custom_scripts' );


// crossorigin属性を持つタグに対する対応
function add_rel_preconnect( $html, $handle, $href, $media ) {
    if ( 'google-fonts-montserrat' === $handle || 'google-fonts-noto' === $handle || 'swiper' === $handle ) {
        $html = <<<EOT
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
$html
EOT;
    }
    return $html;
}

add_filter( 'style_loader_tag', 'add_rel_preconnect', 10, 4 );

function custom_posts_per_page( $query ) {
    // 管理画面やメインクエリ以外では動作しないようにする
    if ( is_admin() || ! $query->is_main_query() ) {
        return;
    }

    // 特定のページスラッグに応じて表示数を変更する
    if ( is_page('blog') ) {
        $query->set( 'posts_per_page', 10 ); // ページスラッグ 'page-slug-1' では5件表示
    } elseif ( is_page('license_course') ) {
        $query->set( 'posts_per_page', 10 ); // ページスラッグ 'page-slug-2' では10件表示
    } elseif ( is_category('license_course') ) {
        $query->set( 'posts_per_page', 8 ); // カテゴリー 'category-slug' では8件表示
    } elseif ( is_post_type_archive('campaign') ) {
        $query->set( 'posts_per_page', 1 ); // カスタム投稿タイプ 'custom_post_type' では15件表示
    }  elseif ( is_post_type_archive('blog') ) {
      $query->set( 'posts_per_page', 10 ); // カスタム投稿タイプ 'custom_post_type' では15件表示
  }   elseif ( is_post_type_archive('voice') ) {
    $query->set( 'posts_per_page', 6 ); // カスタム投稿タイプ 'custom_post_type' では15件表示
}
}
add_action( 'pre_get_posts', 'custom_posts_per_page' );



// アイキャッチ画像を有効化
add_theme_support('post-thumbnails');



///contactform
function cf7_dynamic_select($tag) {
    // タグ名を確認（安全性を考慮）
    if (!isset($tag->name) || $tag->name != 'your-dropdown') {
        return $tag;
    }

    // 投稿（またはページ）のタイトルを取得
    $args = array(
        'post_type' => 'page', // 投稿タイプを指定。ページの場合は 'page'。
        'posts_per_page' => 10, // 必要に応じて件数を制限。
        'orderby' => 'date', // 日付順にソート（任意）。
        'order' => 'DESC'
    );
    $posts = get_posts($args);

    // ドロップダウンのオプションを生成
    $options = array();
    foreach ($posts as $post) {
        $options[] = $post->post_title;
    }

    // オプションをタグに適用
    $tag->values = $options;
    $tag->labels = $options;

    // クエリリセット
    wp_reset_postdata();

    return $tag;
}
add_filter('wpcf7_form_tag', 'cf7_dynamic_select', 10, 2);


//アイキャッチ画像

add_theme_support('post-thumbnails');





//投稿名変更
// 管理画面メニューの「投稿」を「ブログ」に変更
function change_post_menu_label() {
  global $menu;
  global $submenu;
  
  $menu[5][0] = 'ブログ'; // メインメニューのラベルを変更
  $submenu['edit.php'][5][0] = 'ブログ'; // 投稿 -> ブログ
  $submenu['edit.php'][10][0] = '新しいブログ'; // 新規追加 -> 新しいブログ
  $submenu['edit.php'][16][0] = 'タグ'; // タグ
  
  echo '';
}
add_action('admin_menu', 'change_post_menu_label');

// 管理画面の「投稿」ラベルを変更
function change_post_object_label() {
  global $wp_post_types;
  $labels = &$wp_post_types['post']->labels;
  
  $labels->name = 'ブログ';
  $labels->singular_name = 'ブログ';
  $labels->add_new = '新しいブログ';
  $labels->add_new_item = '新しいブログを追加';
  $labels->edit_item = 'ブログを編集';
  $labels->new_item = '新しいブログ';
  $labels->view_item = 'ブログを表示';
  $labels->search_items = 'ブログを検索';
  $labels->not_found = 'ブログが見つかりません';
  $labels->not_found_in_trash = 'ゴミ箱にブログはありません';
  $labels->all_items = 'すべてのブログ';
  $labels->menu_name = 'ブログ';
  $labels->name_admin_bar = 'ブログ';
}
add_action('init', 'change_post_object_label');


//コンタクトフォームドロップダウンメニュー





//タクソノミーキャンペーン
//キャンペーン
function create_campaign_post_type_and_taxonomy() {
    // Register Custom Post Type
    register_post_type('campaign', array(
        'labels' => array(
            'name' => ('キャンペーン'),
            'singular_name' => ('Campaign')
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));

    // Register Custom Taxonomy
    register_taxonomy(
        'campaign_category',
        'campaign',
        array(
            'label' => __('Campaign Categories'),
            'rewrite' => array('slug' => 'campaign-category'),
            'hierarchical' => true,
        )
    );
}
add_action('init', 'create_campaign_post_type_and_taxonomy');

// タクソノミーアーカイブページの表示件数を設定
function custom_campaign_posts_per_page($query) {
    if (!is_admin() && $query->is_main_query()) {
        // タクソノミーアーカイブページの場合
        if (is_tax('campaign_category')) {
            $query->set('posts_per_page', 4); // 表示件数を4件に設定
        }
        // カスタム投稿タイプのアーカイブページの場合
        if (is_post_type_archive('campaign')) {
            $query->set('posts_per_page', 4); // 表示件数を4件に設定
        }
    }
}
add_action('pre_get_posts', 'custom_campaign_posts_per_page');

//タクソノミーボイス
// カスタム投稿タイプの登録
// カスタム投稿タイプとタクソノミーを登録
function create_voice_post_type_and_taxonomy() {
    // カスタム投稿タイプ "voice" を登録
    register_post_type('voice', array(
        'labels' => array(
            'name' => ('お客様の声'),
            'singular_name' => ('Voice')
        ),
        'public' => true, // 公開ページと管理画面に表示
        'has_archive' => true, // アーカイブページを有効化
        'supports' => array('title', 'editor', 'thumbnail'), // サポートするフィールド
        'rewrite' => array('slug' => 'voice'), // アーカイブページのスラッグ
    ));

    // タクソノミー "voice_category" を登録
    register_taxonomy(
        'voice_category', // タクソノミーのスラッグ
        'voice', // 関連付ける投稿タイプ
        array(
            'label' => __('Voiceカテゴリー'), // 管理画面で表示されるラベル
            'rewrite' => array('slug' => 'voice-category'), // タクソノミーのURLスラッグ
            'hierarchical' => true, // 階層構造を有効化
        )
    );
}
add_action('init', 'create_voice_post_type_and_taxonomy');


///コンタクトフォーム7
function generate_post_titles_dropdown() {
  // 投稿を取得するクエリ
  $args = array(
      'post_type' => 'contact_form_title', // 投稿タイプが 'post' の場合
      'posts_per_page' => -1, // すべての投稿を取得
      'orderby' => 'title', // タイトルでソート
      'order' => 'ASC' // 昇順
  );
  $posts = get_posts($args);

  // ドロップダウンのオプションを生成
  $options = '';
  foreach ($posts as $post) {
      $options .= '<option value="' . esc_attr($post->post_title) . '">' . esc_html($post->post_title) . '</option>';
  }

  return $options;
}

function replace_post_titles_placeholder($form) {
  // プレースホルダーを検索し、生成されたドロップダウンオプションに置換
  $dropdown_options = generate_post_titles_dropdown();
  $form = str_replace('[post_titles_dropdown]', $dropdown_options, $form);
  return $form;
}
add_filter('wpcf7_form_elements', 'replace_post_titles_placeholder');


//コンタクトフォームのサンクスページへのURL設定
add_action('wp_footer', function() {
    if (is_page()) {
        ?>
        <script>
            document.addEventListener('wpcf7mailsent', function(event) {
                location.href = "<?php echo esc_url(home_url('/contact-send-completely')); ?>"; // サンクスページのURL
            }, false);
        </script>
        <?php
    }
});

//下層ページの内容をTOPページに反映する


function create_custom_post_type() {
    register_post_type('price_post', array(
        'labels' => array(
            'name' => 'price',
            'singular_name' => 'price',
        ),
        'public' => true, // 投稿タイプを公開
        'has_archive' => true, // アーカイブページを有効にする
        'supports' => array('title', 'editor'), // タイトルと本文をサポート
        'show_in_menu' => false, // 管理画面メニューに表示しない
    ));
}
add_action('init', 'create_custom_post_type');



// functions.php に追加
add_image_size('custom-size', 294, 218, true); // 400px × 300pxのサイズ（切り抜きあり）


// TOPページのswiperの下層ページの反映,カスタム投稿タイプの追加
// タクソノミーでフィルタリングする場合
$args = array(
    'post_type' => 'campaign',
    'posts_per_page' => 8,
    'tax_query' => array(
        array(
            'taxonomy' => 'campaign_category',
            'field' => 'slug',
            'terms' => 'featured'  // 特定のカテゴリーのみ表示
        )
    )
);

// 特定の投稿を除外する場合
$args['post__not_in'] = array(1, 2, 3);  // 除外したい投稿IDを指定

// 特定の投稿を優先表示する場合
$args['orderby'] = 'menu_order';
$args['order'] = 'ASC';


//contactフォームのドロップダウンメニューについて
// Contact Form 7 の select タグにカスタムショートコードの内容を埋め込む
add_filter('wpcf7_form_tag', 'add_dynamic_dropdown', 10, 2);

function add_dynamic_dropdown($tag, $unused) {
    // タグの名前をチェック (your-campaign に該当するか)
    if ($tag['name'] === 'your-campaign') {
        // 投稿データを取得
        $args = array(
            'post_type'      => 'campaign_inquiry', // カスタム投稿タイプ (通常の投稿なら 'post')
            'posts_per_page' => -1,         // 全件取得
            'post_status'    => 'publish', // 公開済みの投稿のみ取得
            'orderby'        => 'date',    // 並び順を指定
            'order'          => 'DESC',    // 降順
        );
        $posts = get_posts($args);

        // 投稿タイトルをオプションに追加
        $options = array('キャンペーン内容を選択'); // プレースホルダーの選択肢
        foreach ($posts as $post) {
            $options[] = esc_html($post->post_title); // 投稿のタイトルをエスケープして追加
        }

        // CF7 のタグにオプションを埋め込む
        $tag['raw_values'] = $options; // オプションを Contact Form 7 のタグに追加
        $tag['values'] = $options;
        $tag['labels'] = $options;
    }

    return $tag;
}




