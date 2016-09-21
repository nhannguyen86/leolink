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
				$product_id = get_query_var( "c" , 0 );
				
				if(get_option("WPLANG") == ""){
					$sp_term = get_post_custom_values('name_en', $product_id);
					$product_name = $sp_term[0];
					$sp_term = get_post_custom_values('content_en', $product_id);
					$desc = $sp_term[0];
					$sp_term = get_post_custom_values('characteristics_en', $product_id);
					$characteristics = $sp_term[0];
					$sp_term = get_post_custom_values('specification_en', $product_id);
					$specification = $sp_term[0];
				}else{
					$post_product = get_post($product_id);
					$product_name = $post_product->post_title;
					//description
					$desc = $post_product->post_content;
					$desc = apply_filters('the_content', $desc);
					$desc = str_replace(']]>', ']]&gt;', $desc);
					$sp_term = get_post_custom_values('characteristics_vn', $product_id);
					$characteristics = $sp_term[0];
					$sp_term = get_post_custom_values('specification_vn', $product_id);
					$specification = $sp_term[0];
				}
			?>
			
			<style>
.city {display:none;}
</style>
			
<ul class="w3-navbar w3-blue">
  <li><a href="#" id="GeneralInformationTablink" class="tablink" onclick="openCity(event, 'GeneralInformation');"><?php echo __("General information", "matata");?></a></li>
  <li><a href="#" id="CharacteristicsTablink" class="tablink" onclick="openCity(event, 'Characteristics');"><?php echo __("Characteristics", "matata");?></a></li>
  <li><a href="#" id="SpecificationTablink" class="tablink" onclick="openCity(event, 'Specification');"><?php echo __("Specification", "matata");?></a></li>
</ul>

<div id="GeneralInformation" class="w3-container w3-border city">
  <?php echo get_the_post_thumbnail( $product_id );?> </br>
  <span style="font-weight: bold;"><?php echo __("Product name: ", "matata");?></span><span style="font-style: italic; font-size: medium;"> <?php echo $product_name;?></span> </br>
  <?php echo $desc; ?>
</div>

<div id="Characteristics" class="w3-container w3-border city">
  <?php echo $characteristics; ?>
</div>

<div id="Specification" class="w3-container w3-border city">
  <?php echo $specification; ?>
</div>

<script>
openCity(event, 'GeneralInformation');
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
  jQuery("#"+cityName+"Tablink").addClass(' w3-red');
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