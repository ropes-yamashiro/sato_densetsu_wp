<?php
$paged      = max( 1, get_query_var( 'paged' ), get_query_var( 'page' ) );
$work_query = new WP_Query( array(
	'post_type'      => 'work',
	'posts_per_page' => SATO_WORK_PER_PAGE,
	'paged'          => $paged,
	'post_status'    => 'publish',
) );
get_header();
?>
    <main class="l-main">
        <div class="l-page">
            <!-- メインビジュアル -->
            <div class="lower-fv">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/work/mv_pc.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/work/mv_sp.jpg" alt="施工実績" class="fv__bg">
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
                                <span class="lower-page-title-en">WORK</span>
                                <span class="lower-page-title-ja">施工実績一覧</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 施工実績一覧 -->
            <section class="section_content--work-list fadeInUp">
                <div class="section_space">
                    <h2 class="sr-only">施工実績一覧</h2>
                    <?php if ( $work_query->have_posts() ) : ?>
                    <ul class="work-list__grid">
                        <?php while ( $work_query->have_posts() ) : $work_query->the_post(); ?>
                        <!-- ▽ ループ開始 ▽ -->
                        <li class="work-card">
                            <a href="<?php the_permalink(); ?>" class="work-card__link">
                                <div class="work-card__img-wrap">
                                    <?php sato_the_thumbnail( get_the_ID(), 'work/work-sample-img.jpg' ); ?>
                                    <?php if ( sato_work_category_name( get_the_ID() ) ) : ?>
                                    <span class="work-card__badge"><?php echo esc_html( sato_work_category_name( get_the_ID() ) ); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="work-card__body">
                                    <h3 class="work-card__title"><?php the_title(); ?></h3>
                                    <?php if ( sato_field( 'period' ) ) : ?>
                                    <p class="work-card__period">施工期間：<?php echo esc_html( sato_field( 'period' ) ); ?></p>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </li>
                        <!-- △ ループ終了 △ -->
                        <?php endwhile; ?>
                    </ul>

                    <!-- ページネーション -->
                    <?php sato_pagination( $work_query ); ?>
                    <?php else : ?>
                    <div class="work__no-post">現在情報はございません。</div>
                    <?php endif; wp_reset_postdata(); ?>

                </div>
            </section>


        </div>
    </main>
<?php get_footer(); ?>
