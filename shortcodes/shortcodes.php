<?php
if ( file_exists( get_template_directory().'/shortcodes/brands.php' ) ) {
	require_once( get_template_directory().'/shortcodes/brands.php' );
}
if ( file_exists( get_template_directory().'/shortcodes/latestposts.php' ) ) {
	require_once( get_template_directory().'/shortcodes/latestposts.php' );
}
if ( file_exists( get_template_directory().'/shortcodes/map.php' ) ) {
	require_once( get_template_directory().'/shortcodes/map.php' );
}
if ( file_exists( get_template_directory().'/shortcodes/popularcategories.php' ) ) {
	require_once( get_template_directory().'/shortcodes/popularcategories.php' );
}
?>