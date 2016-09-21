<?php
/**
 * Template Name: List Product with all category template
 *
 * @package Matata
 */

get_header(); ?>
	<aside id="firstary_product" class="widget-area" role="complementary">
		<!-- Cay thu muc san pham-->
		<div id="sidebar">
			<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: auto;">
				<ul style="overflow: hidden; width: auto; height: auto;">
					<li>
						<a href="<?php echo get_home_url(); ?>">Trang chủ</a>
					</li>
					<li class="active">
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
	
	<!-- View san pham-->
	<div id="primary_product" class="content-area">
		<main id="main" class="site-main" role="main" style="padding: 10px;">
			<?php
				product_all_category( 'san_pham', 'danh_muc_san_pham' );			
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<!-- End view san pham-->
	
	<!-- right column-->
	<?php
		echo getPartnersCustomersRightColumn();
	?>
	<!-- End right column-->
<?php
get_footer();