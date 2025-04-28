  <?php if (!is_404() && !is_page('contact')): ?>
  
    <?php global $home, $campaign, $about_us, $information, $information1, $information2, $information3, $blog, $voice, $price, $price1, $price2, $price3, $faq, $sitemap, $privacy_policy, $terms_of_service, $contact; ?>
    <section class="l-contact contact">
      <div class="contact__bg">
        <div class="inner">
          <div class="contact__maim">
            <div class="contact__head">
              <div class="contact__logo">
                <h2><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/codeups-logo-contact.png')); ?>" alt="ロゴ画像"></h2>
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
                <a href="<?php echo $contact; ?>" class="button">
                  <span class="button__text">Contact us</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </main>
  <?php endif; ?>
  <?php global $home, $campaign, $about_us, $information, $information1, $information2, $information3, $blog, $voice, $price, $price1, $price2, $price3, $faq, $sitemap, $privacy_policy, $terms_of_service, $contact; ?>
  <footer class="l-footer footer ">
    <div class="inner">
      <div class="footer__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo-img">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/codeups-logo-footer.jpg')); ?>" alt="ボタン画像1">
        </a>
        <div class="footer__sub-logo">
          <a href="https://www.facebook.com/yourusername" target="_blank" class="footer__sub-logo-img1">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/facebook-logo-image.jpg')); ?>" alt="ボタン画像2">
          </a>
          <a href="https://www.instagram.com/yourusername" target="_blank" class="footer__sub-logo-img2">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/instagram-logo-image.jpg')); ?>" alt="ボタン画像3">
          </a>
        </div>
      </div>
      
      <div class="footer__content">
        <div class="footer__wrapper1">
          <div class="footer__group1">
            <ul class="footer__nav1">
              <li class="footer__list1">
                <a class="footer__button" href="<?php echo esc_url($campaign); ?>">キャンペーン</a>
              </li>
              <?php
              $taxonomy = 'campaign_category';

              // タクソノミーの全カテゴリーを取得
              $terms = get_terms([
                'taxonomy'   => $taxonomy,
                'hide_empty' => false, // 投稿がなくても表示
              ]);

              // 取得したカテゴリーごとにリンクを作成
              if (!empty($terms) && !is_wp_error($terms)) {
                foreach ($terms as $term) {
                  $term_link = get_term_link($term);

                  if (!is_wp_error($term_link)) {
                    echo '<li class="footer__list2">';
                    echo '<a class="footer__button" href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a>';
                    echo '</li>';
                  }
                }
              } else {
                echo '<li class="footer__list2"><a class="footer__button" href="#">カテゴリーがありません</a></li>';
              }
              ?>
            </ul>
            <ul class="footer__nav2">
              <li class="footer__list1"><a class="footer__button" href="<?php echo $about_us; ?>">私たちについて</a></li>
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