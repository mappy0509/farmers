<?php

/**
 * Farmers
 *
 * @package Farmers
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * テーマのセットアップ
 */
function farmers_theme_setup() {
	// <title>タグをWordPressに管理させる
	add_theme_support( 'title-tag' );

	// 投稿と固定ページでアイキャッチ画像を有効にする
	add_theme_support( 'post-thumbnails' );

	// ナビゲーションメニューを登録する
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'farmers' ),
		)
	);
}
add_action( 'after_setup_theme', 'farmers_theme_setup' );


/**
 * 必要なCSSとJavaScriptファイルを読み込む
 */
function farmers_enqueue_scripts() {
	// Tailwind CSS CDN
	wp_enqueue_script( 'tailwindcss', 'https://cdn.tailwindcss.com', array(), null, false );

	// Google Fonts (Inter & Noto Sans JP)
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Noto+Sans+JP:wght@400;700&display=swap', array(), null );

	// メインのスタイルシート (style.css)
	// get_stylesheet_uri() は style.css へのパスを自動的に取得します
	wp_enqueue_style( 'farmers-style', get_stylesheet_uri(), array(), '1.0.0' );

	// メインのJavaScript (script.js)
	// get_template_directory_uri() はテーマのルートディレクトリへのパスを取得します
	// 'defer' => true で defer 属性を追加
	wp_enqueue_script( 'farmers-script', get_template_directory_uri() . '/script.js', array(), '1.0.0', true ); // trueでフッター読み込み
}
add_action( 'wp_enqueue_scripts', 'farmers_enqueue_scripts' );

/**
 * 決済システムのセットアップ（WooCommerceなど）
 *
 * ここに決済システム（例: WooCommerce）のサポートや
 * カスタマイズコードを追加していきます。
 * * 例：
 * add_theme_support('woocommerce');
 */

/**
 * カスタム投稿タイプ「商品」の登録
 * * 決済システムにWooCommerceを使用する場合、
 * WooCommerceが 'product' 投稿タイプを自動的に作成するため、
 * このコードは不要になる場合があります。
 *
 * function farmers_register_product_post_type() {
 * // ... 登録処理 ...
 * }
 * add_action('init', 'farmers_register_product_post_type');
 */

?>