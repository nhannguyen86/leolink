<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Matata
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<meta property="fb:app_id" content="1854287904790129" />
<meta property="fb:admins" content="Dw0IwOYewvP"/>
</head>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1854287904790129";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<body <?php body_class(); ?>>
<!-- Top menu -->
<nav class="primaryNavLinks">

	<div class="navTabs pageWidth">
		<ul class="publicTabs static-cloned-original">
			<!-- home -->
			<!-- extra tabs: home -->
				<li class="navTab articles selected no-icon has-icon-config firstVisible" data-icon-config="0">
					<a class="navLink" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="icon fa fa-h-square" title="<?php echo __('Home', 'matata'); ?>"></span><span class="icon-text"><?php echo __('Home', 'matata'); ?></span></a>
					<!--<a rel="Menu" class="SplitCtrl" href="http://www.leolink.com.vn/1st/"></a>
					<ul class="dropdown-menu">
						<li><a class="icon fa fa-h-square" href="< ? php echo esc_url( home_url( '/' ) ); ?>sample-page"> Hoạt động gần đây</a></li>
						<li><a href="#">Tác giả</a></li>
						<li class="divider"></li>
						<li><a href="#">vv...</a></li>
					</ul>-->
				</li>
			<!-- products -->
				<li class="navTab forums Popup PopupControl PopupClosed has-icon icon-show-text PopupContainerControl">
					<a class="navLink" href="<?php echo get_page_link(79);?>"><span class="icon fa fa-product-hunt" title="<?php echo __('Products', 'matata'); ?>"></span><span class="icon-text"><?php echo __('Products', 'matata'); ?></span></a>
					<!--<a rel="Menu" class="SplitCtrl" href="http://www.leolink.com.vn/community/"></a>
					<ul class="dropdown-menu">
						<li><a class="icon fa fa-h-square" href="#"> Tìm kiếm trên diễn đàn</a></li>
						<li class="divider"></li>
						<li><a href="#">vv...</a></li>
					</ul>-->
				</li>	
			<!-- responsive popup -->
			<li style="display: none;" class="navTab navigationHiddenTabs Popup PopupControl PopupClosed no-icon PopupContainerControl">								
				<a class="navLink NoPopupGadget" rel="Menu"><span class="menuIcon">Menu</span></a>	
			</li>
			<!-- no selection -->
		</ul>		
			<ul class="visitorTabs static-cloned-original">
				<li class="navTab login has-icon-config has-icon icon-show-text firstVisible lastVisible" data-icon-config="1">
					<label for="LoginControl">
						<a class="navLink OverlayTrigger" href="login/"><span style="" class="icon fa fa-sign-in" title="<?php echo __('Sign in', 'matata'); ?>"></span><span class="icon-text"><?php echo __('Sign in', 'matata'); ?></span></a>
					</label>
				</li>
			</ul>
		
	</div>
	
</nav>
<!-- End Top menu -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'matata' ); ?></a>
	
	<header id="masthead" class="site-header" role="banner">		
		<!--<div class="site-branding">

			< ?php if ( get_header_image() ) : ?>
			<a href="< ?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="< ?php header_image(); ?>" width="< ?php echo esc_attr( get_custom_header()->width ); ?>" height="< ?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
			</a>
			< ?php endif; // End header image check. ?>

			< ?php matata_the_custom_logo(); ?>

			< ?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="< ?php echo esc_url( home_url( '/' ) ); ?>" rel="home">< ?php bloginfo( 'name' ); ?></a></h1>
			< ?php else : ?>
				<p class="site-title"><a href="< ?php echo esc_url( home_url( '/' ) ); ?>" rel="home">< ?php bloginfo( 'name' ); ?></a></p>
			< ?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description">< ?php echo $description; /* WPCS: xss ok. */ ?></p>
			< ?php
			endif; ?>
		</div> .site-branding -->

		<!--site navigation. -->
		
		<!--languages, social, search. -->
		<div class="languagesocialsearch">
			<div class="s_search">
				<div class="box-search">
					
					<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" style="padding: 0;">
						<input name="s" >
						<button class="btnn" type="submit"></button>
					</form>
				</div>
			</div>
			<div class="icon_social">
				<a target="_blank" href="https://www.facebook.com/LeoLink-539131742943152/" class="vietnamese"><img src="http://localhost/leolink/wp-content/uploads/2016/09/facebook-icon.png"></a>
				<a target="_blank" href="https://twitter.com/LeoLink" class="vietnamese"><img src="http://localhost/leolink/wp-content/uploads/2016/09/twitter-icon.png"></a>
				<a target="_blank" href="#" class="vietnamese"><img src="http://localhost/leolink/wp-content/uploads/2016/09/googleplus-icon.png"></a>
			</div>
			<div class="s_lang">	
				 <a href="<?php echo add_query_arg( array( 
	  		'c' => "vi"
        ), "http://localhost/leolink/languages/"); ?>" class="vietnamese" style="width: 25px; float: left;">&nbsp;</a>
				<a href="<?php echo add_query_arg( array( 
	  		'c' => "en"
        ), "http://localhost/leolink/languages/"); ?>" class="english" style="width: 25px;float: right;">&nbsp;</a>
			</div>
		</div>
		<!--end languages, social, search. -->
		
		
		<div id="logo">
			<?php if ( get_header_image() ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
				</a>
			<?php endif;?><!--End header image check. -->
		</div>
		
		<div class="altTabs">
			<ul class="nav nav-pills">
				<li class="dropdown navTab active">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="dropdown-toggle navLink"><!--data-toggle="dropdown" -->
					<span class="icon fa fa-h-square" title="<?php echo __('Home', 'matata'); ?>"></span>
					<span class="icon-text"><?php echo __('Home', 'matata'); ?></span>
					<!--<b class="caret"></b>-->
					</a>
					<!--<ul class="dropdown-menu">
						<li><a class="icon fa fa-h-square" href="<?php echo esc_url( home_url( '/' ) ); ?>sample-page"> Hoạt động gần đây</a></li>
						<li><a href="#">Tác giả</a></li>
						<li class="divider"></li>
						<li><a href="#">vv...</a></li>
					</ul>-->
				</li>
				<li class="dropdown navTab">					
					<a href="<?php echo get_page_link(79);?>" class="dropdown-toggle navLink">
					<span class="icon fa fa-product-hunt" title="<?php echo __('Products', 'matata'); ?>"></span>
					<span class="icon-text"><?php echo __('Products', 'matata'); ?></span>
					</a>
				</li>
				<li class="dropdown navTab">					
					<a href="<?php echo get_page_link(79);?>" class="dropdown-toggle navLink">
					<span class="icon fa fa-sign-in" title="<?php echo __('Sign in', 'matata'); ?>"></span>
					<span class="icon-text"><?php echo __('Sign in', 'matata'); ?></span>
					</a>
				</li>
				<li class="dropdown navTab">					
					<a href="<?php echo get_page_link(79);?>" class="dropdown-toggle navLink">
					<span class="icon fa fa-sign-out" title="<?php echo __('Sign up', 'matata'); ?>"></span>
					<span class="icon-text"><?php echo __('Sign up', 'matata'); ?></span>
					</a>
				</li>
				<!--<li class="dropdown navTab">					
					<a href="http://www.leolink.com.vn/" class="dropdown-toggle navLink">
					<span class="icon fa fa-comments" title="Diễn đàn"></span>
					<span class="icon-text">Diễn đàn</span>
					<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a class="icon fa fa-h-square" href="#"> Tìm kiếm trên diễn đàn</a></li>
						<li class="divider"></li>
						<li><a href="#">vv...</a></li>
					</ul>
				</li>
				<li class="dropdown navTab">
					<a href="http://www.leolink.com.vn/" class="dropdown-toggle navLink">
					<span class="icon fa fa-shopping-cart" style="" title="Mua - Bán"></span>
					<span class="icon-text">Mua - Bán</span> 
					<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a class="icon fa fa-h-square" href="#"> Kinh doanh chuyên nghiệp</a></li>
						<li><a href="#">Máy tính - Laptops</a></li>
						<li class="divider"></li>
						<li><a href="#">Đồng hồ & Phụ kiện</a></li>
					</ul>
				</li>-->
			</ul>
		</div>
		
	</header><!-- #masthead -->
	
	<div id="content" class="site-content">
