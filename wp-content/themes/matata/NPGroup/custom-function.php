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
add_filter('query_vars', 'my_register_query_vars' );
function my_register_query_vars( $qvars ){
    //Add query variable to $qvars array
    $qvars[] = 'c';
    return $qvars;
}

function left_menu( $post_type, $taxonomy, $get_terms_args = array(), $wp_query_args = array() ){
	$sanphamshow = 2;
	$linkOneCategoryParent = get_page_link(113);
	$linkOneCategory = get_page_link(108);
	$linkProductDetail = get_page_link(111);
    foreach( get_terms( 'danh_muc_san_pham', array('parent' => '0') ) as $parent_term ) {
    	// The $term is an object, so we don't need to specify the $taxonomy.
		$parent_term_link = get_term_link( $parent_term );
		
		// If there was an error, continue to the next term.
		if ( is_wp_error( $parent_term_link ) ) {
			continue;
		}
		// display top level term name
	  	echo '<a id="category-parent-'.$parent_term->term_id.'" href="' . add_query_arg( array( 
	  		'c' => $parent_term->term_id
        ), $linkOneCategoryParent) . '">'. $parent_term->name .'</a>';
        echo '<ul class="sub-menu sub-menu-lv-2">';
        foreach( get_terms( 'danh_muc_san_pham', array( 'hide_empty' => false, 'parent' => $parent_term->term_id ) ) as $child_term ) {
        	//display name of all childs of the parent term		
        	echo '<li>';		
        	echo '<a id="category-'.$child_term->term_id.'" href="' . add_query_arg( array( 
        		'c' => $child_term->term_id
			), $linkOneCategory) . '">'. $child_term->name .'</a>';
			
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
				<?php while ($my_query->have_posts()) : $my_query->the_post();?>				
					<li class=""><a href="<?php echo $linkProductDetail."?c="; ?><?php echo the_ID(); ?>" id="product-<?php the_ID(); ?>" oldtitle="<?php the_title_attribute(); ?>" title=""><?php the_title(); ?></a></li>
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
}



function product_all_category( $post_type, $taxonomy, $get_terms_args = array(), $wp_query_args = array() ){
	$linkOneCategoryParent = get_page_link(113);
	$linkOneCategory = get_page_link(108);
	$linkProductDetail = get_page_link(111);
    foreach( get_terms( 'danh_muc_san_pham', array('parent' => '0') ) as $parent_term ) {
    	// The $term is an object, so we don't need to specify the $taxonomy.
		$parent_term_link = get_term_link( $parent_term );
		
		// If there was an error, continue to the next term.
		if ( is_wp_error( $parent_term_link ) ) {
			continue;
		}
		// display top level term name
		echo '<section id="advps-slideshow1" class="widget widget_categories" style="margin-top: 1.5em;">';
		echo '<h2 class="widget-title"><i class="fa fa-slideshare" aria-hidden="true"></i> ' . $parent_term->name . '</h2>';
	  	
        foreach( get_terms( 'danh_muc_san_pham', array( 'hide_empty' => false, 'parent' => $parent_term->term_id ) ) as $child_term ) {
        	echo '<section id="advps-slideshow1" class="widget widget_categories" style="display: block; overflow: hidden;">';
        	echo '<h2 class="widget-title"><i class="fa fa-slideshare" aria-hidden="true"></i> ' . $child_term->name . '</h2>';
        	
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
			
			if( $my_query->have_posts() ) { ?>
				<?php while ($my_query->have_posts()) : $my_query->the_post();?>
				<article id="post-23" class="matata-magazine post hentry" style="padding: 10px;border-top: 1px rgba(0, 0, 0, 0.1) solid;box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);background-color: #fff !important; ">
					<?php if ( has_post_thumbnail() ) { ?>		
						<a href="<?php echo $linkProductDetail."?c="; ?><?php echo the_ID(); ?>" title="Sài Gòn nở rộ mô hình không gian khởi nghiệp">
						<?php the_post_thumbnail('matata-featured'); ?>
					</a>	
					<?php } ?>
					<header class="entry-header" style="padding: 5px 0px 0 3px;">
						<h2 class="entry-title">
							<a href="<?php echo $linkProductDetail."?c="; ?><?php echo the_ID(); ?>" rel="bookmark" style="font-weight: bold;"><?php the_title(); ?></a>
						</h2>
					</header><!-- .entry-header -->
				</article>
				<?php 
				endwhile; ?>
				<?php
			}
			wp_reset_query();
			
			echo '</section>';
		}
		echo '</section>';	
	}
}

?>