<?php get_header(); ?>
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
                                <span class="lower-page-title-ja">施工実績</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 施工実績 詳細 -->
            <section class="section_content--work-detail fadeInUp">
                <div class="section_space">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <article class="detail">
                        <div class="work-detail__head">
                            <?php if ( sato_work_category_name( get_the_ID() ) ) : ?>
                            <span class="work-card__badge"><?php echo esc_html( sato_work_category_name( get_the_ID() ) ); ?></span>
                            <?php endif; ?>
                            <h2 class="work-detail__title"><?php the_title(); ?></h2>
                            <?php if ( sato_field( 'period' ) ) : ?>
                            <p class="work-detail__period">施工期間：<?php echo esc_html( sato_field( 'period' ) ); ?></p>
                            <?php endif; ?>
                        </div>
                        <!-- コンテンツブロック（SCF WYSIWYG） -->
                        <div class="detail__content-block detail__wysiwyg">
                            <?php echo sato_field( 'content' ); ?>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/work-list/' ) ); ?>" class="detail__back-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/cp_arrow-blue.png" class="detail__back-arrow" alt="" aria-hidden="true">
                            施工実績一覧
                        </a>
                    </article>
                    <?php endwhile; ?>
                </div>
            </section>


        </div>
    </main>
<?php get_footer(); ?>
