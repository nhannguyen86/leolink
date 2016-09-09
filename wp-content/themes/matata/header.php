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
</head>

<body <?php body_class(); ?>>
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
						<li><a class="icon fa fa-h-square" href="#"> Hoạt động gần đây</a></li>
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


		<div class="altTabs">
			<ul class="altTabsContainer static-cloned-copies">
	
				<!-- home -->
				<!-- extra tabs: home -->
				<li class="navTab articles selected has-icon icon-show-text firstVisible">			
					<a href="http://www.leolink.com.vn/1st/" class="navLink"><span class="icon fa fa-h-square" style="" title="Trang nhất"></span><span class="icon-text">Trang nhất</span></a>
					<a href="http://www.leolink.com.vn/1st/" class="SplitCtrl" rel="Menu"></a>
				</li>
				<!-- forums -->		
				<li class="navTab forums Popup PopupControl PopupClosed has-icon icon-show-text PopupContainerControl">
					<a href="http://www.leolink.com.vn/community/" class="navLink"><span class="icon fa fa-comments" style="font-size:1.2em;top:3px;" title="Diễn đàn"></span><span class="icon-text">Diễn đàn</span></a>
					<a href="http://www.leolink.com.vn/community/" class="SplitCtrl" rel="Menu"></a>
				</li>
				<!-- extra tabs: middle -->
				<li class="navTab nodetab57 Popup PopupControl PopupClosed has-icon icon-show-text PopupContainerControl">
					<a href="http://www.leolink.com.vn/mua-ban/" class="navLink"><span class="icon fa fa-shopping-cart" style="" title="Mua - Bán"></span><span class="icon-text">Mua - Bán</span></a>
					<a href="http://www.leolink.com.vn/mua-ban/" class="SplitCtrl" rel="Menu"></a>
				</li>
				<li class="navTab nodetab156 Popup PopupControl PopupClosed has-icon icon-show-text PopupContainerControl">
					<a href="http://www.leolink.com.vn/dau-gia/" class="navLink"><span class="icon fa fa-legal" style="" title="Đấu giá"></span><span class="icon-text">Đấu giá</span></a>
					<a href="http://www.leolink.com.vn/dau-gia/" class="SplitCtrl" rel="Menu"></a>
				</li>
				<li class="navTab xengallery Popup PopupControl PopupClosed has-icon icon-show-text PopupContainerControl">
					<a href="http://www.leolink.com.vn/media/" class="navLink"><span class="icon fa fa-photo" style="" title="Media"></span><span class="icon-text">Media</span></a>
					<a href="http://www.leolink.com.vn/media/" class="SplitCtrl" rel="Menu"></a>
				</li>
				<li class="navTab resources Popup PopupControl PopupClosed has-icon icon-show-text PopupContainerControl">
					<a href="http://www.leolink.com.vn/resources/" class="navLink"><span class="icon fa fa-cloud-download" style="font-size:1.1em;top:1px;" title="Tài nguyên"></span><span class="icon-text">Tài nguyên</span></a>
					<a href="http://www.leolink.com.vn/resources/" class="SplitCtrl" rel="Menu"></a>
				</li>
				<li class="navTab calendar Popup PopupControl PopupClosed has-icon icon-show-text PopupContainerControl">
					<a href="http://www.leolink.com.vn/calendar/" class="navLink"><span class="icon fa fa-calendar" style="" title="Sự kiện"></span><span class="icon-text">Sự kiện</span></a>
					<a href="http://www.leolink.com.vn/calendar/" class="SplitCtrl" rel="Menu"></a>
				</li>
				<!-- members -->
				<!-- what's new? -->
				<li class="navTab whatnew Popup PopupControl PopupClosed has-icon icon-show-text PopupContainerControl"><a href="find-new/threads" class="navLink"><span class="icon fa fa-newspaper-o" style="" title="Có gì mới?"></span><span class="icon-text">Có gì mới?</span></a>
					<a href="" class="SplitCtrl" rel="Menu"></a>
				</li>
				<li class="navTab rules Popup PopupControl PopupClosed has-icon icon-show-text PopupContainerControl lastVisible"><a href="pages/noi-quy/" class="navLink"><span class="icon fa fa-balance-scale" style="" title="Nội quy"></span><span class="icon-text">Nội quy</span></a>
					<a href="pages/noi-quy/" class="SplitCtrl" rel="Menu"></a>
				</li>
				<!-- extra tabs: end -->
				<!-- responsive popup -->
				<!-- no selection -->
				<li class="navigationHiddenTabs navTab Popup PopupControl PopupClosed PopupContainerControl" style="display: none;">
					<a rel="Menu" class="navLink NoPopupGadget"><span class="menuIcon">...</span></a>
				</li>
			</ul>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
