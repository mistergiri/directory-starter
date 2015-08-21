<?php
/**
 * Enqueue scripts and styles.
 */
function directory_theme_scripts() {
	// Load theme information.
	wp_enqueue_style( 'directory-theme-info', get_stylesheet_uri() );
	// Load main theme styles.
	wp_enqueue_style( 'directory-theme-style', get_template_directory_uri() . '/assets/css/style.css', array( 'directory-theme-info' ), '20150730' );
	// Load main theme responsive styles.
	//wp_enqueue_style( 'directory-theme-style-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array('directory-theme-style'), '20150730' );
	// Load main theme js.
	wp_enqueue_script( 'directory-theme-script', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '20150730', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$query_args = array(
		'family' => 'Lato:400,700',
	);
	wp_enqueue_style( 'directory-theme_google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
}
add_action( 'wp_enqueue_scripts', 'directory_theme_scripts' );

function directory_theme_add_google_font() {
	$query_args = array(
		'family' => 'Lato:400,700',
	);
	wp_enqueue_style( 'directory-theme_google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
}
//add_action( 'admin_enqueue_scripts', 'directory_theme_add_google_font' );

function directory_theme_responsive_styles() {
	?>
	<link rel='stylesheet' id='directory-theme-style-responsive-css'  href='<?php echo get_template_directory_uri() . '/assets/css/responsive.css'; ?>' type='text/css' />
<?php
}
add_action( 'wp_head', 'directory_theme_responsive_styles', 20);

/**
 * Customizer Js
 */
function dt_theme_customizer_live_preview()
{
	wp_enqueue_script(
		'dt-theme-customizer-js',
		get_template_directory_uri().'/assets/js/theme-customizer.js',
		array( 'jquery','customize-preview' ),
		'0.1',
		true
	);
}
add_action( 'customize_preview_init', 'dt_theme_customizer_live_preview' );