<?php
/**
 * mazdakdev functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mazdakdev
 */

if ( ! defined( 'MAZDAKDEV_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'MAZDAKDEV_VERSION', '0.1.0' );
}

if ( ! function_exists( 'mazdakdev_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mazdakdev_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mazdakdev, use a find and replace
		 * to change 'mazdakdev' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mazdakdev', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'mazdakdev' ),
				'menu-2' => __( 'Footer Menu', 'mazdakdev' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'mazdakdev_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mazdakdev_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'mazdakdev' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'mazdakdev' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mazdakdev_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mazdakdev_scripts() {
	wp_enqueue_style( 'mazdakdev-style', get_stylesheet_uri(), array(), MAZDAKDEV_VERSION );
	wp_register_script('mazdakdev-script',get_template_directory_uri() . "/js/script.min.js", array(''),'1.1', true);
	wp_enqueue_script('mazdakdev-script');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mazdakdev_scripts' );

/**
 * Add the block editor class to TinyMCE.
 *
 * This allows TinyMCE to use Tailwind Typography styles.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function mazdakdev_tinymce_add_class( $settings ) {
	$settings['body_class'] = 'block-editor-block-list__layout';
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'mazdakdev_tinymce_add_class' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Load Custom Comments Layout file.
 */
require get_template_directory() . '/inc/comments-helper.php';

add_filter( 'wpseo_remove_reply_to_com', '__return_false' );


/**
 * Customize Comments Form
 */

 function my_custom_comment_form_fields($fields) {
    $commenter = wp_get_current_commenter();
    $req = get_option('require_name_email');
    $html5 = current_theme_supports('html5', 'comment-form');

    $fields['author'] = '<div class="flex flex-row"><p class="comment-form-author txt-labels">'
        . '<label for="author">' . __('Name') . ($req ? ' *' : '') . '</label>'
        . '<div class="div-name-input"><input id="author" class="name-input" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" maxlength="245"' . ($req ? ' required' : '') . ' /></div></div>';

    $fields['email'] = '<div class="flex flex-row"><p class="comment-form-email txt-labels">'
        . '<label for="email">' . __('Email') . ($req ? ' *' : '') . '</label>'
        . '<div class="div-email-input"><input id="email" name="email" class="email-input" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" maxlength="100" aria-describedby="email-notes"' . ($req ? ' required' : '') . ' /></div></div>';

    $fields['url'] = '<div class="flex flex-row"><p class="comment-form-url txt-labels">'
        . '<label for="url">' . __('Website') . '</label>'
        . '<div class="div-web-input"><input id="url" class="email-input" name="url" type="url" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" maxlength="200" autocomplete="url" /></div></div>';

    // Remove the cookies field
    unset($fields['cookies']);

    return $fields;
}
add_filter('comment_form_default_fields', 'my_custom_comment_form_fields');

// Customizing the Comment Textarea Field
function my_custom_comment_field($field) {
    $field = '<div class="divtxtarea"><textarea id="comment" name="comment" class="txtarea" placeholder="Write a comment..." rows="6" maxlength="65525" required></textarea></div>';
    return $field;
}
add_filter('comment_form_field_comment', 'my_custom_comment_field');

// Customizing the Comment Form Defaults
function my_custom_comment_form_defaults($defaults) {
    $defaults['class_submit'] = 'post-btn';
    $defaults['submit_button'] = '<button class="post-btn" type="submit" id="%2$s" class="%3$s" value="%4$s">Post Comment</button>';
    $defaults['title_reply'] = __('<h2 class="font-bold text-gray-200 mb-6 txt-dsc">Discussion (' . get_comments_number() . ')</h2>');
    $defaults['label_submit'] = __('Post Comment');
    $defaults['cancel_reply_link'] = __('Cancel reply');
    $defaults['submit_field'] = '<p class="form-submit">%1$s %2$s</p>';

    // Remove the comment notes and logged in text
    $defaults['comment_notes_before'] = '';
    $defaults['comment_notes_after'] = '';
    $defaults['logged_in_as'] = '';

    return $defaults;
}
add_filter('comment_form_defaults', 'my_custom_comment_form_defaults');