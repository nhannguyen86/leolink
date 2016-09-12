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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'matata' ); ?></a>
	
	<!-- Top menu -->
	<nav class="primaryNavLinks withoutSecondaryLinks">

		<div class="navTabs">
			<ul class="publicTabs static-cloned-original">
				<!-- home -->
				<!-- extra tabs: home -->
					<li class="navTab articles selected no-icon has-icon-config firstVisible" data-icon-config="0">
						<a class="navLink" href="">Trang nhất</a>
						<a rel="Menu" class="SplitCtrl" href="http://www.handheld.com.vn/1st/"></a>
					</li>
				<!-- forums -->
					<li class="navTab forums Popup PopupControl PopupClosed has-icon icon-show-text PopupContainerControl">
						<a class="navLink" href="http://www.handheld.com.vn/community/"><span class="icon glyphicons glyphicons-conversation" title="Diễn đàn"></span><span class="icon-text">Diễn đàn</span></a>
						<a rel="Menu" class="SplitCtrl" href="http://www.handheld.com.vn/community/"></a>
					</li>
				<!-- extra tabs: middle -->
					<li class="navTab nodetab57 Popup PopupControl PopupClosed has-icon icon-show-text PopupContainerControl">
						<a class="navLink" href="http://www.handheld.com.vn/mua-ban/"><span class="icon fa fa-shopping-cart" title="Mua - Bán"></span><span class="icon-text">Mua - Bán</span></a>
						<a rel="Menu" class="SplitCtrl" href="http://www.handheld.com.vn/mua-ban/"></a>
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
							<a class="navLink OverlayTrigger" href="login/"><span style="" class="icon fa fa-key" title="Đăng nhập hoặc Đăng ký"></span><span class="icon-text">Đăng nhập hoặc Đăng ký</span></a>
						</label>
					</li>
				</ul>
			
		</div>
		
	</nav>
	<!-- End Top menu -->
		
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

		<!--<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-list-ul fa-2x"></i></button>
			< ? php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav> #site-navigation -->
		
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
					<a href="http://www.leolink.com.vn/" class="dropdown-toggle navLink"><!--data-toggle="dropdown" -->
					<span class="icon fa fa-h-square" title="Trang nhất"></span>
					<span class="icon-text">Trang nhất</span>
					<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a class="icon fa fa-h-square" href="<?php echo esc_url( home_url( '/' ) ); ?>sample-page"> Hoạt động gần đây</a></li>
						<li><a href="#">Tác giả</a></li>
						<li class="divider"></li>
						<li><a href="#">vv...</a></li>
					</ul>
				</li>
				<li class="dropdown navTab">					
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
				</li>
			</ul>
		</div>
		
	</header><!-- #masthead -->
	
	<div id="content" class="site-content">
