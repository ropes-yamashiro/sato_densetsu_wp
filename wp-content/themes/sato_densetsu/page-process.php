<?php get_header(); ?>
    <main class="l-main">
        <div class="l-page">
            <!-- メインビジュアル -->
            <div class="lower-fv">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/process/mv_pc.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/process/mv_sp.jpg" alt="ご依頼の流れ" class="fv__bg">
                </picture>
            </div>

            <div class="lower-fv-deco" id="fv-deco" aria-hidden="true"></div>

            <!-- ページタイトル＋コンテンツ -->
            <section class="section_content--intro fadeInUp">
                <div class="section_space">
                    <div class="about-intro__inner">
                        <!-- テキストエリア -->
                        <div class="about-intro__text-area">
                            <h1 class="lower-page-title">
                                <span class="lower-page-title-en">PROCESS</span>
                                <span class="lower-page-title-ja">ご依頼の流れ</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ご依頼の流れ -->
            <section class="section_content--process fadeInUp">
                <div class="section_space">
                    <h2 class="sr-only">ご依頼の流れ</h2>

                    <!-- フロー（SP:縦並び枠線 / PC:横並び） -->
                    <ol class="process-flow">
                        <li class="process-flow__item">
                            <div class="process-flow__box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/process/process-flow-ic01.png" alt="" aria-hidden="true"
                                    class="process-flow__icon">
                                <h3 class="process-flow__label">1.お問い合わせ</h3>
                            </div>
                        </li>
                        <li class="process-flow__item">
                            <div class="process-flow__box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/process/process-flow-ic02.png" alt="" aria-hidden="true"
                                    class="process-flow__icon">
                                <h3 class="process-flow__label">2.現地調査</h3>
                            </div>
                        </li>
                        <li class="process-flow__item">
                            <div class="process-flow__box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/process/process-flow-ic03.png" alt="" aria-hidden="true"
                                    class="process-flow__icon">
                                <h3 class="process-flow__label">3.お見積り</h3>
                            </div>
                        </li>
                        <li class="process-flow__item">
                            <div class="process-flow__box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/process/process-flow-ic04.png" alt="" aria-hidden="true"
                                    class="process-flow__icon">
                                <h3 class="process-flow__label">4.着工</h3>
                            </div>
                        </li>
                        <li class="process-flow__item">
                            <div class="process-flow__box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/process/process-flow-ic05.png" alt="" aria-hidden="true"
                                    class="process-flow__icon">
                                <h3 class="process-flow__label">5.竣工</h3>
                            </div>
                        </li>
                    </ol>

                    <!-- 詳細リスト -->
                    <ol class="process-list">
                        <li class="process-list__item">
                            <div class="process-list__icon-wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/process/process-list-ic01.png" alt="" aria-hidden="true"
                                    class="process-list__icon">
                            </div>
                            <div class="process-list__body">
                                <h3 class="process-list__title">1.お問い合わせ</h3>
                                <p class="process-list__text">まずはお電話やフォームからお気軽にご相談ください。神戸近郊であれば迅速にヒアリングに伺います。</p>
                            </div>
                        </li>
                        <li class="process-list__item">
                            <div class="process-list__icon-wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/process/process-list-ic02.png" alt="" aria-hidden="true"
                                    class="process-list__icon">
                            </div>
                            <div class="process-list__body">
                                <h3 class="process-list__title">2.現地調査</h3>
                                <p class="process-list__text">現場の状況、高圧設備の配置、周辺環境をプロの目で確認。搬入経路や機械の手配に必要な条件を精査します。</p>
                            </div>
                        </li>
                        <li class="process-list__item">
                            <div class="process-list__icon-wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/process/process-list-ic03.png" alt="" aria-hidden="true"
                                    class="process-list__icon">
                            </div>
                            <div class="process-list__body">
                                <h3 class="process-list__title">3.お見積り</h3>
                                <p class="process-list__text">調査結果に基づき、最適な施工プランをご提示。ワンストップ体制を活かした透明性の高いお見積りを行います。</p>
                            </div>
                        </li>
                        <li class="process-list__item">
                            <div class="process-list__icon-wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/process/process-list-ic04.png" alt="" aria-hidden="true"
                                    class="process-list__icon">
                            </div>
                            <div class="process-list__body">
                                <h3 class="process-list__title">4.着工</h3>
                                <p class="process-list__text">周辺環境への配慮と安全確保を最優先に、ベテランの技術者が責任を持って施工を開始します。</p>
                            </div>
                        </li>
                        <li class="process-list__item">
                            <div class="process-list__icon-wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/process/process-list-ic05.png" alt="" aria-hidden="true"
                                    class="process-list__icon">
                            </div>
                            <div class="process-list__body">
                                <h3 class="process-list__title">5.竣工</h3>
                                <p class="process-list__text">通電試験を行い、安全を確認して引き渡し。施工後のメンテナンスまで、神戸のパートナーとして末永くサポートします。
                                </p>
                            </div>
                        </li>
                    </ol>
                </div>
            </section>
        </div>
    </main>
<?php get_footer(); ?>
