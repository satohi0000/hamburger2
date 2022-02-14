<?php
add_theme_support( 'menus' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );


function hamburger_title( $title ) {
    if ( is_front_page() && is_home() ) { //表示されたページがフロントページかつメインページなら
        $title = get_bloginfo( 'name', 'display' ); //タイトルはブログのサイト名にしてください
    } elseif ( is_singular() ) { //表示されたページが個別投稿ページなら
        $title = single_post_title( '', false ); //タイトルは投稿記事のタイトルにしてください
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'hamburger_title' ); //

function hamburger_script(){ 
    wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/css/hamburger.css', array(), '1.0.0' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    wp_enqueue_script( 'toggle', get_template_directory_uri() . '/js/Hamburger.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.6.0.js', "", "3.6.0", true );
}
add_action( 'wp_enqueue_scripts', 'hamburger_script' );


function hamburger_widgets_init() {
    register_sidebar (
        array(
            'name'          => 'All Menu',
            'id'            => 'menu_widget',
            'description'   => 'メニューの一覧です',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="c-category-title">',
            'after_title'   => "</h2>\n",
        )
    );
}
add_action( 'widgets_init', 'hamburger_widgets_init' );

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'メニュー'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

register_sidebar(
    array(
      'name'          => 'タグウィジェット',
      'id'            => 'tag_widget',
      'description'   => 'タグ用ウィジェットです',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2><i class="fa fa-tags" aria-hidden="true"></i>',
      'after_title'   => "</h2>\n",
    )
  );
  register_sidebar(
    array(
      'name'          => 'アーカイブウィジェット',
      'id'            => 'archive_widget',
      'description'   => 'アーカイブ用ウィジェットです',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2><i class="fa fa-archive" aria-hidden="true"></i>',
      'after_title'   => "</h2>\n",
    )
  );

//カスタムメニュー
function custom_theme_setup() {
    //メニューの登録
    register_nav_menus(array(
        'global-menu' => 'アーカイブ' ,
        'side-menu' => 'サイドメニュー',
        'footer-menu' => 'フッターメニュー',
        
    ));
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

function the_pagination() {
    global $wp_query;
    $big = 999999999;
    if ( $wp_query->max_num_pages <= 1 )
        return;
    echo '<nav class="pagination">';
    echo paginate_links( array(
        'base'         => str_replace( $big, '%#%', esc_url( get_pagenum_link($big) ) ),
        'format'       => '',
        'current'      => max( 1, get_query_var('paged') ),
        'total'        => $wp_query->max_num_pages,
        'prev_text'    => '<<',
        'next_text'    => '>>',
        'type'         => 'list',
        'end_size'     => 1,
        'mid_size'     => 1
    ) );
    echo '</nav>';
}

function create_post_type() {
    register_post_type( 'item', [ // 投稿タイプ名
        'labels' => [
            'name'          => '商品', // 管理画面上で表示する投稿タイプ名
            'singular_name' => 'item',    // カスタム投稿の識別名
        ],
        'public'        => true,  // 投稿タイプをpublicにする
        'has_archive'   => true, // アーカイブ機能ON
        'menu_position' => 5,     // 管理画面上での配置場所
        'menu_icon'     => 'dashicons-store', //管理画面右側のバーにつくアイコン設定
        'taxonomies'    => [
            'item_cat'
        ],
        'hierarchical'  => true,
        'supports'      => [
            'title',
            'editor',
            'thumbnail',
            'page-attributes'
        ],
        ]);

    register_taxonomy( 'item_cat', 'item', [
        'labels' => [
            'name'          => '商品カテゴリー',
            'edit_item'     =>'商品カテゴリーを編集',
        ],
        'public' => true, 
        'hierarchical' => true, 
        ]);
    }
add_action( 'init', 'create_post_type' );