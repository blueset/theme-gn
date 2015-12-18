<?php
/**
 * Custom functions
 */
// Register Theme Features
function custom_theme_features()  {

	// Add theme support for Custom Header
	$header_args = array(
		'default-image'          => get_template_directory_uri() . '/assets/img/banner.png',
		'width'                  => 1350,
		'height'                 => 330,
		'flex-width'             => true,
		'flex-height'            => false,
		'random-default'         => false,
		'header-text'            => true,
		'default-text-color'     => 'ffffff',
		'uploads'                => true,

	);
	add_theme_support( 'custom-header', $header_args );
}

// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'custom_theme_features' );

function header_style() { ?>
    <style type="text/css">
        .hero-unit#title h4 {}
    </style>
<?php }