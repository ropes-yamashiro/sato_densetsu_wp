<?php get_header(); ?>
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

            <!-- 採用情報詳細 -->
            <section class="section_content--recruit-detail fadeInUp">
                <div class="section_space">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <h2 class="recruit-detail__title"><?php the_title(); ?></h2>
                    <h3 class="recruit-detail__lead">募集要項</h3>
                    <dl class="recruit-detail__table">
                        <?php
                        $recruit_rows = array( 'age' => '年齢', 'employment' => '雇用形態', 'condition' => '条件', 'holiday' => '休日', 'location' => '勤務地', 'hours' => '勤務時間', 'salary' => '給与', 'benefits' => '待遇', 'apply' => '応募方法' );
                        foreach ( $recruit_rows as $key => $label ) :
                            $val = sato_field( $key );
                            if ( ! $val ) {
                                continue;
                            }
                        ?>
                        <div class="recruit-detail__row">
                            <dt class="recruit-detail__term"><?php echo esc_html( $label ); ?></dt>
                            <dd class="recruit-detail__desc"><?php echo nl2br( esc_html( $val ) ); ?></dd>
                        </div>
                        <?php endforeach; ?>
                    </dl>
                    <!-- 一覧へ戻るボタン -->
                    <a href="<?php echo esc_url( home_url( '/recruit-list/' ) ); ?>" class="detail__back-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/common/cp_arrow-blue.png" class="detail__back-arrow" alt="" aria-hidden="true">
                            採用一覧
                        </a>
                    <?php endwhile; ?>
                </div>
            </section>

        </div>
    </main>
<?php get_footer(); ?>
