<?php
// Them css va javascript vao giua the head
function sw_styles_and_scripts() {
        wp_register_style('matata-custom-style', get_template_directory_uri().'/NPGroup/custom-style.css');
        wp_enqueue_style('matata-custom-style');
}
add_action('wp_enqueue_scripts', 'sw_styles_and_scripts');

//add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );

//$wp_admin_bar->remove_menu( 'wpadminbar' );

function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}

?>