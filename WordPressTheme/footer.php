<section class="l-contact contact">
  <?php
  $home = esc_url(home_url('/home'));
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
  $price4 = esc_url(home_url('/price#post-292'));
  $faq = esc_url(home_url('/faq'));
  $sitemap = esc_url(home_url('/site-map'));
  $privacy_policy = esc_url(home_url('/privacy_policy'));
  $terms_of_service = esc_url(home_url('/terms-of-service'));
  $contact = esc_url(home_url('/contact'));
  ?>
  <div class="contact__bg">
    <div class="inner">
      <div class="contact__maim">
        <div class="contact__head">
          <div class="contact__logo">
            <h2><img src="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/common/codeups-logo-contact.png')); ?>" alt="ロゴ画像"></h2>
          </div>
          <div class="contact__head-under">
            <div class="contact__information">
              <p class="contact__address">沖縄県那覇市1-1</p>
              <p class="contact__phone">TEL:0120-000-0000</p>
              <p class="contact__time">営業時間:8:30-19:00</p>
              <p class="contact__holiday">定休日:毎週火曜日</p>
            </div>
            <div class="contact__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3230.6569523440035!2d139.791361!3d35.930896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzXCsDU1JzUxLjIiTiAxMznCsDQ3JzI4LjkiRQ!5e0!3m2!1sja!2sjp!4v1693382799043!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="contact__footer">
          <div class="contact__title">
            <p class="contact__title-name">Contact</p>
          </div>
          <div class="contact__inquiry">
            <p class="sp-contact__text">お問合せ</p>
            <p class="pc-contact__text">お問い合わせ</p>
            <p class="contact__subtext">ご予約・お問い合わせはコチラ</p>
          </div>
          <div class="contact__button-inner">
            <a href="<?php echo $contact ?>" class="button">
              <span class="button__text">Contact us</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</main>


<footer class="l-footer footer">
  <div class="inner">
    <div class="footer__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo-img">
        <img src="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/common/codeups-logo-footer.jpg')); ?>" alt="ボタン画像1">
      </a>
      <div class="footer__sub-logo">
        <a href="https://www.facebook.com/yourusername" target="_blank" class="footer__sub-logo-img1">
          <img src="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/common/facebook-logo-image.jpg')); ?>" alt="ボタン画像2">
        </a>
        <a href="https://www.instagram.com/yourusername" target="_blank" class="footer__sub-logo-img2">
          <img src="<?php echo esc_url(get_theme_file_uri('../dist/assets/images/common/instagram-logo-image.jpg')); ?>" alt="ボタン画像3">
        </a>
      </div>
    </div>
    <div class="footer__content">
      <div class="footer__wrapper1">
        <div class="footer__group1">
          <ul class="footer__nav1">
            <li class="footer__list1"><a class="footer__button" href="<?php echo $campaign ?>">キャンペーン</a></li>
            <?php
            // 用語IDとタクソノミー名を指定
            $term_id = 5; // 用語ID
            $taxonomy = 'campaign_category'; // タクソノミー名

            // タクソノミーページリンクを取得
            $term_link = get_term_link($term_id, $taxonomy);

            // リンクを表示（li タグを含める）
            if (!is_wp_error($term_link)) {
              echo '<li class="footer__list2">';
              echo '<a class="footer__button" href="' . esc_url($term_link) . '">ライセンス取得</a>';
              echo '</li>';
            } else {
              // エラーハンドリング（リンクが取得できない場合）
              echo '<li class="footer__list2">';
              echo '<a class="footer__button" href="#">リンクが無効です</a>';
              echo '</li>';
            }
            ?>
            <?php
            // 用語IDとタクソノミー名を指定
            $term_id = 6; // 用語ID
            $taxonomy = 'campaign_category'; // タクソノミー名

            // タクソノミーページリンクを取得
            $term_link = get_term_link($term_id, $taxonomy);

            // リンクを表示（li タグを含める）
            if (!is_wp_error($term_link)) {
              echo '<li class="footer__list2">';
              echo '<a class="footer__button" href="' . esc_url($term_link) . '">貸切体験ダイビング</a>';
              echo '</li>';
            } else {
              // エラーハンドリング（リンクが取得できない場合）
              echo '<li class="footer__list2">';
              echo '<a class="footer__button" href="#">リンクが無効です</a>';
              echo '</li>';
            }
            ?>
            <?php
            // 用語IDとタクソノミー名を指定
            $term_id = 7; // 用語ID
            $taxonomy = 'campaign_category'; // タクソノミー名

            // タクソノミーページリンクを取得
            $term_link = get_term_link($term_id, $taxonomy);

            // リンクを表示（li タグを含める）
            if (!is_wp_error($term_link)) {
              echo '<li class="footer__list2">';
              echo '<a class="footer__button" href="' . esc_url($term_link) . '">ファンダイビング</a>';
              echo '</li>';
            } else {
              // エラーハンドリング（リンクが取得できない場合）
              echo '<li class="footer__list2">';
              echo '<a class="footer__button" href="#">リンクが無効です</a>';
              echo '</li>';
            }
            ?>

          </ul>
          <ul class="footer__nav2">
            <li class="footer__list1"><a class="footer__button" href="<?php echo $about_us ?>">私たちについて</a></li>
          </ul>
        </div>


        <div class="footer__group1">
          <ul class="footer__nav1">
            <li class="footer__list1"><a class="footer__button" href="<?php echo $information ?>">ダイビング情報</a></li>
            <li class="footer__list2"><a class="footer__button" href="<?php echo $information1 ?>">ライセンス講習</a>
            </li>
            <li class="footer__list2"><a class="footer__button" href="<?php echo $information2 ?>">体験ダイビング</a>
            </li>
            <li class="footer__list2"><a class="footer__button" href="<?php echo $information3 ?>">ファンダイビング</a>
            </li>
          </ul>
          <ul class="footer__nav2">
            <li class="footer__list1"><a class="footer__button" href="<?php echo $blog ?>">ブログ</a></li>
          </ul>
        </div>
      </div>
      <div class="footer__wrapper2">
        <div class="footer__group2">
          <ul class="footer__nav1">
            <li class="footer__list1"><a class="footer__button" href="<?php echo $voice ?>">お客様の声</a></li>
          </ul>
          <ul class="footer__nav1">

            <li class="footer__list3"><a class="footer__button" href="<?php echo $price ?>">料金一覧</a></li>
            <li class="footer__list2"><a class="footer__button" href="<?php echo $price1 ?>">ライセンス講習</a></li>
            <li class="footer__list2"><a class="footer__button" href="<?php echo $price2 ?>">体験ダイビング</a></li>
            <li class="footer__list2"><a class="footer__button" href="<?php echo $price3 ?>">ファンダイビング</a></li>
          </ul>
        </div>
        <div class="footer__group2">
          <ul class="footer__nav1">
            <li class="footer__list1"><a class="footer__button" href="<?php echo $faq ?>">よくある質問</a></li>
          </ul>
          <ul class="footer__nav2">
            <li class="footer__list1"><a class="footer__button" href="<?php echo $sitemap ?>">サイトマップ</a></li>
          </ul>
          <ul class="footer__nav2">
            <li class="footer__list1"><a class="footer__button" href="<?php echo $privacy_policy ?>">プライバシー<br
                  class="br-one">ポリシー</a></li>
          </ul>
          <ul class="footer__nav2">
            <li class="footer__list1"><a class="footer__button" href="<?php echo $terms_of_service ?>">利用規約</a></li>
          </ul>
          <ul class="footer__nav2">
            <li class="footer__list1"><a class="footer__button" href="<?php echo $contact ?>">おい問わ合せ</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer__Copywriter-inner">
      <p class="footer__Copywriter">Copyright © <?php echo date('Y'); ?> CodeUps LLC. All Rights Reserved.</p>
    </div>
  </div>
</footer>
<?php wp_footer();  ?>
</body>

</html>