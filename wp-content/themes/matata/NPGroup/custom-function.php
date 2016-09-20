<?php
// Them css va javascript vao giua the head
function sw_styles_and_scripts() {
		//wp_register_script('matata-googleapis-script', 'https://code.jquery.com/jquery-3.1.0.min.js');         
		wp_register_script('matata-googleapis-script', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js');
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
	global $my_page_array;
	if (! $my_page_array){
	$my_page_array = array();}
    foreach( get_terms( 'danh_muc_san_pham', array('parent' => '0') ) as $parent_term ) {
		// display top level term name
		echo '<section id="advps-slideshow1" class="widget widget_categories" style="margin-top: 1.5em;">';
		echo '<h2 class="widget-title"><i class="fa fa-slideshare" aria-hidden="true"></i> ' . $parent_term->name . '</h2>';
	  	
        foreach( get_terms( 'danh_muc_san_pham', array( 'hide_empty' => false, 'parent' => $parent_term->term_id ) ) as $child_term ) {
        	$page = get_query_var( $child_term->term_id , 1 );
    
        	$my_page_array[$child_term->term_id] = $page;
        	//var_dump($my_page_array);
    //echo '---------------------------------------------------------------------------------';
        	//if (array_key_exists($child_term->term_id, $my_page_array)){
			//	$my_page_array["key"] = "value";
			//}else{
			//	echo "Key does not exist!";
			//}
        	echo '<section id="advps-slideshow1" class="widget widget_categories" style="display: block; overflow: hidden;">';
        	echo '<h2 class="widget-title"><i class="fa fa-slideshare" aria-hidden="true"></i> ' . $child_term->name . '</h2>';
        	
        	//for
        	$query_args = array(
				'post_type' => $post_type,
				"$taxonomy" => $child_term->slug,
				'post_status' => 'publish',
				'posts_per_page' => 2,
				'ignore_sticky_posts' => true,
				'paged' => $page
			);
			$query_args = wp_parse_args( $wp_query_args, $query_args );
			global $my_query;
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
			echo '</br>';
			echo page_nav($child_term->term_id, $my_page_array);
			wp_reset_query();
			
			echo '</section>';
		}
		echo '</section>';	
	}
}

function page_nav($child_term_id, $my_page_array) {
        	//var_dump($my_page_array);
    //echo '=========================================================';
	$linkAllCategory = get_page_link(79);
	//if( is_singular() )
	//	return;
	$linkPageOther = '?';
	//var_dump($my_page_array);
	foreach ($my_page_array as $key => $value){
		if ($key == $child_term_id){
			$page = $value;
		}
		$linkPageOther .= $key . '=' . $value . '&';
	}
	$linkPageOther = substr($linkPageOther, 0, -1);
	//echo $linkPageOther;
	$linkAllCategory .= $linkPageOther;
	global $my_query;
	/** Stop execution if there's only 1 page */
	if( $my_query->max_num_pages <= 1 )
		return;
	
	$paged = $page ? absint( $page ) : 1;
	$max   = intval( $my_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}
//var_dump($paged);
//echo 'ooooo ';
//var_dump($links);
	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';
		$linkAllCategory = get_page_link(79);
		foreach ($my_page_array as $key => $value){
			if ($key == $child_term_id){
				$my_page_array[$key] = '1';
				$linkPageOther .= $key . '=1&';
			}else{
				$linkPageOther .= $key . '=' . $value . '&';
			}
		}
		$linkPageOther = substr($linkPageOther, 0, -1);
		$linkAllCategory .= $linkPageOther;
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, $linkAllCategory , '1' );//esc_url( get_pagenum_link( 1 ) )

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
//var_dump($links);
//			echo 'my_page_array </br> ';
//var_dump($my_page_array);
//links: 1, 2, 3
//my_page_array: 9
	foreach ( (array) $links as $link ) {
		$linkAllCategory = get_page_link(79);
		$my_page_array_temp = $my_page_array;
		foreach ($my_page_array as $key => $value){
			//echo 'kkkxxx '.$link.' jjj </br> ';
			//echo 'value '.$value.' jjj </br> ';
			if ($key == $child_term_id){
				$my_page_array_temp[$key] = $link;
				$linkPageOther .= $key . '=' . $link . '&';
			}else{
				$linkPageOther .= $key . '=' . $value . '&';
			}
		}
		$my_page_array = $my_page_array_temp;
		$linkPageOther = substr($linkPageOther, 0, -1);
		//echo 'bbbb '.$linkPageOther.' nnnn </br> ';
		$linkAllCategory .= $linkPageOther;
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, $linkAllCategory, $link ); //esc_url( get_pagenum_link( $link ) )
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		foreach ($my_page_array as $key => $value){
			if ($key == $child_term_id){
				$my_page_array[$key] = $max;
				$linkPageOther .= $key . '=' . $max . '&';
			}else{
				$linkPageOther .= $key . '=' . $value . '&';
			}
		}
		$linkPageOther = substr($linkPageOther, 0, -1);
		$linkAllCategory .= $linkPageOther;
		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, $linkAllCategory, $max );//esc_url( get_pagenum_link( $max ) )
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}

function product_one_category( $post_type, $taxonomy, $get_terms_args = array(), $wp_query_args = array() ){
	$linkOneCategoryParent = get_page_link(113);
	$linkOneCategory = get_page_link(108);
	$linkProductDetail = get_page_link(111);
	$page = get_query_var( 'paged' , 1 );
    foreach( get_terms( 'danh_muc_san_pham', array('parent' => '0') ) as $parent_term ) {
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
				'posts_per_page' => 2,
				'ignore_sticky_posts' => true,
				'paged' => $page
			);
			$query_args = wp_parse_args( $wp_query_args, $query_args );
			global $my_query;
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
			echo '</br>';
			echo one_category_page_nav();
			wp_reset_query();
			
			echo '</section>';
		}
		echo '</section>';	
	}
}

function one_category_page_nav() {

	//if( is_singular() )
	//	return;

	global $my_query;
	/** Stop execution if there's only 1 page */
	if( $my_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $my_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}
//var_dump($paged);
//var_dump($links);
	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
//var_dump($links);
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}

function change_to_vi() {
		$language = update_option("WPLANG", "vi");
		//get_option( 'WPLANG' );
		//var_dump($language);
		//if ( $language ) {
		//	load_default_textdomain( $language );
		//} else {
		//	unload_textdomain( 'default' );
		//}
}

?>




