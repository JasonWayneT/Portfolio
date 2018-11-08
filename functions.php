<?php function portfolio_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_script("jquery");
	wp_enqueue_script('TweenLite', get_template_directory_uri() . "/js/vendor/TweenLite.min.js", NULL, false, true);
	wp_enqueue_script('ScrollMagic', get_template_directory_uri() . "/js/vendor/ScrollMagic.min.js", NULL, false,true);
	wp_enqueue_script( 'CSSPlugin', get_template_directory_uri() ."/js/vendor/CSSPlugin.min.js", NULL, false, true);
	wp_enqueue_script( 'GSAP Ease Pack',get_template_directory_uri() . "/js/vendor/EasePack.min.js", NULL, false,true);
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/scripts-bundled.js',NULL, false,true);
	wp_enqueue_style( 'main-css',  get_template_directory_uri() . '/style.css' );



}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );
