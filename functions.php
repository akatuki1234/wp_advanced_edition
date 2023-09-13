<?php
##===================== テーマのセットアップ =====================##
/**
 * テーマのセットアップを実行。
 * 
 * @method       setup_theme
 * @return null  返り値なし。
 */
function setup_theme()
{

}

add_action( 'after_setup_theme', 'setup_theme' );

##===============================================================##


##===================== header =====================##
/**
 * 「外観」に「メニュー」を追加する。
 * 
 * @method      add_apparence_to_menu
 * @param null  返り値なし。
 */
function add_apparence_to_menu()
{
  register_nav_menus( array(
    'header-nav' => 'header-navigation',
    'header-under' => 'header-under-navigation'
  ));  
};

add_action( 'after_setup_theme', 'add_apparence_to_menu' );

##==================================================##

##============== CSS ファイル読み込み ==============##

function load_for_css_file() {
/**
 * cdn で destyle.css 読み込み。 
 * 
 * @method       load_for_css_file
 * @return null  返り値なし。
 */
  $css_destyle_uri = 'https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css';
  wp_enqueue_style('cdn-destyle', $css_destyle_uri, array(), 'all');

  
/**
 * style.css 読み込み。 
 * 
 * @method       load_for_css_file
 * @return null  返り値なし。
 */
  $css_style_uri = get_template_directory_uri().'/style.css';
  wp_enqueue_style('css-style', $css_style_uri, array(), 'all');

};

add_action( 'after_setup_theme', 'load_for_css_file' );

##==================================================##


##=========== JavaScript ファイル読み込み ===========##
/**
 * jquery 読み込み。
 * 
 * @method       load_for_javascript_file
 * @return null  返り値なし。
 */
function load_for_javascript_file() {}

##===================================================##


?>