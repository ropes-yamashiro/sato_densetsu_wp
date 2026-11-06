    <!-- フッター -->
    <footer class="l-footer">
      <!-- CONTACT / FAQ バナー -->
      <div class="footer-banners fadeInUp">
        <div class="section_space">
          <ul class="footer-banners__list">
            <li class="footer-banners__item">
              <div class="footer-banner footer-banner--contact">
                <div class="footer-banner__body">
                  <div class="footer-banner__title">
                    <p class="footer-banner__en">CONTACT</p>
                    <p class="footer-banner__ja">お問い合わせ</p>
                  </div>
                  <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c-btn is-white">お問い合わせ <img class="c-btn__arrow"
                      src="<?php echo get_template_directory_uri(); ?>/images/common/cp_arrow-blue.png" alt="" aria-hidden="true"></a>
                </div>
              </div>
            </li>
            <li class="footer-banners__item">
              <div class="footer-banner footer-banner--faq">
                <div class="footer-banner__body">
                  <div class="footer-banner__title">
                    <p class="footer-banner__en">FAQ</p>
                    <p class="footer-banner__ja">よくある質問</p>
                  </div>
                  <a href="<?php echo esc_url(home_url('/faq/')); ?>" class="c-btn is-white">詳しく見る <img class="c-btn__arrow"
                      src="<?php echo get_template_directory_uri(); ?>/images/common/cp_arrow-blue.png" alt="" aria-hidden="true"></a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer__inner">
        <div class="footer__body">
          <!-- ロゴ・会社情報 -->
          <div class="footer__info">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_logo.png" alt="佐藤電設工業株式会社">
              <span>佐藤電設工業</span>
            </a>
            <address class="footer__address">
              <p>〒000-00000<br class="sp_in">○○県○○市○○○○</p>
              <p><a href="tel:000-000-0000">Tel：000-000-0000</a><br><span class="not-link"><a
                    href="tel:000-000-0000">Fax：000-000-0000</a></span></p>
            </address>
          </div>
          <!-- PCナビ -->
          <nav class="footer__nav">
            <ul class="footer__nav-col">
              <li><a href="<?php echo esc_url(home_url('/')); ?>" class="footer__nav-link">TOP</a></li>
              <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="footer__nav-link">私たちについて</a></li>
              <li><a href="<?php echo esc_url(home_url('/construction/')); ?>" class="footer__nav-link">高圧工事とは</a></li>
              <li><a href="<?php echo esc_url(home_url('/work-list/')); ?>" class="footer__nav-link">施工実績</a></li>
            </ul>
            <ul class="footer__nav-col">
              <li><a href="<?php echo esc_url(home_url('/process/')); ?>" class="footer__nav-link">ご依頼の流れ</a></li>
              <li><a href="<?php echo esc_url(home_url('/team-list/')); ?>" class="footer__nav-link">社員紹介</a></li>
              <li><a href="<?php echo esc_url(home_url('/recruit-list/')); ?>" class="footer__nav-link">採用情報</a></li>
              <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="footer__nav-link">お問い合わせ</a></li>
            </ul>
            <ul class="footer__nav-col">
              <li><a href="<?php echo esc_url(home_url('/faq/')); ?>" class="footer__nav-link">よくある質問</a></li>
              <li><a href="<?php echo esc_url(home_url('/site-map/')); ?>" class="footer__nav-link">サイトマップ</a></li>
              <li><a href="<?php echo esc_url(home_url('/privacy/')); ?>" class="footer__nav-link">プライバシーポリシー</a></li>
            </ul>
          </nav>
        </div>
        <p class="footer__copyright">© Sato electrical construction All Rights Reserved.</p>
      </div>
    </footer>

    <!-- ページトップ -->
    <button class="page-top" id="page-top" aria-label="ページトップへ"></button>
    <?php if ($sato_is_top = (is_home() || is_front_page()) || is_page('about-us')) : ?>
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <?php endif; ?>
    <script src="<?php echo esc_url(sato_asset_url('js/script.js')); ?>"></script>
    <?php if (is_home() || is_front_page()) : ?>
      <script src="<?php echo esc_url(sato_asset_url('js/top.js')); ?>"></script>
    <?php else : ?>
      <script src="<?php echo esc_url(sato_asset_url('js/pages.js')); ?>"></script>
    <?php endif; ?>
    <?php
    // フォームページ（入力 / 完了）：確認画面の案内文・完了ページへの遷移・直接アクセス判定
    $sato_form_slug = is_page() ? get_post_field('post_name', get_queried_object_id()) : '';
    $sato_form_conf = sato_form_pages();
    $sato_form_done = sato_form_for_complete_page($sato_form_slug);
    if (isset($sato_form_conf[$sato_form_slug]) || $sato_form_done) :
      $sato_form_key = $sato_form_done ? $sato_form_done['form'] : $sato_form_slug;
      $sato_form     = array('formSlug' => $sato_form_key);
      if (isset($sato_form_conf[$sato_form_slug])) {
        $sato_form['completeUrl'] = home_url('/' . $sato_form_conf[$sato_form_slug]['complete'] . '/');
        $sato_form['confirmUrl']  = home_url('/' . $sato_form_conf[$sato_form_slug]['confirm'] . '/');
        $sato_form['formUrl']     = home_url('/' . $sato_form_slug . '/');
      }
    ?>
      <script>
        window.satoForm = <?php echo wp_json_encode($sato_form); ?>;
      </script>
      <script src="<?php echo esc_url(sato_asset_url('js/form.js')); ?>"></script>
    <?php endif; ?>
    <?php wp_footer(); ?>
    </body>

    </html>