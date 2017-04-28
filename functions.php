<?php
register_sidebar( array(
  'name' => 'サイドバーウィジェット-1',
  'id' => 'sidebar-1',
  'description' => 'サイドバーのウィジェットエリアです。',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
) );
// カスタムメニューを有効化
add_theme_support( 'menus' );
// カスタムメニューの「場所」を設定するコード
register_nav_menu( 'header-navi', 'ヘッダーのナビゲーション' );
register_nav_menu( 'footer-navi', 'フッターのナビゲーション' );
add_theme_support('post-thumbnails');
set_post_thumbnail_size(300, 200, false);

add_filter( 'ppp_nonce_life', 'my_nonce_life' );
function my_nonce_life() {
    return 60 * 60 * 24 * 5; // 5 days
}
function my_scripts() {
wp_enqueue_script( 'jquery' );
wp_enqueue_script( 'script',get_template_directory_uri().'/js/script.js',array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );
function new_excerpt_mblength($length) {
     return 150;
}	
add_filter('excerpt_mblength', 'new_excerpt_mblength');

function new_excerpt_more($more) {
	return '...';
}	
add_filter('excerpt_more', 'new_excerpt_more');
function wrap_iframe_in_div($the_content) {
  if ( is_singular() ) {
    $the_content = preg_replace('/<iframe/i', '<div class="iframe-container"><div class="iframe-wrapper"><iframe', $the_content);
    $the_content = preg_replace('/<\/iframe>/i', '</iframe></div></div>', $the_content);
  }
  return $the_content;
}
add_filter('the_content','wrap_iframe_in_div');
?>