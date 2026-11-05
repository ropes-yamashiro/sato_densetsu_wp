<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php
$sato_is_top   = is_home() || is_front_page();
$sato_is_about = is_page( 'about-us' );
$sato_page_css = sato_page_css();
?>
<?php if ( $sato_is_top || $sato_is_about ) : ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<?php endif; ?>
    <link rel="stylesheet" href="<?php echo esc_url( sato_asset_url( 'css/reset.css' ) ); ?>" />
    <link rel="stylesheet" href="<?php echo esc_url( sato_asset_url( 'style.css' ) ); ?>" />
    <link rel="stylesheet" href="<?php echo esc_url( sato_asset_url( 'css/common.css' ) ); ?>" />
    <link rel="stylesheet" href="<?php echo esc_url( sato_asset_url( 'css/animate.css' ) ); ?>" />
<?php if ( $sato_is_top ) : ?>
    <link rel="stylesheet" href="<?php echo esc_url( sato_asset_url( 'css/top.css' ) ); ?>" />
<?php else : ?>
    <link rel="stylesheet" href="<?php echo esc_url( sato_asset_url( 'css/pages.css' ) ); ?>" />
<?php if ( $sato_page_css ) : ?>
    <link rel="stylesheet" href="<?php echo esc_url( sato_asset_url( 'css/' . $sato_page_css . '.css' ) ); ?>" />
<?php endif; ?>
<?php endif; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header class="l-header">
        <div class="header__inner">
            <!-- ロゴ -->
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/header_logo.png" alt="佐藤電設工業株式会社">
                <span class="header__logo-name">佐藤電設工業</span>
            </a>
            <!-- PC ナビ -->
            <nav class="header__nav">
                <ul class="header__nav-list">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__nav-link">TOP</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="header__nav-link">私たちについて</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/construction/' ) ); ?>" class="header__nav-link">高圧工事とは</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/work-list/' ) ); ?>" class="header__nav-link">施工実績</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/process/' ) ); ?>" class="header__nav-link">ご依頼の流れ</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/team-list/' ) ); ?>" class="header__nav-link">社員紹介</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="header__nav-link">よくある質問</a></li>
                </ul>
            </nav>
            <!-- RECRUIT / CONTACT ボタン -->
            <ul class="header__btns">
                <li>
                    <a href="<?php echo esc_url( home_url( '/recruit-list/' ) ); ?>" class="header__btn header__btn--recruit">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/recruit_icon.svg" alt="" aria-hidden="true">
                        <span>RECRUIT</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="header__btn header__btn--contact">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/contact.svg" alt="" aria-hidden="true">
                        <span>CONTACT</span>
                    </a>
                </li>
            </ul>
            <!-- SP ハンバーガーボタン -->
            <button class="header__hamburger" id="btn_spmenu" aria-label="メニューを開く" aria-expanded="false"
                aria-controls="sp-menu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </button>
        </div>
    </header>

    <!-- SP メニュー -->
    <div class="sp-menu" id="sp-menu" role="dialog" aria-label="メニュー" aria-hidden="true">
        <div class="sp-menu__inner">
            <!-- ヘッダー行 -->
            <div class="sp-menu__head">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sp-menu__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/header_logo.png" alt="佐藤電設工業株式会社">
                    <span>佐藤電設工業</span>
                </a>
                <button class="sp-menu__close" id="btn_spmenu_close" aria-label="メニューを閉じる">
                    <span></span>
                    <span></span>
                </button>
            </div>
            <!-- ナビ＋サブ -->
            <div class="sp-menu__body">
                <!-- ナビ 2カラム -->
                <nav class="sp-menu__nav">
                    <ul class="sp-menu__nav-list">
                        <li>
                            <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="sp-menu__nav-link">
                                <span class="sp-menu__nav-en">ABOUT</span>
                                <span class="sp-menu__nav-ja">私たちについて</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/construction/' ) ); ?>" class="sp-menu__nav-link">
                                <span class="sp-menu__nav-en">HIGH-VOLTAGE<br>CONSTRUCTION</span>
                                <span class="sp-menu__nav-ja">高圧工事とは</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/work-list/' ) ); ?>" class="sp-menu__nav-link">
                                <span class="sp-menu__nav-en">WORK</span>
                                <span class="sp-menu__nav-ja">施工実績</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/process/' ) ); ?>" class="sp-menu__nav-link">
                                <span class="sp-menu__nav-en">PROCESS</span>
                                <span class="sp-menu__nav-ja">ご依頼の流れ</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/team-list/' ) ); ?>" class="sp-menu__nav-link">
                                <span class="sp-menu__nav-en">OUR TEAM</span>
                                <span class="sp-menu__nav-ja">社員紹介</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/recruit-list/' ) ); ?>" class="sp-menu__nav-link">
                                <span class="sp-menu__nav-en">RECRUIT</span>
                                <span class="sp-menu__nav-ja">採用情報</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="sp-menu__nav-link">
                                <span class="sp-menu__nav-en">FAQ</span>
                                <span class="sp-menu__nav-ja">よくある質問</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="sp-menu__nav-link">
                                <span class="sp-menu__nav-en">CONTACT</span>
                                <span class="sp-menu__nav-ja">お問い合わせ</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- サブリンク -->
                <ul class="sp-menu__sub">
                    <li><a href="<?php echo esc_url( home_url( '/site-map/' ) ); ?>" class="sp-menu__sub-link">— サイトマップ</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>" class="sp-menu__sub-link">— プライバシーポリシー</a></li>
                </ul>
            </div><!-- /.sp-menu__body -->
            <!-- 縦書きデコテキスト -->
            <p class="sp-menu__deco-text" aria-hidden="true">
                <span>SATO ELECTRICAL</span>
                <span class="sp-menu__deco-text--construction">CONSTRUCTION</span>
            </p>
        </div>
    </div>
    <!-- オーバーレイ -->
    <div class="sp-menu__overlay" id="sp-menu-overlay"></div>
    <!-- メインコンテンツ -->
    