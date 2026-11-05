<?php
/**
 * フォールバック（front-page / page-* / single-* に該当しない場合）
 */
get_header(); ?>
    <main class="l-main">
        <div class="l-page">
            <section class="section_content--intro">
                <div class="section_space">
                    <h1 class="lower-page-title">
                        <span class="lower-page-title-en">NOT FOUND</span>
                        <span class="lower-page-title-ja">ページが見つかりません</span>
                    </h1>
                    <p style="text-align:center;padding:40px 0;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOPへ戻る</a></p>
                </div>
            </section>
        </div>
    </main>
<?php get_footer(); ?>
