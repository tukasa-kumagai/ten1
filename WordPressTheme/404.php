<?php get_header();  ?>


  <main class="main__content">

  <p class="pagetop"><a href="#"><img class="pagetop__button" src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/common/back-up-image.jpg')); ?>" alt="戻るボタン"></a></p>
    <nav class="breadcrumb breadcrumb--white">
      <div class="inner">
        <ol class="breadcrumb__group breadcrumb__group--position">
        <?php if (!is_front_page()) { ?>
	<?php if (function_exists('bcn_display')) { ?>
		<div id="breadcrumb" class="w_inner" vocab="http://schema.org/" typeof="BreadcrumbList">
			<?php bcn_display(); ?>
		</div>
	<?php } ?>
<?php } ?>
        </ol>
      </div>
    </nav>
    <?php
  $home = esc_url(home_url('/home'));

  ?>
    <section class="page-404">
      <div class="page-404__inner inner">
        <p class="page-404__title">404</p>
        <p class="page-404__text">申し訳ありません。<br>
          お探しのページが見つかりません。</p>
        <div class="page-404__button-inner">
          <a href="<?php echo $home ?>" class="button button--white">
            <span class="button__text button__text--green">View more</span>
          </a>
        </div>
      </div>
    </section>
  </main>
  <footer class="l-footer footer l-footer--404position">
    <div class="inner">
      <div class="footer__logo">
        <a href="./index.html" class="footer__logo-img">
          <img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/common/codeups-logo-footer.jpg')); ?>" alt="ボタン画像1">
        </a>
        <div class="footer__sub-logo">
          <div class="footer__sub-logo-img1">
            <img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/common/facebook-logo-image.jpg')); ?>" alt="ボタン画像2">
          </div>
          <div class="footer__sub-logo-img2">
            <img src="<?php echo esc_url(get_theme_file_uri('dist/assets/images/common/instagram-logo-image.jpg')); ?>" alt="ボタン画像3">
          </div>
        </div>
      </div>
      <div class="footer__content">
        <div class="footer__wrapper1">
          <div class="footer__group1">
            <ul class="footer__nav1">
              <li class="footer__list1"><a class="footer__button" href="<?php echo esc_url(home_url('/campaign')); ?>">キャンペーン</a></li>
              <li class="footer__list2"><a class="footer__button" href="<?php echo esc_url(home_url('/campaign')); ?>">ライセンス取得</a></li>
              <li class="footer__list2"><a class="footer__button" href="<?php echo esc_url(home_url('/campaign')); ?>">貸切体験ダイビング</a>
              </li>
              <li class="footer__list2"><a class="footer__button" href="<?php echo esc_url(home_url('/campaign')); ?>">ナイトダイビング</a>
              </li>
            </ul>
            <ul class="footer__nav2">
              <li class="footer__list1"><a class="footer__button" href="<?php echo esc_url(home_url('/about-us')); ?>">私たちについて</a></li>
            </ul>
          </div>
          <div class="footer__group1">
            <ul class="footer__nav1">
              <li class="footer__list1"><a class="footer__button" href="<?php echo esc_url(home_url('/information')); ?>">ダイビング情報</a></li>
              <li class="footer__list2"><a class="footer__button" href="page-information.html#tab_panel-1">ライセンス講習</a>
              </li>
              <li class="footer__list2"><a class="footer__button" href="page-information.html#tab_panel-2">体験ダイビング</a>
              </li>
              <li class="footer__list2"><a class="footer__button" href="page-information.html#tab_panel-3">ファンダイビング</a>
              </li>
            </ul>
            <ul class="footer__nav2">
              <li class="footer__list1"><a class="footer__button" href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
            </ul>
          </div>
        </div>
        <div class="footer__wrapper2">
          <div class="footer__group2">
            <ul class="footer__nav1">
              <li class="footer__list1"><a class="footer__button" href="<?php echo esc_url(home_url('/voice')); ?>">お客様の声</a></li>
            </ul>
            <ul class="footer__nav1">
              <li class="footer__list3"><a class="footer__button" href="<?php echo esc_url(home_url('/price')); ?>">料金一覧</a></li>
              <li class="footer__list2"><a class="footer__button" href="<?php echo esc_url(home_url('/price')); ?>">ライセンス講習</a></li>
              <li class="footer__list2"><a class="footer__button" href="<?php echo esc_url(home_url('/price')); ?>">体験ダイビング</a></li>
              <li class="footer__list2"><a class="footer__button" href="<?php echo esc_url(home_url('/price')); ?>">ファンダイビング</a></li>
            </ul>
          </div>
          <div class="footer__group2">
            <ul class="footer__nav1">
              <li class="footer__list1"><a class="footer__button" href="<?php echo esc_url(home_url('/campaign')); ?>">よくある質問</a></li>
            </ul>
            <ul class="footer__nav2">
              <li class="footer__list1"><a class="footer__button" href="<?php echo esc_url(home_url('/site-map')); ?>">サイトマップ</a></li>
            </ul>
            <ul class="footer__nav2">
              <li class="footer__list1"><a class="footer__button" href="<?php echo esc_url(home_url('/privacy_policy')); ?>">プライバシー<br
                    class="br-one">ポリシー</a></li>
            </ul>
            <ul class="footer__nav2">
              <li class="footer__list1"><a class="footer__button" href="<?php echo esc_url(home_url('/terms-of-service')); ?>">利用規約</a></li>
            </ul>
            <ul class="footer__nav2">
              <li class="footer__list1"><a class="footer__button" href="<?php echo esc_url(home_url('/contact')); ?>">おい問わ合せ</a></li>
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