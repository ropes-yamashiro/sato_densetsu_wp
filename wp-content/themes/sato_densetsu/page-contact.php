<?php get_header(); ?>
    <main class="l-main">
        <div class="l-page">
            <!-- ページタイトル -->
            <section class="section_content--intro fadeInUp">
                <div class="section_space">
                    <h1 class="lower-page-title">
                        <span class="lower-page-title-en">CONTACT</span>
                        <span class="lower-page-title-ja">お問い合わせ</span>
                    </h1>
                </div>
            </section>

            <!-- お問い合わせフォーム -->
            <section class="section_content--contact fadeInUp">
                <h2 class="sr-only">お問い合わせフォーム</h2>
                <div class="section_space">
                    <?php /* mw-wp-form のショートコードを固定ページ本文に入力して出力 */ ?>
                    <?php the_content(); ?>
                </div>
            </section>
        </div>
    </main>
<?php get_footer(); ?>
