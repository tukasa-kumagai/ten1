<?php get_header();  ?>
<div class="lower-page-mv">
  <div class="lower-page-mv__slide">
    <picture class="lower-page-mv__slide-image">
      <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/information/pc-information-mv.jpg')); ?>" media="(min-width: 767px)">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/information/sp-information-mv.jpg')); ?>" alt="">
    </picture>
  </div>
  <div class="lower-page-mv__text">
    <p class="lower-page-mv__title">Information</p>
  </div>
</div>

<body>
  <main>
    <p class="pagetop"><a href="#"><img class="pagetop__button" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
    <?php get_template_part( 'template-parts/breadcrumb' ); ?>
    <section class="l-page-information page-information">
      <div class="tab__inner inner fish fish--information">

        <ul class="sub-information__tab info-tab">
          <li class="info-tab__text js-infoTab-trigger is-active" id="tab_panel-1" data-category="license">ライセンス<br class="info-tab__text--md-show">講習</li>
          <li class="info-tab__text js-infoTab-trigger" id="tab_panel-2" data-category="fanDiving">ファン<br class="info-tab__text--md-show">ダイビング</li>
          <li class="info-tab__text js-infoTab-trigger" id="tab_panel-3" data-category="diving">体験<br class="info-tab__text--md-show">ダイビング
          </li>
        </ul>
        <div class="sub-information__items info-content">
          <div class="info-content__item js-infoContent-target is-active" data-target="license" id="tab_panel-1">
            <div class="info-content__wrapper">
              <figure class="info-content__image"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/information/information-diving-image1.jpg')); ?>" alt="緑色のくじらのデザイン">
              </figure>
              <div class="info-content__meta">
                <h3 class="info-content__title">ライセンス講習</h3>
                <p class="info-content__text text">
                  泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします&excl;スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう&excl;
                </p>
              </div>
            </div>
          </div>
          <div class="info-content__item js-infoContent-target" data-target="fanDiving" id="tab_panel-2">
            <div class="info-content__wrapper">
              <figure class="info-content__image"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/information/information-diving-image2.jpg')); ?>" alt="緑色のくじらのデザイン">
              </figure>
              <div class="info-content__meta">
                <h3 class="info-content__title">ファンダイビング</h3>
                <p class="info-content__text text">
                  ブランクダイバー、ライセンスを取り立ての方も安心&excl;沖縄本島を代表する「青の洞窟」&#040;真栄田岬&#041;やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意&excl;
                </p>
              </div>
            </div>
          </div>
          <div class="info-content__item js-infoContent-target" data-target="diving" id="tab_panel-3">
            <div class=" info-content__wrapper">
              <figure class="info-content__image"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/information/information-diving-image3.jpg')); ?>" alt="緑色の小魚のデザイン"></figure>

              <div class="info-content__meta">
                <h3 class="info-content__title">体験ダイビング</h3>
                <p class="info-content__text tex5">
                  ブランクダイバー、ライセンスを取り立ての方も安心&excl;沖縄本島を代表する「青の洞窟」&#040;真栄田岬&#041;やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意&excl;
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer();  ?>