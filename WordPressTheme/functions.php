<?php


function add_custom_scripts() {
    // Google Fontsの追加
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap',
        array(),
        null
    );

    // swiperのCSSの追加
    wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', false );

    // テーマのCSSの追加
    wp_enqueue_style( 'theme-styles', get_theme_file_uri('/assets/css/style.css'), false );

    // jQueryの追加
    wp_enqueue_script( 'jquery-cdn', 'https://code.jquery.com/jquery-3.6.0.js', array(), '3.6.0', true );
    

    // swiperのJSの追加
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.0.0', true );

    // jQuery Inview
    wp_enqueue_script( 'theme-scripts1', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), '1.0.0', true );
    

    // メインテーマのJSの追加
    wp_enqueue_script( 'theme-scripts2', get_theme_file_uri('/assets/js/script.js'), array('jquery'), '1.0.0', true );

     // メインテーマのJSの追加
    
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





// アイキャッチ画像を有効化
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




//キャンペーンペーの投稿表示件数の指定
function custom_campaign_posts_per_page($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('campaign')) {
        $query->set('posts_per_page', 4);
    }
}
add_action('pre_get_posts', 'custom_campaign_posts_per_page');

//ボイスペーの投稿表示件数の指定
function custom_voice_posts_per_page($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('voice')) {
        $query->set('posts_per_page', 6);
    }
}
add_action('pre_get_posts', 'custom_voice_posts_per_page');





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
            'post_type'      => 'campaign', // カスタム投稿タイプ (通常の投稿なら 'post')
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



$prev_post = get_previous_post(true, '', 'category'); // カテゴリー内の前の投稿を取得
$next_post = get_next_post(true, '', 'category'); // カテゴリー内の次の投稿を取得



//グローバル変数
function set_global_urls() {
    global $campaign, $about_us, $information, $information1, $information2, $information3;
    global $blog, $voice, $price, $price1, $price2, $price3, $faq, $sitemap, $privacy_policy, $terms_of_service, $contact;

    $home = esc_url(home_url('/'));
    $campaign = esc_url(home_url('/campaign'));
    $about_us = esc_url(home_url('/about_us'));
    $information = esc_url(home_url('/information'));
    $information1 = esc_url(home_url('/information#tab_panel-1'));
    $information2 = esc_url(home_url('/information#tab_panel-2'));
    $information3 = esc_url(home_url('/information#tab_panel-3'));
    $blog = esc_url(home_url('/blog'));
    $voice = esc_url(home_url('/voice'));
    $price = esc_url(home_url('/price'));
    $price1 = esc_url(home_url('/price#post-316'));
    $price2 = esc_url(home_url('/price#post-315'));
    $price3 = esc_url(home_url('/price#post-314'));
    $faq = esc_url(home_url('/faq'));
    $sitemap = esc_url(home_url('/site-map'));
    $privacy_policy = esc_url(home_url('/privacy_policy'));
    $terms_of_service = esc_url(home_url('/terms-of-service'));
    $contact = esc_url(home_url('/contact'));
}
add_action('wp', 'set_global_urls'); // 'init' より後のタイミングが安心


function custom_dashboard_shortcut_widget() {
    wp_add_dashboard_widget(
        'custom_shortcut_widget', // ウィジェットID
        '管理ショートカット',    // タイトル
        'custom_dashboard_shortcut_widget_display' // 表示用関数
    );
}
add_action('wp_dashboard_setup', 'custom_dashboard_shortcut_widget');

function custom_dashboard_shortcut_widget_display() {
    $shortcuts = [
        [
            'url' => admin_url('edit.php'), // 投稿一覧
            'icon' => 'dashicons-admin-post',
            'label' => '投稿一覧'
        ],
        [
            'url' => admin_url('upload.php'), // メディアライブラリ
            'icon' => 'dashicons-format-image',
            'label' => 'メディア'
        ],
        [
            'url' => admin_url('edit.php?post_type=page'), // 固定ページ
            'icon' => 'dashicons-admin-page',
            'label' => '固定ページ'
        ],
        [
            'url' => admin_url('edit.php?post_type=news'), // カスタム投稿タイプ「お知らせ」
            'icon' => 'dashicons-megaphone',
            'label' => 'お知らせ'
        ],
        [
            'url' => admin_url('admin.php?page=contact-form-7'), // Contact Form 7
            'icon' => 'dashicons-email-alt',
            'label' => 'お問い合わせ'
        ],
    ];

    echo '<div style="display:flex; flex-wrap:wrap; gap:40px;">'; // 横の間隔を広げる
    foreach ($shortcuts as $item) {
        echo '<div style="text-align:center; width:200px; height:100px;">'; // 幅と高さを倍に設定
        echo '<a href="' . esc_url($item['url']) . '" style="text-decoration:none; color:inherit; display:block; height:100%; width:100%; display:flex; flex-direction:column; justify-content:center;">';
        echo '<span class="dashicons ' . esc_attr($item['icon']) . '" style="font-size:64px; margin-bottom:10px;"></span>'; // アイコンサイズを倍に
        echo esc_html($item['label']);
        echo '</a>';
        echo '</div>';
    }
    echo '</div>';
}



// カスタムフィールドを表示するためのメタボックスを追加
function my_custom_meta_box() {
    // "voice"カスタム投稿タイプのみにメタボックスを追加
    if ('voice' == get_post_type()) {
        add_meta_box(
            'my_custom_fields', // メタボックスID
            'Voice Custom Fields', // メタボックスのタイトル
            'my_custom_meta_box_content', // メタボックス内に表示するコンテンツ
            'voice', // カスタム投稿タイプ
            'normal', // メタボックスの位置（normal, side, advanced）
            'default' // 優先度（default, high, low）
        );
    }
}
add_action('add_meta_boxes', 'my_custom_meta_box');

// メタボックス内に表示する内容
function my_custom_meta_box_content($post) {
    // nonceフィールド（セキュリティ）
    wp_nonce_field('my_custom_nonce', 'my_custom_nonce_field');

    // 投稿に関連するカスタムフィールドの取得
    $my_custom_field = get_post_meta($post->ID, '_my_custom_field', true);

    // 権限に基づいて表示を制御（ここでは "editor" 以上の権限を持つユーザーに表示）
    if (current_user_can('editor')) {
        echo '<label for="my_custom_field">Custom Field</label>';
        echo '<input type="text" name="my_custom_field" id="my_custom_field" value="' . esc_attr($my_custom_field) . '" />';
    } else {
        echo '<p>You do not have permission to view this field.</p>';
    }
}

// カスタムフィールドの保存処理
function my_save_custom_meta($post_id) {
    // nonceチェック
    if (!isset($_POST['my_custom_nonce_field']) || !wp_verify_nonce($_POST['my_custom_nonce_field'], 'my_custom_nonce')) {
        return;
    }

    // 自動保存を防止
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // 入力データの保存
    if (isset($_POST['my_custom_field'])) {
        update_post_meta($post_id, '_my_custom_field', sanitize_text_field($_POST['my_custom_field']));
    }
}
add_action('save_post', 'my_save_custom_meta');

function remove_editor_from_multiple_custom_post_types() {
    $post_types = ['price', 'voice', 'campaign', 'question','about_img',]; // ←スラッグを配列で並べる！
  
    foreach ($post_types as $post_type) {
      remove_post_type_support($post_type, 'editor');
    }
  }
  add_action('init', 'remove_editor_from_multiple_custom_post_types');


  // Classic Editor をカスタム投稿タイプだけに制限し、通常の投稿ではブロックエディタを使う
add_filter('use_block_editor_for_post_type', function($use_block_editor, $post_type) {
    if ($post_type === 'post') {
        return true; // 通常の投稿（post）はブロックエディタを使用
    } else {
        return false; // その他の投稿タイプでは Classic Editor を使用
    }
}, 10, 2);

  
?>


