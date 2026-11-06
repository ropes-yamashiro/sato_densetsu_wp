<?php
$recruit_query = new WP_Query( array(
	'post_type'      => 'recruit',
	'posts_per_page' => -1,
	'orderby'        => array( 'menu_order' => 'ASC', 'date' => 'DESC' ), // 並び替えプラグイン（Intuitive Custom Post Order）の管理画面の並びと同じ
	'post_status'    => 'publish',
) );
get_header();
?>
    <main class="l-main">
        <div class="l-page">
            <!-- メインビジュアル -->
            <div class="lower-fv">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/mv_pc.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/mv_sp.jpg" alt="採用情報" class="fv__bg">
                </picture>
            </div>

            <div class="lower-fv-deco" id="fv-deco" aria-hidden="true"></div>

            <!-- ページタイトル＋コンテンツ -->
            <section class="section_content--intro fadeInUp">
                <div class="section_space">
                    <!-- テキストエリア -->
                    <h1 class="lower-page-title">
                        <span class="lower-page-title-en">RECRUIT</span>
                        <span class="lower-page-title-ja">採用情報</span>
                    </h1>
                </div>
            </section>

            <!-- 採用情報リード -->
            <section class="section_content--recruit-lead fadeInUp">
                <div class="section_space">
                    <p class="recruit-lead__catch">佐藤電設工業で共に成長し、<br class="sp_in">未来を創る仲間を募集しています！</p>
                    <p class="recruit-lead__text">やる気と笑顔があれば大歓迎！<br>一緒に成長していける仲間を募集しています。<br
                            class="sp_in">未経験の方もお気軽にご応募ください。</p>
                </div>
            </section>

            <!-- 採用情報一覧 -->
            <section class="section_content--recruit-list">
                <div class="section_space">
                    <h2 class="sr-only">採用情報一覧</h2>
                    <?php if ( $recruit_query->have_posts() ) : ?>
                    <ul class="recruit-list">
                        <?php while ( $recruit_query->have_posts() ) : $recruit_query->the_post(); ?>
                        <!-- ▽ ループ開始 ▽ -->
                        <li class="recruit-card">
                            <div class="recruit-card__img-wrap curtain-reveal">
                                <?php sato_the_thumbnail( get_the_ID(), 'recruit/recruit-sample-img.png', 'recruit-card__img' ); ?>
                            </div>
                            <div class="recruit-card__body fadeInUp">
                                <h3 class="recruit-card__title"><?php the_title(); ?></h3>
                                <p class="recruit-card__text"><?php echo nl2br( esc_html( sato_field( 'summary' ) ) ); ?></p>
                                <a href="<?php the_permalink(); ?>" class="c-btn recruit-card__btn">詳しく見る <img class="c-btn__arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/cp_arrow.png" alt="" aria-hidden="true"></a>
                            </div>
                        </li>
                        <!-- △ ループ終了 △ -->
                        <?php endwhile; ?>
                    </ul>
                    <?php else : ?>
                    <div class="recruit__no-post">現在情報はございません。</div>
                    <?php endif; wp_reset_postdata(); ?>
                </div>
            </section>

        </div>
    </main>
<?php get_footer(); ?>
