<?php
/**
 * Template Name: Redirect page
 *
 * @package Matata
 */

get_header(); ?>

<?php
	$c = get_query_var( "c" , 1 );
	if($c == "vi" || $c == "en"){
		if($c == "en"){
			$c = "";
		}
		update_option("WPLANG", $c);
	}
	
	if(wp_get_referer()){
		$urlReturn = esc_url(wp_get_referer());
	}else{
		$urlReturn = esc_url(get_home_url());
	}
	wp_safe_redirect($urlReturn);
?>