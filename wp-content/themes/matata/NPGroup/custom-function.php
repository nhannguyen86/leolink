<?php
// Them css va javascript vao giua the head
function sw_styles_and_scripts() {
		//wp_register_script('matata-googleapis-script', 'https://code.jquery.com/jquery-3.1.0.min.js');         
		wp_register_style('matata-googleapis-script', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js');
        wp_enqueue_script('matata-googleapis-script');
        wp_register_script('matata-bootstrapcdn-script', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
        wp_enqueue_script('matata-bootstrapcdn-script');
        wp_register_style('matata-bootstrapcdn-style', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
        wp_enqueue_style('matata-bootstrapcdn-style');
        wp_register_script('matata-NavTabsClick-script', get_template_directory_uri().'/NPGroup/NavTabsClick.js');
        wp_enqueue_script('matata-NavTabsClick-script');
        wp_register_script('matata-MenuProduct-script', get_template_directory_uri().'/NPGroup/MenuProduct.js');
        wp_enqueue_script('matata-MenuProduct-script');
        wp_register_script('matata-jqtip-script', get_template_directory_uri().'/NPGroup/jqtip/jqtip.js');
        wp_enqueue_script('matata-jqtip-script');
        wp_register_style('matata-jqtip-style', get_template_directory_uri().'/NPGroup/jqtip/jqtip.css');
        wp_enqueue_style('matata-jqtip-style');
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
function list_posts_by_taxonomy( $post_type, $taxonomy, $get_terms_args = array(), $wp_query_args = array() ){
	$sanphamshow = 2;
    foreach( get_terms( 'danh_muc_san_pham', array('parent' => '0') ) as $parent_term ) {
	  // display top level term name
	  echo '<a href="#">'. $parent_term->name .'</a>';
	  echo '<ul class="sub-menu sub-menu-lv-2">';
	  foreach( get_terms( 'danh_muc_san_pham', array( 'hide_empty' => false, 'parent' => $parent_term->term_id ) ) as $child_term ) {
		//display name of all childs of the parent term		
		echo '<li>';		
		echo '<a href="#">'. $child_term->name .'</a>';
		//for
		$query_args = array(
			'post_type' => $post_type,
			"$taxonomy" => $child_term->slug,
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'ignore_sticky_posts' => true
		);
		$query_args = wp_parse_args( $wp_query_args, $query_args );

		$my_query = new WP_Query( $query_args );
		$i = 0;
		if( $my_query->have_posts() ) { ?>
			<ul class="sub-menu sub-menu-lv-3 hidden">
			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<li class=""><a href="<?php the_permalink() ?>" id="menu-product-11" oldtitle="<?php the_title_attribute(); ?>" title=""><?php the_title(); ?></a></li>
				
			<?php 
			$i += 1;
			if ($i == $sanphamshow) {
				?>
				<li class="see-more"><a href="#">See more...</a></li>
			<?php
				break;
			}
			endwhile; ?>
			</ul>
			<?php
		}
		wp_reset_query();
		
		
		
		echo '</li>';
	  }
	  echo '</ul>';	
	}
	
	
			//<ul class="sub-menu sub-menu-lv-3 hidden">			
			//	<li class=""><a href="http://avco.vn/index.php/products/details/qgen-a30_11" id="menu-product-11" oldtitle="Chất trợ giặt" title="">Q-GEN A30</a></li>
			//	<li class=""><a href="http://avco.vn/index.php/products/details/qgen-d17_45" id="menu-product-45" oldtitle="Nước giặt công nghiệp" title="">Q-GEN D17</a></li>
			//	<li class=""><a href="http://avco.vn/index.php/products/details/qgen-b25_46" id="menu-product-46" oldtitle="Chất tẩy dạng lỏng gốc Oxy dùng cho đồ trắng" title="">Q-GEN B25</a></li>
			//	<li class=""><a href="http://avco.vn/index.php/products/details/qgen-n25_47" id="menu-product-47" oldtitle="Khử dư lượng Chlorine và Hydrogen Peroxide" title="">Q-GEN N25</a></li>
			//	<li class=""><a href="http://avco.vn/index.php/products/details/qblanc_70" id="menu-product-70" oldtitle="Xà phòng giặt dạng bột siêu sạch" title="">Q-BLANC</a></li>
			//	<li class=""><a href="http://avco.vn/index.php/products/details/qmagic_71" id="menu-product-71" class="more hidden" oldtitle="Nước giặt gia dụng" title="">Q-MAGIC</a></li>
			//	<li class=""><a href="http://avco.vn/index.php/products/details/qsofty_72" id="menu-product-72" class="more hidden" oldtitle="Nước xả vải hương ban mai" title="">Q-SOFTY</a></li>
			//	<li class="see-more"><a href="#">See more...</a></li>
			//</ul>
	
	
}

?>