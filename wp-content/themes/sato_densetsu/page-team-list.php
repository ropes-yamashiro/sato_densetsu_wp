<?php
$team_query = new WP_Query( array(
	'post_type'      => 'team',
	'posts_per_page' => SATO_TEAM_PER_PAGE,
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
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/team/mv_pc.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/team/mv_sp.jpg" alt="社員紹介" class="fv__bg">
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
                                <span class="lower-page-title-en">OUR TEAM</span>
                                <span class="lower-page-title-ja">社員紹介</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 社員リスト -->
            <section class="section_content--team fadeInUp">
                <div class="section_space">
                    <h2 class="sr-only">社員リスト</h2>
                    <?php if ( $team_query->have_posts() ) : ?>
                    <ul class="team-card__list">
                        <?php while ( $team_query->have_posts() ) : $team_query->the_post(); ?>
                        <!-- ▽ ループ開始 ▽ -->
                        <li class="team-card">
                            <a href="<?php the_permalink(); ?>" class="team-card__link">
                                <div class="team-card__img-wrap">
                                    <?php sato_the_thumbnail( get_the_ID(), 'team-card__img' ); ?>
                                </div>
                                <div class="team-card__body">
                                    <p class="team-card__name"><?php the_title(); ?></p>
                                    <?php if ( sato_field( 'department' ) ) : ?><p class="team-card__dept"><?php echo esc_html( sato_field( 'department' ) ); ?></p><?php endif; ?>
                                    <?php if ( sato_field( 'joined' ) ) : ?><p class="team-card__year"><?php echo esc_html( sato_field( 'joined' ) ); ?></p><?php endif; ?>
                                </div>
                            </a>
                        </li>
                        <!-- △ ループ終了 △ -->
                        <?php endwhile; ?>
                    </ul>
                    <?php else : ?>
                    <div class="team__no-post">現在情報はございません。</div>
                    <?php endif; wp_reset_postdata(); ?>
                </div>
            </section>
        </div>
    </main>
<?php get_footer(); ?>
