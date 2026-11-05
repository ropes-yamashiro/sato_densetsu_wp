<?php
/**
 * 佐藤電設工業 テーマ設定
 *
 * ■ テンプレートが参照する SCF フィールド（docs/scf/field-groups.json を acf-tools からインポート）
 *   施工実績 (work)    : period(text) / thumbnail(image・ID) / content(wysiwyg)
 *   社員紹介 (team)    : department(text) / joined(text) / thumbnail(image・ID) / content(wysiwyg)
 *   採用情報 (recruit) : thumbnail(image・ID) / summary(textarea) /
 *                        age / employment / condition / holiday / location / hours / salary / benefits / apply (text)
 */

// ---------------------------------------------------------------
// テーマ基本設定
// ---------------------------------------------------------------
add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
} );

// 不要な絵文字スクリプト等は出さない
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// ---------------------------------------------------------------
// CSS/JS の URL（filemtime でキャッシュ対策）
// ---------------------------------------------------------------
function sato_asset_url( $path ) {
	$file = get_template_directory() . '/' . $path;
	$ver  = file_exists( $file ) ? filemtime( $file ) : time();
	return get_template_directory_uri() . '/' . $path . '?ver=' . $ver;
}

/**
 * 下層ページ専用CSS名を返す（静的HTMLのCSS構成に合わせる）
 */
function sato_page_css() {
	if ( is_singular( 'work' ) || is_page( 'work-list' ) ) {
		return 'work';
	}
	if ( is_singular( 'team' ) || is_page( 'team-list' ) ) {
		return 'team';
	}
	if ( is_singular( 'recruit' ) || is_page( 'recruit-list' ) ) {
		return 'recruit';
	}
	if ( is_page() ) {
		$slug = get_post_field( 'post_name', get_queried_object_id() );
		$done = function_exists( 'sato_form_for_complete_page' ) ? sato_form_for_complete_page( $slug ) : null;
		if ( $done ) {
			$slug = $done['css'];
		}
		if ( $slug && file_exists( get_template_directory() . '/css/' . $slug . '.css' ) ) {
			return $slug;
		}
	}
	return '';
}

// ---------------------------------------------------------------
// カスタム投稿タイプ / タクソノミー
//   施工実績 work / 社員紹介 team / 採用情報 recruit
//   一覧は固定ページ（work-list / team-list / recruit-list）+ WP_Query
// ---------------------------------------------------------------
add_action( 'init', function () {
	$types = array(
		'work'    => array( '施工実績', 'work' ),
		'team'    => array( '社員紹介', 'team' ),
		'recruit' => array( '採用情報', 'recruit' ),
	);
	foreach ( $types as $key => $info ) {
		register_post_type( $key, array(
			'labels'       => array(
				'name'          => $info[0],
				'singular_name' => $info[0],
				'add_new'       => '新規追加',
				'add_new_item'  => $info[0] . 'を追加',
				'edit_item'     => $info[0] . 'を編集',
				'all_items'     => $info[0] . '一覧',
				'menu_name'     => $info[0],
			),
			'public'       => true,
			'has_archive'  => false,
			'show_in_rest' => true,
			'menu_icon'    => ( 'work' === $key ) ? 'dashicons-hammer' : ( ( 'team' === $key ) ? 'dashicons-groups' : 'dashicons-id-alt' ),
			'supports'     => array( 'title' ),
			'rewrite'      => array( 'slug' => $info[1], 'with_front' => false ),
		) );
	}

	// 施工実績カテゴリー（マンション 等）
	register_taxonomy( 'work_category', array( 'work' ), array(
		'labels'            => array(
			'name'          => '施工実績カテゴリー',
			'singular_name' => '施工実績カテゴリー',
			'menu_name'     => 'カテゴリー',
		),
		'hierarchical'      => true,
		'public'            => false,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'rewrite'           => false,
		'query_var'         => false,
	) );
} );

// クライアントが更新する画面は「タイトル + SCF」だけにする（ブロックエディター無効）
add_filter( 'use_block_editor_for_post_type', function ( $use, $post_type ) {
	return in_array( $post_type, array( 'work', 'team', 'recruit' ), true ) ? false : $use;
}, 10, 2 );

// ---------------------------------------------------------------
// 一覧の件数・並び順（静的HTMLと一致させる）
// ---------------------------------------------------------------
define( 'SATO_WORK_PER_PAGE', 9 );
define( 'SATO_TEAM_PER_PAGE', -1 );

// ---------------------------------------------------------------
// ヘルパー
// ---------------------------------------------------------------
/** SCF の値を安全に取得（SCF無効時は post_meta） */
function sato_field( $name, $post_id = null ) {
	if ( function_exists( 'get_field' ) ) {
		return get_field( $name, $post_id );
	}
	return get_post_meta( $post_id ? $post_id : get_the_ID(), $name, true );
}

/** 画像フィールド（戻り値が配列/ID/URLのどれでも添付IDを返す） */
function sato_image_id( $value ) {
	if ( is_array( $value ) ) {
		return isset( $value['ID'] ) ? (int) $value['ID'] : ( isset( $value['id'] ) ? (int) $value['id'] : 0 );
	}
	if ( is_numeric( $value ) ) {
		return (int) $value;
	}
	if ( is_string( $value ) && $value ) {
		return (int) attachment_url_to_postid( $value );
	}
	return 0;
}

/**
 * サムネイル出力: thumbnail → アイキャッチ → ダミー画像 の順
 *
 * @param string $dummy テーマ内ダミー画像（images/ からの相対）
 */
function sato_the_thumbnail( $post_id, $dummy, $class = '', $alt = '', $size = 'large' ) {
	$id = sato_image_id( sato_field( 'thumbnail', $post_id ) );
	if ( ! $id && has_post_thumbnail( $post_id ) ) {
		$id = get_post_thumbnail_id( $post_id );
	}
	$alt = $alt ? $alt : get_the_title( $post_id );
	if ( $id ) {
		echo wp_get_attachment_image( $id, $size, false, array(
			'class'   => $class,
			'alt'     => $alt,
			'loading' => 'lazy',
		) );
		return;
	}
	printf(
		'<img src="%s" alt="%s"%s loading="lazy">',
		esc_url( get_template_directory_uri() . '/images/' . $dummy ),
		esc_attr( $alt ),
		$class ? ' class="' . esc_attr( $class ) . '"' : ''
	);
}

/** 施工実績のカテゴリー名（先頭のタームのみ） */
function sato_work_category_name( $post_id ) {
	$terms = get_the_terms( $post_id, 'work_category' );
	return ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : '';
}

/** 本文WYSIWYGの最初の <p> を一定文字数で切り出す */
function sato_excerpt_from_content( $html, $length = 90 ) {
	if ( preg_match( '/<p[^>]*>(.*?)<\/p>/is', (string) $html, $m ) ) {
		$text = wp_strip_all_tags( $m[1] );
	} else {
		$text = wp_strip_all_tags( (string) $html );
	}
	return mb_strimwidth( trim( $text ), 0, $length * 2, '…', 'UTF-8' );
}

/** ページネーション（静的版 .pagination マークアップを維持） */
function sato_pagination( $query ) {
	$total = (int) $query->max_num_pages;
	if ( $total <= 1 ) {
		return;
	}
	$current = max( 1, (int) get_query_var( 'paged' ), (int) get_query_var( 'page' ) );
	?>
	<nav class="pagination" aria-label="ページネーション">
		<?php if ( $current > 1 ) : ?>
			<a href="<?php echo esc_url( get_pagenum_link( $current - 1 ) ); ?>" class="pagination__btn pagination__btn--prev" aria-label="前のページ">前へ</a>
		<?php else : ?>
			<button type="button" class="pagination__btn pagination__btn--prev" aria-label="前のページ" disabled>前へ</button>
		<?php endif; ?>
		<ul class="pagination__list">
			<?php for ( $i = 1; $i <= $total; $i++ ) : ?>
				<li>
					<?php if ( $i === $current ) : ?>
						<span class="pagination__link is-current" aria-current="page"><?php echo (int) $i; ?></span>
					<?php else : ?>
						<a href="<?php echo esc_url( get_pagenum_link( $i ) ); ?>" class="pagination__link"><?php echo (int) $i; ?></a>
					<?php endif; ?>
				</li>
			<?php endfor; ?>
		</ul>
		<?php if ( $current < $total ) : ?>
			<a href="<?php echo esc_url( get_pagenum_link( $current + 1 ) ); ?>" class="pagination__btn pagination__btn--next" aria-label="次のページ">次へ</a>
		<?php else : ?>
			<button type="button" class="pagination__btn pagination__btn--next" aria-label="次のページ" disabled>次へ</button>
		<?php endif; ?>
	</nav>
	<?php
}

// ---------------------------------------------------------------
// WordPress.org の同名テーマ更新通知を出さない
// ---------------------------------------------------------------
add_filter( 'site_transient_update_themes', function ( $value ) {
	if ( is_object( $value ) && isset( $value->response['sato_densetsu'] ) ) {
		unset( $value->response['sato_densetsu'] );
	}
	return $value;
} );

// ---------------------------------------------------------------
// Contact Form 7 + Confirm Plus（お問い合わせ: 入力 → 確認(Confirm Plus) → 完了ページ）
// ---------------------------------------------------------------
// フォームHTMLをそのまま出す（自動で <p> / <br> を挟まない）
add_filter( 'wpcf7_autop_or_not', '__return_false' );

// Confirm Plus（確認画面）のボタン・文言
add_filter( 'wpcf7cp_localize_data', function ( $data ) {
	$data['cfm_btn']           = '入力内容の確認画面へ';
	$data['cfm_btn_edit']      = '入力画面へ戻る';
	$data['cfm_btn_mail_send'] = '送信する';
	$data['checked_msg']       = '同意する';
	return $data;
} );

// メールアドレス（確認）の一致チェック
add_filter( 'wpcf7_validate_email*', function ( $result, $tag ) {
	if ( 'email_confirm' !== $tag->name ) {
		return $result;
	}
	// phpcs:ignore WordPress.Security.NonceVerification.Missing
	$email   = isset( $_POST['email'] ) ? trim( wp_unslash( $_POST['email'] ) ) : '';
	$confirm = isset( $_POST['email_confirm'] ) ? trim( wp_unslash( $_POST['email_confirm'] ) ) : '';
	if ( $confirm && $email !== $confirm ) {
		$result->invalidate( $tag, 'メールアドレスが一致しません。' );
	}
	return $result;
}, 20, 2 );

/**
 * フォームページ設定: [ 固定ページslug => [ 完了ページslug ] ]
 * 確認画面は同一ページ内（Confirm Plus）でURLだけ /confirm/ に切り替え、完了ページは /finish/。完了ページ（finish）は、フォームのCSS（contact.css）を共用する。
 */
function sato_form_pages() {
	return array(
		'contact' => array( 'confirm' => 'confirm', 'complete' => 'finish', 'css' => 'contact' ),
	);
}

/** 完了ページのslugなら、対応するフォーム設定を返す（違えば null） */
function sato_form_for_complete_page( $slug ) {
	foreach ( sato_form_pages() as $form_slug => $conf ) {
		if ( $conf['complete'] === $slug ) {
			return array( 'form' => $form_slug ) + $conf;
		}
	}
	return null;
}

// 完了ページは検索エンジンに載せない
add_filter( 'wp_robots', function ( $robots ) {
	if ( is_page() && sato_form_for_complete_page( get_post_field( 'post_name', get_queried_object_id() ) ) ) {
		$robots['noindex']  = true;
		$robots['nofollow'] = true;
	}
	return $robots;
} );
