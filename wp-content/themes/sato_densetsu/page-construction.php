<?php get_header(); ?>
    <main class="l-main">
        <div class="l-page">
            <!-- メインビジュアル -->
            <div class="lower-fv">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/construction/mv_pc.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/construction/mv_sp.jpg" alt="高圧工事" class="fv__bg">
                </picture>
            </div>

            <div class="lower-fv-deco" id="fv-deco" aria-hidden="true"></div>

            <!-- ページタイトル -->
            <section class="section_content--intro fadeInUp">
                <div class="section_space">
                    <div class="about-intro__inner">
                        <!-- テキストエリア -->
                        <div class="about-intro__text-area">
                            <h1 class="lower-page-title">
                                <span class="lower-page-title-en">HIGH-VOLTAGE<br>CONSTRUCTION</span>
                                <span class="lower-page-title-ja">高圧工事とは</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 高圧工事とは コンテンツ -->
            <section class="section_content--construction-intro">
                <div class="section_space">
                    <div class="construction-intro__inner">
                        <!-- テキスト -->
                        <div class="construction-intro__text-area fadeInUp">
                            <h2 class="construction-intro__catch">
                                <em>高圧受電の未来</em>を、確かな技術で創り<em>安全・効率・信頼</em>でつなぐ<em>電力技術</em>
                            </h2>
                            <p class="construction-intro__desc">
                                高圧工事とは、工場や商業施設、ビルなどの大規模な建物で、安全に電力を使えるようにするための工事です。電力会社から供給される高圧電力を適正に電圧に変換する受変電設備（キューピクルなど）の設備をはじめ、ケーブル施設や保守・点検まで行います。
                            </p>
                        </div>
                        <!-- 画像エリア -->
                        <div class="construction-intro__img-area">
                            <div class="construction-intro__img-main">
                                <picture>
                                    <source media="(min-width: 768px)"
                                        srcset="<?php echo get_template_directory_uri(); ?>/images/construction/construction-img-main-pc.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/construction/construction-img-main-sp.png" alt="屋外に設置された変電設備">
                                </picture>
                            </div>
                            <div class="construction-intro__img-sub-01">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/construction/construction-img-sub-01.jpg" alt="高圧ケーブルの配線">
                            </div>
                            <div class="construction-intro__img-sub-02 pc_in">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/construction/construction-img-sub-02.jpg" alt="高圧受電設備の配線接続部">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 高圧工事の魅力・危険性 -->
            <section class="section_content--features-detail">
                <div class="section_space">
                    <h2 class="sr-only">高圧工事の特徴</h2>
                    <ul class="features-detail__list">

                        <!-- 魅力 -->
                        <li class="features-detail__item">
                            <div class="features-detail__text-area fadeInUp">
                                <p class="features-detail__badge">高圧工事の魅力</p>
                                <h3 class="features-detail__catch">目に見えない<em>エネルギー</em>を、<br>安全な形に変えて<em>街へ届ける。</em>
                                </h3>
                                <p class="features-detail__desc">
                                    巨大な電力をコントロールし、大規模施設や工場へ息吹を吹き込む高圧工事。自分の手がけた仕事が、街の大きな経済活動や人々の暮らしを支えているという実感は、この仕事ならではの醍醐味です。
                                </p>
                            </div>
                            <div class="features-detail__img-area curtain-reveal">
                                <picture>
                                    <source media="(min-width: 768px)"
                                        srcset="<?php echo get_template_directory_uri(); ?>/images/construction/features-charm_img-pc.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/construction/features-charm_img-sp.png" alt="高圧工事の魅力">
                                </picture>
                            </div>
                        </li>

                        <!-- 危険性 -->
                        <li class="features-detail__item">
                            <div class="features-detail__text-area fadeInUp">
                                <p class="features-detail__badge">高圧工事の危険性</p>
                                <h3 class="features-detail__catch">「<em>命を守る</em>」ための厳格なルール。</h3>
                                <p class="features-detail__desc">
                                    高圧工事は一歩間違えれば重大な事故につながります。だからこそ、私たちは徹底した安全教育を行い、一切の妥協を許しません。危険を正しく理解し、恐怖心ではなく「敬意」を持って電気に向き合う。それがプロの技術者の姿です。
                                </p>
                            </div>
                            <div class="features-detail__img-area curtain-reveal">
                                <picture>
                                    <source media="(min-width: 768px)"
                                        srcset="<?php echo get_template_directory_uri(); ?>/images/construction/features-danger_img-pc.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/construction/features-danger_img-sp.png" alt="高圧工事の危険性">
                                </picture>
                            </div>
                        </li>

                    </ul>
                </div>
            </section>


        </div>
    </main>
<?php get_footer(); ?>
