<?php
/**
 * 固定ページ「お問い合わせ 完了」（スラッグ: finish）
 * 送信成功後に form.js が遷移してくる。送信を経ていない直接アクセスは案内を切り替える。
 */
get_header();
?>
    <main class="l-main">
        <div class="l-page">
            <!-- ページタイトル -->
            <section class="section_content--intro fadeInUp">
                <div class="section_space">
                    <h1 class="lower-page-title">
                        <span class="lower-page-title-en">CONTACT</span>
                        <span class="lower-page-title-ja">お問い合わせ完了</span>
                    </h1>
                </div>
            </section>

            <section class="section_content--contact fadeInUp">
                <div class="section_space">
                    <div class="form-complete">
                        <div class="form-complete__message">
                            <p class="form-complete__title">送信が完了しました。</p>
                            <p class="form-complete__text">佐藤電設工業株式会社へのお問合せありがとうございます。<br>いただいた内容を確認のうえ、担当者よりメールにてご連絡いたします。<br>ご入力のメールアドレスに自動返信メールをお送りしておりますので、ご確認ください。</p>
                        </div>
                        <div class="form-complete__denied" hidden>
                            <p class="form-complete__text">このページには直接アクセスできません。</p>
                        </div>
                        <a class="c-btn form-complete__btn" href="<?php echo esc_url( home_url( '/' ) ); ?>">TOPページに戻る <img class="c-btn__arrow" src="<?php echo get_template_directory_uri(); ?>/images/common/cp_arrow.png" alt="" aria-hidden="true"></a>
                    </div>
                </div>
            </section>
        </div>
    </main>
<?php get_footer(); ?>
