<?php get_header(); ?>
    <main class="l-main">
        <div class="l-page">
            <!-- メインビジュアル -->
            <div class="lower-fv">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/team/mv_pc.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/team/mv_sp.jpg" alt="社員紹介詳細" class="fv__bg">
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

            <!-- 社員紹介 詳細 -->
            <section class="section_content--team-detail fadeInUp">
                <div class="section_space">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <article class="detail">
                        <div class="team-detail__head">
                            <h2 class="team-detail__title"><?php the_title(); ?><span>さん</span></h2>
                            <p class="team-detail__meta"><?php if ( sato_field( 'department' ) ) : ?><span class="team-detail__dept"><?php echo esc_html( sato_field( 'department' ) ); ?></span><?php endif; ?><?php if ( sato_field( 'department' ) && sato_field( 'joined' ) ) : ?><span class="team-detail__sep"> ｜ </span><?php endif; ?><?php if ( sato_field( 'joined' ) ) : ?><span class="team-detail__year"><?php echo esc_html( sato_field( 'joined' ) ); ?></span><?php endif; ?></p>
                        </div>
                        <div class="detail__content-block detail__wysiwyg">
                            <?php echo sato_field( 'content' ); ?>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/team-list/' ) ); ?>" class="detail__back-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/cp_arrow-blue.png" class="detail__back-arrow" alt="" aria-hidden="true">
                            社員紹介一覧
                        </a>
                    </article>
                    <?php endwhile; ?>
                </div>
            </section>


        </div>
    </main>
<?php get_footer(); ?>
