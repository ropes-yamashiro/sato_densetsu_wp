<?php get_header(); ?>
    <main class="l-main">
        <div class="l-page">
            <!-- ページタイトル -->
            <section class="section_content--intro fadeInUp">
                <div class="section_space">
                    <h1 class="lower-page-title">
                        <span class="lower-page-title-en">SITE MAP</span>
                        <span class="lower-page-title-ja">サイトマップ</span>
                    </h1>
                </div>
            </section>

            <!-- サイトマップ -->
            <section class="section_content--sitemap fadeInUp">
                <div class="section_space">
                    <nav class="sitemap" aria-label="サイトマップ">
                        <h2 class="sitemap__home">HOME</h2>

                        <!-- SP用リスト（順番はサイトの論理順） -->
                        <ul class="sitemap__list sp-layout">
                            <li class="sitemap__item">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sitemap__link">TOP</a>
                            </li>
                            <li class="sitemap__item">
                                <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="sitemap__link">私たちについて</a>
                            </li>
                            <li class="sitemap__item">
                                <a href="<?php echo esc_url( home_url( '/construction/' ) ); ?>" class="sitemap__link">高圧工事とは</a>
                            </li>
                            <li class="sitemap__item sitemap__item--has-children">
                                <span class="sitemap__link">施工実績</span>
                                <ul class="sitemap__sub-list">
                                    <li><a href="<?php echo esc_url( home_url( '/work-list/' ) ); ?>" class="sitemap__sub-link">施工実績一覧</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/work-list/' ) ); ?>" class="sitemap__sub-link">施工実績詳細</a></li>
                                </ul>
                            </li>
                            <li class="sitemap__item">
                                <a href="<?php echo esc_url( home_url( '/process/' ) ); ?>" class="sitemap__link">ご依頼の流れ</a>
                            </li>
                            <li class="sitemap__item">
                                <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="sitemap__link">よくある質問</a>
                            </li>
                            <li class="sitemap__item sitemap__item--has-children">
                                <span class="sitemap__link">社員紹介</span>
                                <ul class="sitemap__sub-list">
                                    <li><a href="<?php echo esc_url( home_url( '/team-list/' ) ); ?>" class="sitemap__sub-link">社員紹介一覧</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/team-list/' ) ); ?>" class="sitemap__sub-link">社員紹介詳細</a></li>
                                </ul>
                            </li>
                            <li class="sitemap__item sitemap__item--has-children">
                                <span class="sitemap__link">採用情報</span>
                                <ul class="sitemap__sub-list">
                                    <li><a href="<?php echo esc_url( home_url( '/recruit-list/' ) ); ?>" class="sitemap__sub-link">採用情報一覧</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/recruit-list/' ) ); ?>" class="sitemap__sub-link">採用情報詳細</a></li>
                                </ul>
                            </li>
                            <li class="sitemap__item">
                                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="sitemap__link">お問い合わせ</a>
                            </li>
                            <li class="sitemap__item">
                                <a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>" class="sitemap__link">プライバシーポリシー</a>
                            </li>
                        </ul>

                        <!-- PC用グリッド
                            行1: TOP
                            行2: 私たちについて / 高圧工事とは / 施工実績
                            行3: ご依頼の流れ / よくある質問 / 社員紹介
                            行4: 採用情報 / お問い合わせ / プライバシーポリシー
                        -->
                        <div class="sitemap__pc-grid pc-layout">
                            <ul class="sitemap__pc-row">
                                <li class="sitemap__item">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sitemap__link">TOP</a>
                                </li>
                            </ul>
                            <ul class="sitemap__pc-row">
                                <li class="sitemap__item">
                                    <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="sitemap__link">私たちについて</a>
                                </li>
                                <li class="sitemap__item">
                                    <a href="<?php echo esc_url( home_url( '/construction/' ) ); ?>" class="sitemap__link">高圧工事とは</a>
                                </li>
                                <li class="sitemap__item sitemap__item--has-children">
                                    <span class="sitemap__link">施工実績</span>
                                    <ul class="sitemap__sub-list">
                                        <li><a href="<?php echo esc_url( home_url( '/work-list/' ) ); ?>" class="sitemap__sub-link">施工実績一覧</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/work-list/' ) ); ?>" class="sitemap__sub-link">施工実績詳細</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sitemap__pc-row">
                                <li class="sitemap__item">
                                    <a href="<?php echo esc_url( home_url( '/process/' ) ); ?>" class="sitemap__link">ご依頼の流れ</a>
                                </li>
                                <li class="sitemap__item">
                                    <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="sitemap__link">よくある質問</a>
                                </li>
                                <li class="sitemap__item sitemap__item--has-children">
                                    <span class="sitemap__link">社員紹介</span>
                                    <ul class="sitemap__sub-list">
                                        <li><a href="<?php echo esc_url( home_url( '/team-list/' ) ); ?>" class="sitemap__sub-link">社員紹介一覧</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/team-list/' ) ); ?>" class="sitemap__sub-link">社員紹介詳細</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sitemap__pc-row">
                                <li class="sitemap__item sitemap__item--has-children">
                                    <span class="sitemap__link">採用情報</span>
                                    <ul class="sitemap__sub-list">
                                        <li><a href="<?php echo esc_url( home_url( '/recruit-list/' ) ); ?>" class="sitemap__sub-link">採用情報一覧</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/recruit-list/' ) ); ?>" class="sitemap__sub-link">採用情報詳細</a></li>
                                    </ul>
                                </li>
                                <li class="sitemap__item">
                                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="sitemap__link">お問い合わせ</a>
                                </li>
                                <li class="sitemap__item">
                                    <a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>" class="sitemap__link">プライバシーポリシー</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </section>
        </div>
    </main>
<?php get_footer(); ?>
