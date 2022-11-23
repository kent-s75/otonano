<?php

function camp_theme_setup() {
  // タイトルタグ（<title>）の出力.
  add_theme_support( 'title-tag' );
  // アイキャッチ画像の有効化.
  add_theme_support( 'post-thumbnails' );
  // HTML5フォームの有効化.
  add_theme_support( 'html5', array( 'search-form' ) );
  // 固定ページ・投稿ページのアイキャッチサイズ.
  add_image_size( 'page_eyecatch', 1100, 610, true );
  // 記事一覧のアイキャッチサイズ.
  add_image_size( 'archive_thumbnail', 200, 150, true );
  // カスタムメニュー有効化.
  register_nav_menu( 'main-menu', 'メインメニュー' );

  // カスタムメニュー有効化（複数メニュー）.
  // register_nav_menus( array(
  // 'main-menu' => 'メインメニュー',
  // 'footer-menu' => 'フッターメニュー',
  // ) );
}
add_action( 'after_setup_theme', 'camp_theme_setup' );

function add_files() {

  
  //CSSの読み込みはここから
  
  // wp_enqueue_style('main-style',get_template_directory_uri().'/css/common.css' );
  
  //header部分のcssを読み込み
  // wp_enqueue_style('awesome-style','//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
  
  //全てのページにcss/store.cssを読み込み
  wp_enqueue_style('main-style', get_template_directory_uri().'/css/common.css');
  
  wp_enqueue_script( 
    'main-script', 
    get_template_directory_uri() . '/js/main.js','', '20210601', true
  );
}
//関数名add_scripts()を表側で呼び出す
add_action('wp_enqueue_scripts', 'add_files');

function new_excerpt_more($more) {
  return ' ... ';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
  return 45; 
}       
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'blog'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


?>