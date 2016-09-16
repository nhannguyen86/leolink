<?php
/**
 * Template Name: List Product with one category parent template
 *
 * @package Matata
 */

get_header(); ?>
	<aside id="secondary_product" class="widget-area" role="complementary">
		
	
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
	
	
	</aside>
	<div id="primary_product" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php  //$page = get_query_var( 'page', 1 );  ?>
		<?php  $k = get_query_var( 'c', 1 );  ?>
<!--<h1>Currently Browsing Page <?php echo (int) $page; ?> On a static front page  <?php echo (int) $k; ?></h1>

		<select name="page-dropdown"
 onchange='document.location.href=this.options[this.selectedIndex].value;'> 
 <option value="">-->
<?php //echo esc_attr( __( 'Select page' ) ); ?></option> 
 <?php 
  //$pages = get_pages(); 
  //foreach ( $pages as $page ) {
  //	$option = '<option value="' . get_page_link( $page->ID ) . '">';
	///$option .= $page->post_title . ' ' . $page->post_name . ' ' . $page->ID;
	//$option .= '</option>';
	//echo $option;
  //}
 ?>
</select>

		</main><!-- #main -->
	</div><!-- #primary -->
<script type="text/javascript">
	js_sidebar_one_category_parent_active(<?php echo (int) $k; ?>);
</script>
<?php
get_footer();