<?php
/**
 * Template Name: List Product with all category template
 *
 * @package Matata
 */

get_header(); ?>
	<aside id="firstary_product" class="widget-area" role="complementary">
		
	
	<!-- <li>Cay thu muc san pham</li>-->
	<div id="sidebar">
		<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: auto;">
			<ul style="overflow: hidden; width: auto; height: auto;">
				<li>
					<a href="<?php echo get_home_url(); ?>">Trang chủ</a>
				</li>
				<li>
					<a href="<?php echo get_page_link(79);?>">Nhóm sản phẩm</a>
				</li>
				<li>
					<a href="#">Sản phẩm</a>
					<ul class="product-menu sub-menu sub-menu-lv-1 ">
						<li>
							<?php
								left_menu( 'san_pham', 'danh_muc_san_pham' );			
							?>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- <li>End cay thu muc san pham</li>-->
	
	</aside>
	
	
	
	<div id="primary_product" class="content-area">
		<main id="main" class="site-main" role="main" style="padding: 10px;">
		<?php  $page = get_query_var( 'page', 1 );  ?>
<!--<h1>Currently Browsing Page <?php echo (int) $page; ?> On a static front page</h1>

		<select name="page-dropdown"
 onchange='document.location.href=this.options[this.selectedIndex].value;'> 
 <option value="">-->
<?php //echo esc_attr( __( 'Select page' ) ); ?></option> 
 <?php 
  //$pages = get_pages(); 
  //foreach ( $pages as $page ) {
  //	$option = '<option value="' . get_page_link( $page->ID ) . '">';
	//$option .= $page->post_title . ' ' . $page->post_name . ' ' . $page->ID;
//	$option .= '</option>';
//	echo $option;
 // }
 ?>
</select>


<?php
	product_all_category( 'san_pham', 'danh_muc_san_pham' );			
?>

<!--
<section id="advps-slideshow1" class="widget widget_categories" style="margin-top: 1.5em;">
<h2 class="widget-title"><i class="fa fa-slideshare" aria-hidden="true"></i> QHEAVY</h2>





<section id="advps-slideshow1" class="widget widget_categories" style="display: block; overflow: hidden;">
	<h2 class="widget-title"><i class="fa fa-slideshare" aria-hidden="true"></i> Bếp</h2>
	<article id="post-23" class="matata-magazine post hentry" style="padding: 10px;border-top: 1px rgba(0, 0, 0, 0.1) solid;box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);background-color: #fff !important; ">
		<a href="http://localhost/leolink/2016/09/12/sai-gon-no-ro-mo-hinh-khong-gian-khoi-nghiep/" title="Sài Gòn nở rộ mô hình không gian khởi nghiệp">
			<img width="490" height="294" src="http://localhost/leolink/wp-content/uploads/2016/09/dreamplex1-1473648437_490x294.jpg" class="attachment-matata-featured size-matata-featured wp-post-image" alt="dreamplex1-1473648437_490x294" srcset="http://localhost/leolink/wp-content/uploads/2016/09/dreamplex1-1473648437_490x294.jpg 490w, http://localhost/leolink/wp-content/uploads/2016/09/dreamplex1-1473648437_490x294-300x180.jpg 300w" sizes="(max-width: 490px) 100vw, 490px">
		</a>	
		<header class="entry-header" style="padding: 5px 0px 0 3px;">
			<h2 class="entry-title">
				<a href="http://localhost/leolink/2016/09/12/sai-gon-no-ro-mo-hinh-khong-gian-khoi-nghiep/" rel="bookmark" style="font-weight: bold;">Sài Gòn nở rộ mô hình không gian khởi nghiệp</a>
			</h2>
		</header><!-- .entry-header --
	</article>
	<article id="post-23" class="matata-magazine post hentry" style="padding: 10px;border-top: 1px rgba(0, 0, 0, 0.1) solid;box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);background-color: #fff !important; ">
		<a href="http://localhost/leolink/2016/09/12/sai-gon-no-ro-mo-hinh-khong-gian-khoi-nghiep/" title="Sài Gòn nở rộ mô hình không gian khởi nghiệp">
			<img width="490" height="294" src="http://localhost/leolink/wp-content/uploads/2016/09/dreamplex1-1473648437_490x294.jpg" class="attachment-matata-featured size-matata-featured wp-post-image" alt="dreamplex1-1473648437_490x294" srcset="http://localhost/leolink/wp-content/uploads/2016/09/dreamplex1-1473648437_490x294.jpg 490w, http://localhost/leolink/wp-content/uploads/2016/09/dreamplex1-1473648437_490x294-300x180.jpg 300w" sizes="(max-width: 490px) 100vw, 490px">
		</a>	
		<header class="entry-header" style="padding: 5px 0px 0 3px;">
			<h2 class="entry-title">
				<a href="http://localhost/leolink/2016/09/12/sai-gon-no-ro-mo-hinh-khong-gian-khoi-nghiep/" rel="bookmark" style="font-weight: bold;">Sài Gòn nở rộ mô hình không gian khởi nghiệp</a>
			</h2>
		</header><!-- .entry-header --
	</article>
	<article id="post-23" class="matata-magazine post hentry" style="padding: 10px;border-top: 1px rgba(0, 0, 0, 0.1) solid;box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);background-color: #fff !important; ">
		<a href="http://localhost/leolink/2016/09/12/sai-gon-no-ro-mo-hinh-khong-gian-khoi-nghiep/" title="Sài Gòn nở rộ mô hình không gian khởi nghiệp">
			<img width="490" height="294" src="http://localhost/leolink/wp-content/uploads/2016/09/dreamplex1-1473648437_490x294.jpg" class="attachment-matata-featured size-matata-featured wp-post-image" alt="dreamplex1-1473648437_490x294" srcset="http://localhost/leolink/wp-content/uploads/2016/09/dreamplex1-1473648437_490x294.jpg 490w, http://localhost/leolink/wp-content/uploads/2016/09/dreamplex1-1473648437_490x294-300x180.jpg 300w" sizes="(max-width: 490px) 100vw, 490px">
		</a>	
		<header class="entry-header" style="padding: 5px 0px 0 3px;">
			<h2 class="entry-title">
				<a href="http://localhost/leolink/2016/09/12/sai-gon-no-ro-mo-hinh-khong-gian-khoi-nghiep/" rel="bookmark" style="font-weight: bold;">Sài Gòn nở rộ mô hình không gian khởi nghiệp</a>
			</h2>
		</header><!-- .entry-header --
	</article>
</section>



<section id="advps-slideshow2" class="widget widget_categories" style="display: block; overflow: hidden;">
<h2 class="widget-title"><i class="fa fa-slideshare" aria-hidden="true"></i> Giặt ủi</h2>
<article id="post-23" class="matata-magazine post-23 post type-post status-publish format-standard has-post-thumbnail hentry category-congnghecuocsong">

		<a href="http://localhost/leolink/2016/09/12/sai-gon-no-ro-mo-hinh-khong-gian-khoi-nghiep/" title="Sài Gòn nở rộ mô hình không gian khởi nghiệp"><img width="490" height="294" src="http://localhost/leolink/wp-content/uploads/2016/09/dreamplex1-1473648437_490x294.jpg" class="attachment-matata-featured size-matata-featured wp-post-image" alt="dreamplex1-1473648437_490x294" srcset="http://localhost/leolink/wp-content/uploads/2016/09/dreamplex1-1473648437_490x294.jpg 490w, http://localhost/leolink/wp-content/uploads/2016/09/dreamplex1-1473648437_490x294-300x180.jpg 300w" sizes="(max-width: 490px) 100vw, 490px"></a>
	
	<header class="entry-header">
		<h2 class="entry-title"><a href="http://localhost/leolink/2016/09/12/sai-gon-no-ro-mo-hinh-khong-gian-khoi-nghiep/" rel="bookmark">Sài Gòn nở rộ mô hình không gian khởi nghiệp</a></h2>		<div class="entry-meta">
			<span class="posted-on"><i class="fa fa-calendar-o"></i> <time class="entry-date published updated" datetime="2016-09-12T04:11:51+00:00">September 12, 2016</time></span> <span class="cat-links"><i class="fa fa-folder-o"></i> <a href="http://localhost/leolink/category/congnghecuocsong/" rel="category tag">Công nghệ &amp; Cuộc sống</a></span> <span class="comments-link"><i class="fa fa-comment-o"></i> <a href="http://localhost/leolink/2016/09/12/sai-gon-no-ro-mo-hinh-khong-gian-khoi-nghiep/#respond"><fb:comments-count xmlns="http://ogp.me/ns/fb#" href="http://localhost/leolink/2016/09/12/sai-gon-no-ro-mo-hinh-khong-gian-khoi-nghiep/" fb-xfbml-state="rendered" class=" fb_comments_count_zero"><span class="fb_comments_count">0</span></fb:comments-count> Comments</a></span>		</div><!-- .entry-meta --
			</header><!-- .entry-header --

	<div class="entry-content">
		<p>Nếu lúc trước, Bill Gates hay Steve Jobs khởi nghiệp trong nhà kho của gia đình thì ngày nay các bạn trẻ làm start-up</p>
		<a href="http://localhost/leolink/2016/09/12/sai-gon-no-ro-mo-hinh-khong-gian-khoi-nghiep/" class="more-link">Read More</a>
	</div><!-- .entry-content --

</article>
</section>

</section> -->


                 




		</main><!-- #main -->
	</div><!-- #primary -->

	
	<aside id="secondary_product" class="widget-area" role="complementary">
		<section id="advps-slideshow1" class="widget widget_categories">
		<h2 class="widget-title"><i class="fa fa-slideshare" aria-hidden="true"></i> Khách hàng</h2>
		<?php echo do_shortcode('[advps-slideshow optset="5"]');?>
		</section>
	</aside>
	<aside id="secondary_product" class="widget-area" role="complementary">
		<section id="advps-slideshow1" class="widget widget_categories">
		<h2 class="widget-title"><i class="fa fa-delicious" aria-hidden="true"></i> Đối tác</h2>
		<?php echo do_shortcode('[advps-slideshow optset="6"]');?>
		</section>
	</aside>
<?php
get_footer();