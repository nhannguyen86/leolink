<?php
/**
 * Template Name: Homepage with Slider
 *
 * @package Matata
 */

get_header(); ?>
	<div id="firstPrimary">
		<p class="sitebar_title">liên hệ</p>
        <div class="contact_main">
            <h3 class="name_comp">
            
            Công ty TNHH <span>LEO LINK</span>
            
            </h3>
<div class="c_l2">
                <p class="contact_add">Số 9/15 ấp 3, Xã Tân Quý Tây, <br>Huyện Bình Chánh, Thành phố Hồ Chí Minh </p>
                <p class="contact_phone"><i class="fa fa-phone" aria-hidden="true"></i> (08) 5407 3940</p>
                <p class="contact_fax"><i class="fa fa-fax" aria-hidden="true"></i> (08) 5407 3938</p>
                <p class="contact_mail"><i class="fa fa-envelope" aria-hidden="true"></i> info@camix.com.vn</p>
</div>
            </div>
            <div class="contact_main">
            <h3>Bộ phận dịch vụ</h3>
                <p class="supp c_l1">Tư vấn:</p>
<div class="c_l2">
                <p class="contact_phone"><i class="fa fa-phone" aria-hidden="true"></i> (08) 5407 3940 - Ext: 501</p>
                <p class="contact_fax"><i class="fa fa-fax" aria-hidden="true"></i> (08) 5407 3938 - Ext: 501</p>
                <p class="contact_cell"><i class="fa fa-mobile" aria-hidden="true"></i> Hotline: 0913 318 237</p>
                <p class="contact_mail"><i class="fa fa-envelope" aria-hidden="true"></i> consultancy@camix.com.vn</p>
                </div>
                <p class="supp c_l1">Chăm sóc khách hàng:</p>
<div class="c_l2">
                <p class="contact_phone"><i class="fa fa-phone" aria-hidden="true"></i> (08) 5407 3940 - Ext: 502</p>
                <p class="contact_fax"><i class="fa fa-fax" aria-hidden="true"></i> (08) 5407 3938 - Ext: 502</p>
                <p class="contact_cell"><i class="fa fa-mobile" aria-hidden="true"></i> Hotline: 0903 318 778 </p>
                <p class="contact_mail"><i class="fa fa-envelope" aria-hidden="true"></i> service@camix.com.vn</p>
</div>
            </div>
            <div class="contact_main menufacture">
            <h3>Xưởng chế tạo</h3>
                <div class="c_l2">
                <p class="contact_phone"><i class="fa fa-phone" aria-hidden="true"></i> (08) 5407 3940 - Ext: 503</p>
                <p class="contact_fax"><i class="fa fa-fax" aria-hidden="true"></i> (08) 5407 3938 - Ext: 503</p>
               <p class="contact_mail"><i class="fa fa-envelope" aria-hidden="true"></i> workshop@camix.com.vn</p>
</div>
            </div>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if (get_theme_mod('matata_home_slider', 0) == 1 && !is_paged()) { get_template_part( 'inc/home-slider' ); }?>

		<?php

		if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
		elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
		else { $paged = 1; }

		$the_query = new WP_Query('post_type=post&paged=' . $paged);

		if ( $the_query->have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( $the_query->have_posts() ) : $the_query->the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			?>

			<nav class="navigation posts-navigation" role="navigation">
				<h2 class="screen-reader-text">Posts navigation</h2>
				<div class="nav-links">
					<div class="nav-previous"><?php next_posts_link(__('&laquo; Older Entries', 'matata'), $the_query->max_num_pages); ?></div>
					<div class="nav-next"><?php previous_posts_link(__('Newer Entries &raquo;', 'matata')); ?></div>
				</div>
			</nav>

			<?php

			wp_reset_postdata();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/NPGroup/slick/slick.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/NPGroup/slick/slick-theme.css'; ?>">
	<style type="text/css">
	* {
      box-sizing: border-box;
    }

    .slider {
        width: 90%;
        margin: 10px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;    
	  border-radius: 7px !important;
	}
	.slick-slide img:hover {
	  border-radius: 7px !important;
	  border: 1px #87CEFA solid !important;
	}

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }
	</style>
	
	<section id="advps-slideshow-customer" class="widget widget_categories">
	<h2 class="widget-title"><i class="fa fa-slideshare" aria-hidden="true"></i> <?php echo __("Customers", "matata"); ?></h2> 
	<section class="regularc slider">
	<?php
		$wp_query_args = array();
		$query_args = array(
			'post_type' => 'khach_hang',
			'post_status' => 'publish',
			'posts_per_page' => '-1',
			'ignore_sticky_posts' => true,
			'paged' => '-1'
		);
		$query_args = wp_parse_args( $wp_query_args, $query_args );
		$my_query = new WP_Query( $query_args );	
		if( $my_query->have_posts() ) {
			while ($my_query->have_posts()) :	$my_query->the_post();
			?>
			<div>
			<a href="<?php echo get_post_meta($post->ID, 'link', true); ?>" style="display:inline-block;" id="my-tooltipc<?php echo the_ID(); ?>">
				<?php the_post_thumbnail('matata-featured'); ?>
			</a>
			</div>  	
		<?php 
		endwhile; 
		}
		wp_reset_query();
		?>
	</section>
	</section>
	
	<section id="advps-slideshow-partner" class="widget widget_categories">
	<h2 class="widget-title"><i class="fa fa-slideshare" aria-hidden="true"></i> <?php echo __("Partners", "matata"); ?></h2> 
	<section class="regularp slider">
	<?php
		$wp_query_args = array();
		$query_args = array(
			'post_type' => 'doi_tac',
			'post_status' => 'publish',
			'posts_per_page' => '-1',
			'ignore_sticky_posts' => true,
			'paged' => '-1'
		);
		$query_args = wp_parse_args( $wp_query_args, $query_args );
		$my_query = new WP_Query( $query_args );		
	
		if( $my_query->have_posts() ) { 
			while ($my_query->have_posts()) : $my_query->the_post();?>
	
		<div>
			<a href="<?php echo get_post_meta($post->ID, 'link', true); ?>" style="display:inline-block;" id="my-tooltipp<?php echo the_ID(); ?>">
				<?php the_post_thumbnail('matata-featured'); ?>
			</a>
		</div>  	
	<?php 
		endwhile; 
	}
	wp_reset_query();
	?>
	</section>
	</section>
	
	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri().'/NPGroup/slick/slick.js'; ?>" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
	$(document).on('ready', function() {
	  $(".regularc").slick({
		dots: false,
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 5,
		autoplay: true,
		autoplaySpeed: 2000,
		speed: 1500
	  });
	  $(".regularp").slick({
		dots: false,
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 5,
		autoplay: true,
		autoplaySpeed: 2000,
		speed: 1500
	  });
	});
	</script>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/NPGroup/hovercard/tooltipster.css'; ?>" type="text/css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/NPGroup/hovercard/hc.css'; ?>" type="text/css" />


	<!-- loading js at bottom for faster page load -->
	<script src="<?php echo get_template_directory_uri().'/NPGroup/hovercard/jquery.tooltipster.js'; ?>" type="text/javascript"></script>
	 <script type="text/javascript">
		$(function() {
				<?php
					$wp_query_args = array();
					$query_args = array(
						'post_type' => 'khach_hang',
						'post_status' => 'publish',
						'posts_per_page' => '-1',
						'ignore_sticky_posts' => true,
						'paged' => '-1'
					);
					$query_args = wp_parse_args( $wp_query_args, $query_args );
					$my_query = new WP_Query( $query_args );		
			
					if( $my_query->have_posts() ) { 
						while ($my_query->have_posts()) : $my_query->the_post();
						
						?>
						
						<?php 
							  $address = "";
							  if (get_option("WPLANG") == "") {
								$address = get_post_meta($post->ID, 'address_en', true);
							  }elseif(get_option("WPLANG") == "vi") {
								$address = get_post_meta($post->ID, 'address_vi', true);
							  }	
							  $website = get_post_meta($post->ID, 'link', true);
							  $facebook = get_post_meta($post->ID, 'facebook', true);
						?> 
					$('#my-tooltipc<?php echo the_ID(); ?>').tooltipster({
						interactive: true,
						content: 'Loading...',
						contentCloning: false,
						contentAsHTML: true,
						animation: 'fade',
						functionBefore: function(origin, continueTooltip) {
							continueTooltip();
							origin.tooltipster('content', '<div class="hovercard"> <div> <div class="display-pic"> <div class="cover-photo"> <div class="display-pic-gradient"></div><img src="http://localhost/leolink/wp-content/themes/matata/NPGroup/hovercard/dp.jpg"> </div><div class="profile-pic"> <div class="pic"> <?php the_post_thumbnail('matata-featured'); ?> </div><div class="details"> <ul class="details-list"> <li class="details-list-item"> <p> <span class="glyph glyph-home"></span> <span> <?php echo $address; ?> </span> </p></li></ul> </div></div></div><div class="display-pic-gradient"></div><div class="title-container"> <a class="title" href="#" title="Visit Page"> <?php the_title(); ?> </a> <p class="other-info"></p></div><div class="info"> <div class="info-inner"> <div class="interactions"> <a href="<?php echo $website; ?>" class="btn" target="_blank" >Website</a> <a href="<?php echo $facebook; ?>" class="btn" target="_blank" >Facebook</a> </div></div></div></div></div>');
						}
					});  	
				<?php 
					endwhile; 
				}
				wp_reset_query();
				?>
				
				
				
				<?php
					$wp_query_args = array();
					$query_args = array(
						'post_type' => 'doi_tac',
						'post_status' => 'publish',
						'posts_per_page' => '-1',
						'ignore_sticky_posts' => true,
						'paged' => '-1'
					);
					$query_args = wp_parse_args( $wp_query_args, $query_args );
					$my_query = new WP_Query( $query_args );		
			
					if( $my_query->have_posts() ) { 
						while ($my_query->have_posts()) : $my_query->the_post();
						
						?>
						
						<?php 
							  $address = "";
							  if (get_option("WPLANG") == "") {
								$address = get_post_meta($post->ID, 'address_en', true);
							  }elseif(get_option("WPLANG") == "vi") {
								$address = get_post_meta($post->ID, 'address_vi', true);
							  }	
							  $website = get_post_meta($post->ID, 'link', true);
							  $facebook = get_post_meta($post->ID, 'facebook', true);
						?> 
					$('#my-tooltipp<?php echo the_ID(); ?>').tooltipster({
						interactive: true,
						content: 'Loading...',
						contentCloning: false,
						contentAsHTML: true,
						animation: 'fade',
						functionBefore: function(origin, continueTooltip) {
							continueTooltip();
							origin.tooltipster('content', '<div class="hovercard"> <div> <div class="display-pic"> <div class="cover-photo"> <div class="display-pic-gradient"></div><img src="http://localhost/leolink/wp-content/themes/matata/NPGroup/hovercard/dp.jpg"> </div><div class="profile-pic"> <div class="pic"> <?php the_post_thumbnail('matata-featured'); ?> </div><div class="details"> <ul class="details-list"> <li class="details-list-item"> <p> <span class="glyph glyph-home"></span> <span> <?php echo $address; ?> </span> </p></li></ul> </div></div></div><div class="display-pic-gradient"></div><div class="title-container"> <a class="title" href="#" title="Visit Page"> <?php the_title(); ?> </a> <p class="other-info"></p></div><div class="info"> <div class="info-inner"> <div class="interactions"> <a href="<?php echo $website; ?>" class="btn" target="_blank" >Website</a> <a href="<?php echo $facebook; ?>" class="btn" target="_blank" >Facebook</a> </div></div></div></div></div>');
						}
					});  	
				<?php 
					endwhile; 
				}
				wp_reset_query();
				?>
		});
	</script>
	
	</div><!-- #primary -->
<?php
matata_sidebar_select();
get_footer();
