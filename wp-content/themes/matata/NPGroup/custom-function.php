<?php
// Them css va javascript vao giua the head
function sw_styles_and_scripts() {
        wp_register_style('matata-googleapis-script', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js');
        wp_enqueue_style('matata-googleapis-script');
        wp_register_style('matata-bootstrapcdn-script', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
        wp_enqueue_style('matata-bootstrapcdn-script');
        wp_register_style('matata-bootstrapcdn-style', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
        wp_enqueue_style('matata-bootstrapcdn-style');
        wp_register_style('matata-NavTabsClick-script', get_template_directory_uri().'/NPGroup/NavTabsClick.js');
        wp_enqueue_style('matata-NavTabsClick-script');
        wp_register_style('matata-custom-style', get_template_directory_uri().'/NPGroup/custom-style.css');
        wp_enqueue_style('matata-custom-style');
        wp_register_style('matata-menu-style', get_template_directory_uri().'/NPGroup/menu.css');
        wp_enqueue_style('matata-menu-style');
}
add_action('wp_enqueue_scripts', 'sw_styles_and_scripts');



//add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );

//$wp_admin_bar->remove_menu( 'wpadminbar' );

function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}

function remove_wp_menu( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}
//Tạo một bộ lọc mới tên là lay_custom_post_type
add_filter('pre_get_posts','lay_custom_post_type');
//Thêm các lệnh thực thi trong bộ lọc
function lay_custom_post_type($query) {
if (is_home() && $query->is_main_query ())
$query->set ('post_type', array ('post','khach-hang'));
return $query;
}
?>