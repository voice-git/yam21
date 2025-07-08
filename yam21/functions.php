<?php
/**
 * yam21 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package yam21
 */

if ( ! function_exists( 'yam21_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function yam21_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on yam21, use a find and replace
		 * to change 'yam21' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'yam21', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'yam21' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'yam21_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'yam21_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function yam21_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'yam21_content_width', 640 );
}
add_action( 'after_setup_theme', 'yam21_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function yam21_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'yam21' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'yam21' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'yam21_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function yam21_scripts() {
	wp_enqueue_style( 'yam21-style', get_stylesheet_uri() );

	wp_enqueue_script( 'yam21-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'yam21-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'yam21_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




//ショートコードを使ったphpファイルの呼び出し
function my_php_Include($params = array()) {
 extract(shortcode_atts(array('file' => 'default'), $params));
 ob_start();
 include(STYLESHEETPATH . "/$file.php");
 return ob_get_clean();
}
add_shortcode('myphp', 'my_php_Include');


// 記事の自動整形を無効化
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content) {
    global $post;
    $remove_filter = false;
     
    $arr_types = array('page','real_estate'); //自動整形を無効にする投稿タイプを記述
    $post_type = get_post_type( $post->ID );
    if (in_array($post_type, $arr_types)) $remove_filter = true;
     
    if ( $remove_filter ) {
        remove_filter('the_content', 'wpautop');
        remove_filter('the_excerpt', 'wpautop');
    }
     
    return $content;
}
// 抜粋の自動整形を無効化
remove_filter('the_excerpt', 'wpautop');
// カスタムフィールドの自動整形を無効化
remove_filter('the_field', 'wpautop');

// WPの特定の固定ページのエディタを非表示にする
add_filter('use_block_editor_for_post',function($use_block_editor,$post){
    if($post->post_type==='page'){
        if(in_array($post->post_name,['satoyama'])){
            remove_post_type_support('page','editor');
            return false;
        }
    }
    return $use_block_editor;
},10,2);


//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');


// 管理画面から「投稿」削除
function remove_menus () {
    global $menu;
    unset($menu[5]);  // 投稿
}
add_action('admin_menu', 'remove_menus');


// アーカイブページタイトルから「カテゴリー：」「年別：」を削除
add_filter('get_the_archive_title', function ($title) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_year() ) {
        $title = get_the_date( _x( 'Y', 'yearly archives date format' ) );
    } elseif ( is_month() ) {
        $title = get_the_date( _x( 'F Y', 'monthly archives date format' ) );
    } elseif ( is_day() ) {
        $title = get_the_date( _x( 'F j, Y', 'daily archives date format' ) );
    } elseif ( is_tax( 'post_format' ) ) {
        if ( is_tax( 'post_format', 'post-format-aside' ) ) {
            $title = _x( 'Asides', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
            $title = _x( 'Galleries', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
            $title = _x( 'Images', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
            $title = _x( 'Videos', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
            $title = _x( 'Quotes', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
            $title = _x( 'Links', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
            $title = _x( 'Statuses', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
            $title = _x( 'Audio', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
            $title = _x( 'Chats', 'post format archive title' );
        }
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    } else {
        $title = __( 'Archives' );
    }
    return $title;
});

// タイトルのセパレータ
function change_separator() {
  return "｜"; // ここに変更したい区切り文字を書く
}
add_filter('document_title_separator', 'change_separator');


/**
 * バージョンアップ通知を管理者のみ表示させるようにします。
 */
function update_nag_admin_only() {
    if ( ! current_user_can( 'administrator' ) ) {
        remove_action( 'admin_notices', 'update_nag', 3 );
    }
}
add_action( 'admin_init', 'update_nag_admin_only' );

//「wp_head」の出力内容、不要なものを削除
remove_action('wp_head', 'wp_print_styles', 8);
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
function remove_recent_comments_style() { global $wp_widget_factory; remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) ); } add_action( 'widgets_init', 'remove_recent_comments_style' );


//絵文字スクリプト削除
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


//各種アーカイブページ表示件数管理
function change_posts_per_page($query) {
     /* 管理画面,メインクエリに干渉しないために必須 */
    if ( is_admin() || ! $query->is_main_query() ){
         return;
     }

     /* 表示件数管理 */
     if ( $query->is_post_type_archive( 'real_estate' ) ) {
         $query->set( 'posts_per_page', '5' );
         return;
     }
     if ( $query->is_post_type_archive( 'blog' ) ) {
         $query->set( 'posts_per_page', '15' );
         return;
     }
     if ( $query->is_post_type_archive( 'column' ) ) {
         $query->set( 'posts_per_page', '15' );
         return;
     }
     if ( $query->is_post_type_archive( 'news' ) ) {
         $query->set( 'posts_per_page', '15' );
         return;
     }
     if ( $query->is_post_type_archive( 'works' ) ) {
         $query->set( 'posts_per_page', '6' );
         return;
     }
     if ( $query->is_post_type_archive( 'recruit' ) ) {
         $query->set( 'posts_per_page', '-1' );
         return;
     }
     if ( $query->is_tax( 'blog_staff' ) ) {
         $query->set( 'posts_per_page', '15' );
         return;
     }
     if ( $query->is_singular( 'blog' ) ) {
         $query->set( 'posts_per_page', '6' );
         return;
     }

}
add_action( 'pre_get_posts', 'change_posts_per_page' );

//Contact Form 7 住所自動入力
wp_enqueue_script( 'yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true );


//検索　カスタム投稿タイプ指定
function filter_search( $query ) {
  if ( $query->is_search() && $query->is_main_query() && ! is_admin() ) {
    $query->set( 'post_type', array( 'real_estate', 'works', 'page', 'news', 'blog', 'column' ) );
  }
}
add_filter( 'pre_get_posts', 'filter_search' );

function aktk_post_type_labels_page( $labels ) {
  //「投稿」が書かれている部分を地道に変更する。
    $labels->name                  = 'ページ';
    $labels->singular_name         = 'ページ';

    return $labels;
}

add_filter( 'post_type_labels_page', 'aktk_post_type_labels_page' );


//メールフォームデフォルト値設定
add_filter( 'shortcode_atts_wpcf7', 'custom_shortcode_atts_wpcf7_filter', 10, 3 );
 
function custom_shortcode_atts_wpcf7_filter( $out, $pairs, $atts ) {
    $my_attr = 'your-event';
 
    if ( isset( $atts[$my_attr] ) ) {
        $out[$my_attr] = $atts[$my_attr];
    }
 
    return $out;
}

//reCAPTCHAを使っているページにだけロゴを表示
add_action( 'wp_enqueue_scripts', function() {
	if(is_page('contact')) return;
	if(is_page('form_studio')) return;
	if(is_page('form_yoyaku')) return;
	if(is_page('form_siryou')) return;
	if(is_page('form_contact')) return;
	if(is_page('form_shokai')) return;
	if(is_singular(array('news','real_estate'))) return;
    wp_deregister_script( 'google-recaptcha' );
});

// ページネーションの1桁数の先頭に0を加える
add_filter('number_format_i18n',function($format){
	$number = intval( $format );
	if( intval( $number / 10 ) > 0 ) {
		return $format;
	}
	return '0' . $format;
});

// コメントフォームのカスタマイズ
function comment_field_custom( $fields ) {

  //コメント
  $comment_field = '<p class="comment-form-comment"><label for="comment"></label><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" placeholder="こちらにご記入ください。"></textarea></p>';
  $fields['comment'] = $comment_field;

  //名前
  $comment_field = '<p class="comment-form-author"><label for="author">お名前</label><input id="author" name="author" type="text" value="" size="30" maxlength="245" autocomplete="name" placeholder="任意"></p></div>';
  unset( $fields['author'] );
  $fields['author'] = $comment_field;

  //メール
  $comment_field = '<div class="comment-reply-flex"><p class="comment-form-email"><label for="email" placeholder="任意">メールアドレス</label><input id="email" name="email" type="email" value="" size="30" maxlength="100" autocomplete="email" placeholder="任意"></p>';
  $fields['email'] = $comment_field;

  $fields['url'] = '';

  return $fields;
}
add_filter( 'comment_form_fields', 'comment_field_custom');

add_filter('get_archives_link', function($link_html) {
  return str_replace('/date/', '/', $link_html);
});

// 管理画面　WORKS一覧
function my_add_columns($columns) {
    $columns['num'] = '記事No';
    $columns['n1'] = 'サムネイル';
    return $columns;
}
add_filter('manage_edit-works_columns', 'my_add_columns');

function my_custom_columns_content($column, $post_id) {
    switch ($column) {
        case 'num':
            $num_value = get_post_meta($post_id, 'num', true);
            if (!empty($num_value)) {
                echo $num_value;
            } else {
                echo '未設定';
            }
            break;
        case 'n1':
            $thumbnail_id = get_post_meta($post_id, 'n1', true);
            if (!empty($thumbnail_id)) {
                $image_url = wp_get_attachment_image_url($thumbnail_id, 'thumbnail');
                echo '<img src="' . esc_url($image_url) . '" alt="" style="max-width: 60px; height: auto;">';
            } else {
                echo '-';
            }
            break;
    }
}
add_action('manage_works_posts_custom_column', 'my_custom_columns_content', 10, 2);

// 管理画面　BLOG一覧
function my_add_columns02($columns) {
    $columns['n1'] = 'サムネイル';
    return $columns;
}
add_filter('manage_edit-blog_columns', 'my_add_columns02');

function my_custom_columns_content02($column, $post_id) {
    switch ($column) {
        case 'n1':
            $thumbnail_id = get_post_meta($post_id, 'n1', true);
            if (!empty($thumbnail_id)) {
                $image_url = wp_get_attachment_image_url($thumbnail_id, 'thumbnail');
                echo '<img src="' . esc_url($image_url) . '" alt="" style="max-width: 60px; height: auto;">';
            } else {
                echo '-';
            }
            break;
    }
}
add_action('manage_blog_posts_custom_column', 'my_custom_columns_content02', 10, 2);

// 管理画面　REAL ESTATE一覧
function my_add_columns03($columns) {
    $columns['rec2'] = '売約済/成約済';
    $columns['n1'] = 'サムネイル';
    return $columns;
}
add_filter('manage_edit-real_estate_columns', 'my_add_columns03');

function my_custom_columns_content03($column, $post_id) {
    switch ($column) {
		case 'rec2':
		    $rec2_value = get_post_meta($post_id, 'rec2', true);
		    if (!empty($rec2_value)) {
		        echo '◯';
		    } else {
		        echo '×';
		    }
		    break;
        case 'n1':
            $thumbnail_id = get_post_meta($post_id, 'n1', true);
            if (!empty($thumbnail_id)) {
                $image_url = wp_get_attachment_image_url($thumbnail_id, 'thumbnail');
                echo '<img src="' . esc_url($image_url) . '" alt="" style="max-width: 60px; height: auto;">';
            } else {
                echo '-';
            }
            break;
    }
}
add_action('manage_real_estate_posts_custom_column', 'my_custom_columns_content03', 10, 2);

// 管理画面　REAL ESTATE一覧 並び順の変更
function change_admin_orderby_post_types( $wp_query ) {
  if (is_admin()) {
    $post_type = $wp_query->query['post_type'];
    if ( $post_type == 'real_estate' ) {
      $wp_query->set('orderby', 'date'); // 'date'-> 日付で並び替え
      $wp_query->set('order', 'DESC'); // 'DESC'-> 降順、 'ASC'-> 昇順
    }
  }
}
add_filter('pre_get_posts', 'change_admin_orderby_post_types');

add_filter( 'wpcf7_recaptcha_enabled', '__return_false' );

// リダイレクト処理無効
function disable_redirect_canonical( $redirect_url ) {
  if ( is_singular( array('works', 'blog') ) )
  $redirect_url = false;
  return $redirect_url;
}

add_filter('redirect_canonical','disable_redirect_canonical');

// ACFオプションページ
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
}