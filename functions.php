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
	wp_enqueue_style( 'farmers-style', get_stylesheet_uri(), array(), '1.0.0' );

	// メインのJavaScript (script.js)
	wp_enqueue_script( 'farmers-script', get_template_directory_uri() . '/script.js', array(), '1.0.0', true ); // trueでフッター読み込み
}
add_action( 'wp_enqueue_scripts', 'farmers_enqueue_scripts' );


/**
 * テーマカスタマイザーの登録（バナー画像設定などを追加）
 */
function farmers_customize_register( $wp_customize ) {
	
	// セクションの追加：「トップページ設定」
	$wp_customize->add_section( 'farmers_front_page_options', array(
		'title'    => __( 'トップページ設定', 'farmers' ),
		'priority' => 30, // サイト基本情報の下あたりに表示
	) );

	// 設定項目の追加：メインバナー画像
	$wp_customize->add_setting( 'farmers_hero_image', array(
		'default'   => 'https://placehold.co/1600x900/a3e635/f0fdf4?text=新鮮な野菜のイメージ', // 初期画像
		'transport' => 'refresh', // 変更時にプレビューをリフレッシュ
		'sanitize_callback' => 'esc_url_raw',
	) );

	// コントロールの追加：画像アップローダー
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'farmers_hero_image', array(
		'label'    => __( 'メインバナー画像', 'farmers' ),
		'section'  => 'farmers_front_page_options',
		'settings' => 'farmers_hero_image',
		'description' => __( 'トップページのメインビジュアルとして表示する画像を設定します。', 'farmers' ),
	) ) );
}
add_action( 'customize_register', 'farmers_customize_register' );


/**
 * 決済システムのセットアップ（WooCommerceなど）
 *
 * ここに決済システム（例: WooCommerce）のサポートや
 * カスタマイズコードを追加していきます。
 */
// add_theme_support('woocommerce');

?>