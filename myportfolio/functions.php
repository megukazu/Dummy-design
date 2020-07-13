<?php
// コンテンツ幅をセット
if ( ! isset( $content_width ) ) {
	$content_width = 723;
}
// 関数の指定
function custom_theme_setup() {

	//head内にフィードリンクを出力
	add_theme_support( 'automatic-feed-links' );

	//タイトルタグを動的に出力
	add_theme_support( 'title-tag' );

	//ブロックエディター用のCSSを有効化
	add_theme_support( 'wp-block-styles' );

	//埋め込みコンテンツをレスポンシブ対応に
	add_theme_support( 'responsive-embeds' );

	//アイキャッチ画像を有効化
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 231, 177, false );

	//カスタムメニュー有効化、メニューの位置を設定
	register_nav_menus(
		array(
			'globalnav' => 'グローバルナビゲーション',
		)
	);
}
// 関数の実行
add_action( 'after_setup_theme', 'custom_theme_setup' );

// 関数の指定
function myportfolio_scripts() {
	wp_enqueue_style(
		'base-style',         // ハンドル名
		get_stylesheet_uri(), // ファイルのパス
		array(),              // 依存関係
		'1.0',                // バージョン指定
		'all'                 // メディアタイプ
	);
}
// 関数の実行
add_action( 'wp_enqueue_scripts', 'myportfolio_scripts' );

// ウィジェットエリアの関数の指定
function custom_widget_register() {
	register_sidebar( array(
		'name'          => 'サイドバーウィジェットエリア',
		'id'            => 'sidebar-widget',
		'description'   => 'ブログページのサイドバーに表示されます。',
		'before_widget' => '<div id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="c-widget__title">',
		'after_title'   => '</h2>',
	) );
}
// 関数の実行
add_action( 'widgets_init', 'custom_widget_register' );
