<?php
/**
 * Template Name: Product detail template
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
	
	
	</aside>
	<div id="primary_product" class="content-area">
		<main id="main" class="site-main" role="main">	
			<?php
				//product_detail( 'san_pham', 'danh_muc_san_pham' );	
				$product_id = get_query_var( "c" , 0 );
				echo $product_id;
			?>
			
			<style>
.city {display:none;}
</style>
			
<ul class="w3-navbar w3-black">
  <li><a href="#" class="tablink" onclick="openCity(event, 'London');">London</a></li>
  <li><a href="#" class="tablink" onclick="openCity(event, 'Paris');">Paris</a></li>
  <li><a href="#" class="tablink" onclick="openCity(event, 'Tokyo');">Tokyo</a></li>
</ul>

<div id="London" class="w3-container w3-border city">
  <h2>London</h2>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="w3-container w3-border city">
  <h2>Paris</h2>
  <p>Paris is the capital of France.</p>
</div>

<div id="Tokyo" class="w3-container w3-border city">
  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
openCity(event, 'London');
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>
			
			
			
		</main><!-- #main -->
	</div><!-- #primary -->
	
	
	<!-- right column-->
	<?php
		echo getPartnersCustomersRightColumn();
	?>
	<!-- End right column-->
	
	<script type="text/javascript">
		<?php  $c = get_query_var( 'c', 1 );  ?>
		js_sidebar_product_detail_active(<?php echo (int) $c; ?>);
	</script>
<?php
get_footer();