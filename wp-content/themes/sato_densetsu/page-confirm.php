<?php
/**
 * 固定ページ「お問い合わせ 確認」（スラッグ: confirm）
 * 確認画面は入力ページ（/contact/）内に Confirm Plus が表示し、JS が URL だけ /confirm/ に切り替える。
 * /confirm/ を直接開いた・再読み込みした場合は、入力内容が無いため入力ページへ転送する。
 */
wp_safe_redirect( home_url( '/contact/' ) );
exit;
