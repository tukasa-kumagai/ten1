<?php get_header();  ?>

<body><?php body_class(); ?>
  <?php wp_body_open();  ?>
  <div class="lower-page-mv">
    <div class="lower-page-mv__slide">
      <picture class="lower-page-mv__slide-image">
        <source srcset="<?php echo esc_url(get_theme_file_uri('dist/assets/images/campaign/pc-campign-mv-image.jpg')); ?>" media="(min-width: 768px)">
        <img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/campaign/sp-campign-mv-image.jpg')); ?>" alt="キャンペーンメイン画像">
      </picture>
    </div>
    <div class="lower-page-mv__text">
      <p class="lower-page-mv__title">Campaign</p>
    </div>
  </div>

  <main>

    <p class="pagetop"><a href="#"><img class="pagetop__button" src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
    <nav class="breadcrumb breadcrumb--position">
      <div class="breadcrumb__inner inner">
        <ol class="breadcrumb__group breadcrumb__group--position2">
          <li class="breadcrumb__list">
            <a class="breadcrumb__item" href="./index.html"><span class="breadcrumb__item-link">TOP</span></a>
          </li>
          <li class="breadcrumb__list">
            <a class="breadcrumb__item" href="./page-campaign.html"><span class="breadcrumb__item-link">キャンペーン</span></a>
          </li>
        </ol>
      </div>
    </nav>
    <section class="l-page-campaign page-campaign">
      <div class="page-campaign__inner inner fish">
        <div class="page-campaign__categories button2">
          <div class="page-campaign__category button2__items">
            <a href="#" class="button2__item button2__item--green">
              <span class="button2__item-link button2__item-link--white">ALL</span>
            </a>
            <a href="#" class="button2__item button__item--white">
              <span class="button2__item-link button2__item-link--green">ライセンス講習</span>
            </a>
            <a href="#" class="button2__item button__item--white">
              <span class="button2__item-link button2__item-link--green">ファンダイビング</span>
            </a>
            <a href="#" class="button2__item button__item--white">
              <span class="button2__item-link button2__item-link--green">体験ダイビング</span>
            </a>
          </div>
        </div>
        <div class="page-campaign__main">
          <div class="pagination__list page-campaign__items">
            <div class="pagination__list-item page-campaign__item  swiper-slide card">
              <div class="card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/campaign/campaign-card-image1.jpg')); ?>" alt="キャンペーンカード1">
              </div>
              <div class="card__body card__body--under">
                <div class="card__head card__head--campaign-position">
                  <p class="card__head-title">ライセンス講習</p>
                  <p class="card__head-text card__head-text--campaign-size">ライセンス取得</p>
                </div>
              </div>
              <div class="card__foot card__foot--campaign-under">
                <p class="card__foot-title">全部コミコミ(お一人様)</p>
                <div class="card__foot-price card__foot-price--campaign-position">
                  <p class="card__foot-regular card__foot-regular--campaign-position">¥56,000</p>
                  <p class="card__foot-discount card__foot-discount--size">¥46,000</p>
                </div>
              </div>
              <p class="card__foot-text card__foot-text--campaign-width">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
              </p>
              <p class="card__foot-day card__foot-day--position">2023/6/1-9/30</p>
              <p class="card__foot-inquiry">ご予約・お問い合わせはコチラ</p>
              <a href="./page-contact.html" class="button button--position1">
                <span class="button__text">Contact us</span>
              </a>
            </div>
            <div class="pagination__list-item page-campaign__item  swiper-slide card">
              <div class="card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/campaign/campaign-card-image2.jpg')); ?>" alt="キャンペーンカード2">
              </div>
              <div class="card__body card__body--under">
                <div class="card__head card__head--campaign-position">
                  <p class="card__head-title">体験ダイビング</p>
                  <p class="card__head-text card__head-text--campaign-size">貸切体験ダイビング</p>
                </div>
              </div>
              <div class="card__foot card__foot--campaign-under">
                <p class="card__foot-title">全部コミコミ(お一人様)</p>
                <div class="card__foot-price card__foot-price--campaign-position">
                  <p class="card__foot-regular card__foot-regular--campaign-position">¥24,000</p>
                  <p class="card__foot-discount card__foot-discount--size">¥18,000</p>
                </div>
              </div>
              <p class="card__foot-text card__foot-text--campaign-width">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
              </p>
              <p class="card__foot-day card__foot-day--position">2023/6/1-9/30</p>
              <p class="card__foot-inquiry">ご予約・お問い合わせはコチラ</p>
              <a href="./page-contact.html" class="button button--position1">
                <span class="button__text">Contact us</span>
              </a>
            </div>
            <div class="pagination__list-item page-campaign__item  swiper-slide card">
              <div class="card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/campaign/campaign-card-image3.jpg')); ?>" alt="キャンペーンカード3">
              </div>
              <div class="card__body card__body--under">
                <div class="card__head card__head--campaign-position">
                  <p class="card__head-title">体験ダイビング</p>
                  <p class="card__head-text card__head-text--campaign-size">ナイトダイビング</p>
                </div>
              </div>
              <div class="card__foot card__foot--campaign-under">
                <p class="card__foot-title">全部コミコミ(お一人様)</p>
                <div class="card__foot-price card__foot-price--campaign-position">
                  <p class="card__foot-regular card__foot-regular--campaign-position">¥10,000</p>
                  <p class="card__foot-discount card__foot-discount--size">¥8,000</p>
                </div>
              </div>
              <p class="card__foot-text card__foot-text--campaign-width">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
              </p>
              <p class="card__foot-day card__foot-day--position">2023/6/1-9/30</p>
              <p class="card__foot-inquiry">ご予約・お問い合わせはコチラ</p>
              <a href="./page-contact.html" class="button button--position1">
                <span class="button__text">Contact us</span>
              </a>
            </div>
            <div class="pagination__list-item page-campaign__item  swiper-slide card">
              <div class="card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/campaign/campaign-card-image4.jpg')); ?>" alt="キャンペーンカード4">
              </div>
              <div class="card__body card__body--under">
                <div class="card__head card__head--campaign-position">
                  <p class="card__head-title">ファンダイビング</p>
                  <p class="card__head-text card__head-text--campaign-size">貸切ファンダイビング</p>
                </div>
              </div>
              <div class="card__foot card__foot--campaign-under">
                <p class="card__foot-title">全部コミコミ(お一人様)</p>
                <div class="card__foot-price card__foot-price--campaign-position">
                  <p class="card__foot-regular card__foot-regular--campaign-position">¥20,000</p>
                  <p class="card__foot-discount card__foot-discount--size">¥16,000</p>
                </div>
              </div>
              <p class="card__foot-text card__foot-text--campaign-width">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
              </p>
              <p class="card__foot-day card__foot-day--position">2023/6/1-9/30</p>
              <p class="card__foot-inquiry">ご予約・お問い合わせはコチラ</p>
              <a href="./page-contact.html" class="button button--position1">
                <span class="button__text">Contact us</span>
              </a>
            </div>
            <div class="pagination__list-item page-campaign__item  swiper-slide card">
              <div class="card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/campaign/campaign-card-image1.jpg')); ?>" alt="キャンペーンカード1">
              </div>
              <div class="card__body card__body--under">
                <div class="card__head card__head--campaign-position">
                  <p class="card__head-title">ライセンス講習</p>
                  <p class="card__head-text">ライセンス取得</p>
                </div>
              </div>
              <div class="card__foot card__foot--campaign-under">
                <p class="card__foot-title">全部コミコミ(お一人様)</p>
                <div class="card__foot-price">
                  <p class="card__foot-regular card__foot-regular--campaign-position">¥56,000</p>
                  <p class="card__foot-discount card__foot-discount--size">¥46,000</p>
                </div>
              </div>
              <p class="card__foot-text card__foot-text--campaign-width">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
              </p>
              <p class="card__foot-day card__foot-day--position">2023/6/1-9/30</p>
              <p class="card__foot-inquiry">ご予約・お問い合わせはコチラ</p>
              <a href="./page-contact.html" class="button button--position1">
                <span class="button__text">Contact us</span>
              </a>
            </div>
            <div class="pagination__list-item page-campaign__item  swiper-slide card">
              <div class="card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/campaign/campaign-card-image2.jpg')); ?>" alt="キャンペーンカード2">
              </div>
              <div class="card__body card__body--under">
                <div class="card__head card__head--campaign-position">
                  <p class="card__head-title">体験ダイビング</p>
                  <p class="card__head-text">貸切体験ダイビング</p>
                </div>
              </div>
              <div class="card__foot card__foot--campaign-under">
                <p class="card__foot-title">全部コミコミ(お一人様)</p>
                <div class="card__foot-price">
                  <p class="card__foot-regular card__foot-regular--campaign-position">¥24,000</p>
                  <p class="card__foot-discount card__foot-discount--size">¥18,000</p>
                </div>
              </div>
              <p class="card__foot-text card__foot-text--campaign-width">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
              </p>
              <p class="card__foot-day card__foot-day--position">2023/6/1-9/30</p>
              <p class="card__foot-inquiry">ご予約・お問い合わせはコチラ</p>
              <a href="./page-contact.html" class="button button--position1">
                <span class="button__text">Contact us</span>
              </a>
            </div>
            <div class="pagination__list-item page-campaign__item  swiper-slide card">
              <div class="card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/campaign/campaign-card-image3.jpg')); ?>" alt="キャンペーンカード3">
              </div>
              <div class="card__body card__body--under">
                <div class="card__head card__head--campaign-position">
                  <p class="card__head-title">体験ダイビング</p>
                  <p class="card__head-text">ナイトダイビング</p>
                </div>
              </div>
              <div class="card__foot card__foot--campaign-under">
                <p class="card__foot-title">全部コミコミ(お一人様)</p>
                <div class="card__foot-price">
                  <p class="card__foot-regular card__foot-regular--campaign-position">¥10,000</p>
                  <p class="card__foot-discount card__foot-discount--size">¥8,000</p>
                </div>
              </div>
              <p class="card__foot-text card__foot-text--width">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
              </p>
              <p class="card__foot-day card__foot-day--position">2023/6/1-9/30</p>
              <p class="card__foot-inquiry">ご予約・お問い合わせはコチラ</p>
              <a href="./page-contact.html" class="button button--position1">
                <span class="button__text">Contact us</span>
              </a>
            </div>
            <div class="pagination__list-item page-campaign__item  swiper-slide card">
              <div class="card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/campaign/campaign-card-image4.jpg')); ?>" alt="キャンペーンカード4">
              </div>
              <div class="card__body card__body--under">
                <div class="card__head card__head--campaign-position">
                  <p class="card__head-title">ファンダイビング</p>
                  <p class="card__head-text">貸切ファンダイビング</p>
                </div>
              </div>
              <div class="card__foot card__foot--campaign-under">
                <p class="card__foot-title">全部コミコミ(お一人様)</p>
                <div class="card__foot-price">
                  <p class="card__foot-regular card__foot-regular--campaign-position">¥20,000</p>
                  <p class="card__foot-discount card__foot-discount--size">¥16,000</p>
                </div>
              </div>
              <p class="card__foot-text card__foot-text--width">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
              </p>
              <p class="card__foot-day card__foot-day--position">2023/6/1-9/30</p>
              <p class="card__foot-inquiry">ご予約・お問い合わせはコチラ</p>
              <a href="./page-contact.html" class="button button--position1">
                <span class="button__text">Contact us</span>
              </a>
            </div>

          </div>
        </div>
      </div>
    </section>
    <section class="l-contact l-contact--low-page-position  contact">
      <div class="contact__bg">
        <div class="inner">
          <div class="contact__maim">
            <div class="contact__head">
              <div class="contact__logo">
              <h2><img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/common/codeups-logo-contact.png')); ?>" alt="ロゴ画像"></h2>
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
                <a href="./page-contact.html" class="button">
                  <span class="button__text">Contact us</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
<?php get_footer();  ?>