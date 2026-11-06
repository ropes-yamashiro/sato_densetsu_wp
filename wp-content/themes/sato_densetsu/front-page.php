<?php
$work_query = new WP_Query( array(
	'post_type'      => 'work',
	'posts_per_page' => 8,
	'post_status'    => 'publish',
) );
get_header();
?>
    <main class="l-main">
        <div class="l-page">
            <!-- メインビジュアル -->
            <section class="fv">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top/mv_pc.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv_sp.jpg" alt="佐藤電設工業株式会社" class="fv__bg">
                </picture>
                <div class="fv__content">
                    <h1 class="fv__catch">SATO ELECTRICAL<br>CONSTRUCTION</h1>
                    <p class="fv__text sp_in">安全と信頼でつなぐ佐藤電設工業</p>
                    <p class="fv__text pc_in">高圧工事から電線工事まで、<br>神戸の生活基盤を支える技術の佐藤電設工業</p>
                </div>
            </section>

            <div class="fv-deco" id="fv-deco" aria-hidden="true"></div>

            <!-- ABOUT -->
            <section class="section_content--about">
                <div class="section_space">
                    <div class="about__body">
                        <!-- テキストエリア -->
                        <div class="about__text-area fadeInUp">
                            <h2 class="c-title">
                                <span class="c-title__en">ABOUT</span>
                                <span class="c-title__ja">私たちについて</span>
                            </h2>
                            <p class="about__catch">
                                <em>電気の温もり</em>でつなげる<br>
                                街の明かりを照らす<br>
                                電気の<em>安全な未来</em>を<br class="sp_in">創り続けています
                            </p>
                            <p class="about__desc">
                                私たちは、神戸を拠点に高圧受電設備から一般電線工事まで幅広く手掛ける電気工事のスペシャリストです。水道やガスと同じく、電気は止まって初めてそのありがたみに気づくもの。利用されるすべての方々の生活基盤を24時間支え続けることに、私たちは強い誇りを持っています。
                            </p>
                            <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="c-btn">詳しく見る <img class="c-btn__arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/images/common/cp_arrow.png" alt="" aria-hidden="true"></a>
                        </div>
                        <!-- 写真 -->
                        <div class="about__img-area curtain-reveal">
                            <picture>
                                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top/about-img_pc.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/top/about-img_sp.png" alt="神戸の夜景と電気工事" class="about__img">
                            </picture>
                        </div>
                    </div>
                </div>
            </section>

            <!-- HIGH-VOLTAGE CONSTRUCTION -->
            <section class="section_content--construction">
                <div class="section_space">
                    <div class="construction__body">
                        <!-- テキストエリア -->
                        <div class="construction__text-area fadeInUp">
                            <h2 class="c-title">
                                <span class="c-title__en">HIGH-VOLTAGE<br>CONSTRUCTION</span>
                                <span class="c-title__ja">高圧工事とは</span>
                            </h2>
                            <p class="construction__catch">
                                <em>高圧受電の未来</em>を、確かな技術で創る<br>
                                <em>安全・効率・信頼</em>でつなぐ電力技術
                            </p>
                            <p class="construction__desc">
                                工場やビルに不可欠な高圧工事において、佐藤電設工業は機材・機械の手配から現場施工まで、すべて一貫したワンストップ対応が可能です。煩雑な調整を排除し、迅速かつ確実な電力インフラの構築をお約束します。
                            </p>
                            <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="c-btn">詳しく見る <img class="c-btn__arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/images/common/cp_arrow.png" alt="" aria-hidden="true"></a>
                        </div>
                        <!-- 写真 -->
                        <div class="construction__img-area">
                            <picture class="curtain-reveal">
                                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top/construction-img_pc.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/top/construction-img_sp.png" alt="高圧工事の現場" class="construction__img">
                            </picture>
                        </div>
                    </div>
                </div>
            </section>

            <!-- WORK -->
            <section class="section_content--work fadeInUp">
                <div class="section_space">
                    <div class="work__head">
                        <h2 class="c-title">
                            <span class="c-title__en">WORK</span>
                            <span class="c-title__ja">施工実績</span>
                        </h2>
                        <p class="work__desc">私たちはこれまでに、多様な分野の電気設備工事を手がけてきました。<br
                                class="pc_in">豊富な経験と確かな技術力で、安心・安全な施工を実現しています。</p>
                    </div>
                    <!-- スライダー -->
                    <div class="work__slider-wrap">
                        <div class="work__slider swiper">
                            <?php if ( $work_query->have_posts() ) : ?>
                            <ul class="swiper-wrapper">
                                <?php while ( $work_query->have_posts() ) : $work_query->the_post(); ?>
                                <!-- ▽ ループ開始 ▽ -->
                                <li class="swiper-slide">
                                    <a href="<?php the_permalink(); ?>" class="work-card">
                                        <div class="work-card__img-wrap">
                                            <?php if ( sato_work_category_name( get_the_ID() ) ) : ?>
                                            <span class="work-card__badge"><?php echo esc_html( sato_work_category_name( get_the_ID() ) ); ?></span>
                                            <?php endif; ?>
                                            <?php sato_the_thumbnail( get_the_ID(), 'work-card__img' ); ?>
                                        </div>
                                        <div class="work-card__body">
                                            <h3 class="work-card__name"><?php the_title(); ?></h3>
                                            <?php if ( sato_field( 'period' ) ) : ?>
                                            <p class="work-card__date">施工実施：<?php echo esc_html( sato_field( 'period' ) ); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                </li>
                                <!-- △ ループ終了 △ -->
                                <?php endwhile; ?>
                            </ul>
                            <div class="swiper-scrollbar work__scrollbar"></div>
                            <?php else : ?>
                            <div class="work__no-post">現在情報はございません。</div>
                            <?php endif; wp_reset_postdata(); ?>
                        </div>
                        <button class="swiper-button-prev work__btn-prev" aria-label="前へ"></button>
                        <button class="swiper-button-next work__btn-next" aria-label="次へ"></button>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/work-list/' ) ); ?>" class="c-btn">施工実績一覧へ <img class="c-btn__arrow"
                            src="<?php echo get_template_directory_uri(); ?>/images/common/cp_arrow.png" alt="" aria-hidden="true"></a>
                </div>
            </section>

            <!-- PROCESS -->
            <section class="section_content--process">
                <div class="section_space">
                    <div class="process__body">
                        <!-- テキストエリア -->
                        <div class="process__text-area fadeInUp">
                            <h2 class="c-title is-white">
                                <span class="c-title__en">PROCESS</span>
                                <span class="c-title__ja">ご依頼の流れ</span>
                            </h2>
                            <p class="process__catch">高圧受電設備工事を<br>ご依頼いただくまでの流れ</p>
                            <p class="process__desc">
                                キュービクルの大きさや設置場所、重い機器を運び込む経路などを事前にしっかり確認します。その上で、安全でスムーズに工事が進むよう計画を立て、丁寧な施工を行います。</p>
                            <a href="<?php echo esc_url( home_url( '/process/' ) ); ?>" class="c-btn is-white">詳しく見る <img class="c-btn__arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/images/common/cp_arrow-blue.png" alt="" aria-hidden="true"></a>
                        </div>
                        <!-- 写真 -->
                        <div class="process__img-area curtain-reveal">
                            <picture>
                                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top/process-img_pc.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/top/process-img_sp.png" alt="ご依頼の流れ" class="process__img">
                            </picture>
                        </div>
                    </div>
                </div>
            </section>

            <!-- OUR TEAM -->
            <section class="section_content--team">
                <div class="section_space">
                    <div class="team__body">
                        <!-- タイトル（SP:写真上 / PC:テキストエリア内） -->
                        <h2 class="c-title team__title fadeInUp">
                            <span class="c-title__en">OUR TEAM</span>
                            <span class="c-title__ja">社員紹介</span>
                        </h2>
                        <!-- 写真グループ -->
                        <ul class="team__photos">
                            <li class="team__photo team__photo--side">
                                <div class="team__photo-inner curtain-reveal curtain-reveal--clip">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/team_photo01.png" alt="社員紹介">
                                </div>
                            </li>
                            <li class="team__photo team__photo--side">
                                <div class="team__photo-inner curtain-reveal curtain-reveal--clip">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/team_photo02.png" alt="社員紹介">
                                </div>
                            </li>
                            <li class="team__photo team__photo--side">
                                <div class="team__photo-inner curtain-reveal curtain-reveal--clip">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/team_photo03.png" alt="社員紹介">
                                </div>
                            </li>
                        </ul>
                        <!-- テキストエリア -->
                        <div class="team__text-area fadeInUp">
                            <p class="team__catch">佐藤電設工業の技術と<br><em>信頼を支える</em>社員たちの想い</p>
                            <p class="team__desc">それぞれの社員が、自分の技術と経験を活かして現場で活躍しています。仲間と共に学び合い、成長し合う環境が佐藤電設の強みです。</p>
                            <a href="<?php echo esc_url( home_url( '/team-list/' ) ); ?>" class="c-btn">詳しく見る <img class="c-btn__arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/images/common/cp_arrow.png" alt="" aria-hidden="true"></a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- RECRUIT -->
            <section class="section_content--recruit">
                <div class="section_space">
                    <div class="recruit__body">
                        <!-- 写真 -->
                        <div class="recruit__img-area curtain-reveal">
                            <picture>
                                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top/recruit-img_pc.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/top/recruit-img_sp.jpg" alt="採用情報" class="recruit__img">
                            </picture>
                        </div>
                        <!-- テキストエリア -->
                        <div class="recruit__text-area fadeInUp">
                            <h2 class="c-title is-white">
                                <span class="c-title__en">RECRUIT</span>
                                <span class="c-title__ja">採用情報</span>
                            </h2>
                            <p class="recruit__catch">誇りと責任を次世代へ。<br>神戸の未来を照らすために</p>
                            <p class="recruit__desc">
                                電気工事、特に高圧工事は常に危険と隣り合わせの仕事です。しかし、その先には「街の灯りを守る」という代えがたい達成感があります。技術だけでなく、仕事の重みと誇りまでを共有できる、誠実な仲間を私たちは求めています。
                            </p>
                            <a href="<?php echo esc_url( home_url( '/recruit-list/' ) ); ?>" class="c-btn is-white">詳しく見る <img class="c-btn__arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/images/common/cp_arrow-blue.png" alt="" aria-hidden="true"></a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>
<?php get_footer(); ?>
