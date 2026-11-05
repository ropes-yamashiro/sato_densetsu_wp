<?php get_header(); ?>
    <main class="l-main">
        <div class="l-page">
            <!-- メインビジュアル -->
            <div class="lower-fv">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/about-us/mv_pc.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/mv_sp.jpg" alt="神戸の景色" class="fv__bg">
                </picture>
            </div>

            <div class="lower-fv-deco" id="fv-deco" aria-hidden="true"></div>

            <!-- ページタイトル＋コンテンツ -->
            <section class="section_content--intro section_content--intro-about">
                <div class="section_space">
                    <div class="about-intro__inner">
                        <!-- テキストエリア -->
                        <div class="about-intro__text-area fadeInUp">
                            <h1 class="lower-page-title">
                                <span class="lower-page-title-en">ABOUT</span>
                                <span class="lower-page-title-ja">私たちについて</span>
                            </h1>
                            <p class="about-intro__catch">
                                「<em>神戸</em>といえば<em>佐藤電設工業</em>」<br>
                                その<em>信頼こそが私たちの財産</em>です。
                            </p>
                            <p class="about-intro__desc">
                                神戸の街に根ざし、電気というインフラを通じて地域社会に貢献すること。それが私たちの使命です。高圧工事という専門性の高い分野から、街を走る電線工事まで、電気のあらゆる困りごとに応えます。「当たり前に電気が使える幸せ」を裏側で支え続ける、技術者集団としての情熱がここにあります。
                            </p>
                        </div>
                        <!-- 写真 -->
                        <div class="about-intro__img-area">
                            <div class="about-intro__img-wrap curtain-reveal">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/about-intro__img.png" alt="神戸の夜景" class="about-intro__img">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- MESSAGE -->
            <section class="section_content--message has-bg-color">
                <div class="section_space">
                    <div class="message__body">
                        <!-- セクションタイトル（縦書き） -->
                        <div class="lower-section-head fadeInUp">
                            <h2 class="lower-section-title">MESSAGE</h2>
                        </div>
                        <!-- 写真 -->
                        <div class="message__img-area curtain-reveal">
                            <picture>
                                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/about-us/message_img-pc.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/message_img-sp.png" alt="代表取締役 山田太郎" class="message__img">
                            </picture>
                        </div>
                        <!-- テキストエリア -->
                        <div class="message__text-area fadeInUp">
                            <p class="message__badge">代表挨拶</p>
                            <p class="message__catch">
                                生活の「基盤」を支える覚悟。<br>
                                お客様の笑顔のために。
                            </p>
                            <p class="message__desc">
                                普段は意識することのない電気の存在。しかし、ひとたび事故が起きれば、社会の機能は停止します。私たちはその「万が一」を防ぎ、万が一の際には誰よりも早く駆けつける存在でありたい。神戸で育ち、神戸に生かされている企業として、誠実な施工を積み重ねてまいります。
                            </p>
                            <p class="message__sign">代表取締役<strong>山田 太郎</strong></p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FEATURES -->
            <section class="section_content--features fadeInUp">
                <div class="section_space">
                    <div class="lower-section-head">
                        <h2 class="lower-section-title">FEATURES</h2>
                        <p class="lower-section-subtitle">佐藤電設工業の特徴</p>
                    </div>
                    <ol class="features__list">
                        <li class="features__item">
                            <div class="features__head">
                                <span class="features__num">01</span>
                                <h3 class="features__title">神戸密着の<br class="pc_in">機動力</h3>
                            </div>
                            <p class="features__desc">
                                神戸エリアを知り尽くしているからこそ、迅速な駆けつけと地域特性に合わせた柔軟な提案が可能です。「困ったときの佐藤電設」として親しまれています。</p>
                        </li>
                        <li class="features__item">
                            <div class="features__head">
                                <span class="features__num">02</span>
                                <h3 class="features__title">完全ワン<br class="pc_in">ストップ<br class="pc_in">の<br
                                        class="sp_in">高圧工事</h3>
                            </div>
                            <p class="features__desc">
                                高圧受電設備に必要な重機の手配から、各種申請、実際の施工まで、当社がすべて窓口となります。工程管理の簡略化とコスト最適化を実現します。</p>
                        </li>
                        <li class="features__item">
                            <div class="features__head">
                                <span class="features__num">03</span>
                                <h3 class="features__title">インフラを<br class="pc_in">守る高い<br class="pc_in">技術力</h3>
                            </div>
                            <p class="features__desc">高圧工事から電線工事まで、幅広い現場で培ったノウハウを全社員が共有。安全第一を徹底し、事故ゼロの高品質な施工を継続しています。
                            </p>
                        </li>
                    </ol>
                </div>
            </section>

            <!-- HISTORY -->
            <section class="section_content--history fadeInUp">
                <div class="section_space">
                    <div class="history__head">
                        <div class="lower-section-head lower-section-head--left">
                            <h2 class="lower-section-title">HISTORY</h2>
                            <p class="lower-section-subtitle">沿革</p>
                        </div>
                        <div class="history__nav">
                            <button class="history__btn-prev" aria-label="前へ"></button>
                            <button class="history__btn-next" aria-label="次へ"></button>
                        </div>
                    </div>
                    <div class="history__slider swiper">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <div class="history-card">
                                    <div class="history-card__head">
                                        <p class="history-card__date">1980年4月</p>
                                        <p class="history-card__year">1980</p>
                                    </div>
                                    <p class="history-card__desc">
                                        本文入ります本文入ります本文入ります本文入ります本文入ります本文入本文入ります本文入ります本文入ります本文入ります本文入ります本文入本文入ります本文入りま
                                    </p>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="history-card">
                                    <div class="history-card__head">
                                        <p class="history-card__date">1980年4月</p>
                                        <p class="history-card__year">1980</p>
                                    </div>
                                    <p class="history-card__desc">
                                        本文入ります本文入ります本文入ります本文入ります本文入ります本文入本文入ります本文入ります本文入ります本文入ります本文入ります本文入本文入ります本文入りま
                                    </p>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="history-card">
                                    <div class="history-card__head">
                                        <p class="history-card__date">1980年4月</p>
                                        <p class="history-card__year">1980</p>
                                    </div>
                                    <p class="history-card__desc">
                                        本文入ります本文入ります本文入ります本文入ります本文入ります本文入本文入ります本文入ります本文入ります本文入ります本文入ります本文入本文入ります本文入りま
                                    </p>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="history-card">
                                    <div class="history-card__head">
                                        <p class="history-card__date">1980年4月</p>
                                        <p class="history-card__year">1980</p>
                                    </div>
                                    <p class="history-card__desc">
                                        本文入ります本文入ります本文入ります本文入ります本文入ります本文入本文入ります本文入ります本文入ります本文入ります本文入ります本文入本文入ります本文入りま
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="swiper-scrollbar history__scrollbar"></div>
                    </div>
                </div>
            </section>

            <!-- COMPANY -->
            <section class="section_content--company has-bg-color fadeInUp">
                <div class="section_space">
                    <div class="lower-section-head">
                        <h2 class="lower-section-title">COMPANY</h2>
                        <p class="lower-section-subtitle">会社概要</p>
                    </div>
                    <dl class="company__list">
                        <div class="company__row">
                            <dt class="company__label">会社名</dt>
                            <dd class="company__value">株式会社 佐藤電設工業</dd>
                        </div>
                        <div class="company__row">
                            <dt class="company__label">所在地</dt>
                            <dd class="company__value">〒000-00000　◯◯県◯◯市◯◯◯◯</dd>
                        </div>
                        <div class="company__row">
                            <dt class="company__label">電話</dt>
                            <dd class="company__value"><a href="tel:000-0000-0000">000-0000-0000</a></dd>
                        </div>
                        <div class="company__row">
                            <dt class="company__label">FAX</dt>
                            <dd class="company__value not-link"><a>000-0000-0000</a></dd>
                        </div>
                        <div class="company__row">
                            <dt class="company__label">代表取締役</dt>
                            <dd class="company__value">山田 太郎</dd>
                        </div>
                        <div class="company__row">
                            <dt class="company__label">事業内容</dt>
                            <dd class="company__value">事業内容入ります<br>事業内容入ります</dd>
                        </div>
                        <div class="company__row">
                            <dt class="company__label">会社設立</dt>
                            <dd class="company__value">1900年00月00日</dd>
                        </div>
                        <div class="company__row">
                            <dt class="company__label">資本金</dt>
                            <dd class="company__value">0000,000円</dd>
                        </div>
                        <div class="company__row">
                            <dt class="company__label">従業員数</dt>
                            <dd class="company__value">00名（2026年◯月◯日現在）</dd>
                        </div>
                    </dl>
                </div>
            </section>

            <!-- ACCESS -->
            <section class="section_content--access fadeInUp">
                <div class="section_space">
                    <div class="lower-section-head">
                        <h2 class="lower-section-title">ACCESS</h2>
                        <p class="lower-section-subtitle">アクセス</p>
                    </div>
                    <div class="access__body">
                        <!-- Googleマップ -->
                        <div class="access__map">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/sample-map.jpg" alt="佐藤電設工業株式会社 地図">
                        </div>
                        <!-- アクセス情報 -->
                        <dl class="access__info">
                            <div class="access__row">
                                <dt class="access__label">所在地</dt>
                                <dd class="access__value">〒000-00000<br>◯◯県◯◯市◯◯◯◯</dd>
                            </div>
                            <div class="access__row">
                                <dt class="access__label">TEL</dt>
                                <dd class="access__value"><a href="tel:000-0000-0000">000-0000-0000</a></dd>
                            </div>
                            <div class="access__row">
                                <dt class="access__label">営業時間</dt>
                                <dd class="access__value">00:00 – 00:00</dd>
                            </div>
                            <div class="access__row">
                                <dt class="access__label">定休日</dt>
                                <dd class="access__value">日・祝</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </section>

        </div>
    </main>
<?php get_footer(); ?>
