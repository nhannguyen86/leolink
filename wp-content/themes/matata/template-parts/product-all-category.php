<?php
/**
 * Template Name: List Product with all category template
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
								list_posts_by_taxonomy( 'san_pham', 'danh_muc_san_pham' );			
							?>
							<a href="#">QSPEC</a>
							<ul class="sub-menu sub-menu-lv-2">
								<li>
							<a href="#">Giặt ủi</a>
							<ul class="sub-menu sub-menu-lv-3 hidden">			
																																		<li class=""><a href="http://avco.vn/index.php/products/details/qgen-a30_11" id="menu-product-11" oldtitle="Chất trợ giặt" title="">Q-GEN A30</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qgen-d17_45" id="menu-product-45" oldtitle="Nước giặt công nghiệp" title="">Q-GEN D17</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qgen-b25_46" id="menu-product-46" oldtitle="Chất tẩy dạng lỏng gốc Oxy dùng cho đồ trắng" title="">Q-GEN B25</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qgen-n25_47" id="menu-product-47" oldtitle="Khử dư lượng Chlorine và Hydrogen Peroxide" title="">Q-GEN N25</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qblanc_70" id="menu-product-70" oldtitle="Xà phòng giặt dạng bột siêu sạch" title="">Q-BLANC</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qmagic_71" id="menu-product-71" class="more hidden" oldtitle="Nước giặt gia dụng" title="">Q-MAGIC</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qsofty_72" id="menu-product-72" class="more hidden" oldtitle="Nước xả vải hương ban mai" title="">Q-SOFTY</a></li>
																									<li class="see-more"><a href="#">See more...</a></li>
															</ul>
						</li>
											<li>
							<a href="#">Bếp</a>
							<ul class="sub-menu sub-menu-lv-3 hidden">			
																																		<li class=""><a href="http://avco.vn/index.php/products/details/qoven_79" id="menu-product-79" oldtitle="Tẩy dầu mỡ bếp ăn" title="">Q-OVEN</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qdish-on_80" id="menu-product-80" oldtitle="Nước rửa chén đậm đặc - cho máy rửa chén" title="">Q-DISH ON</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qrinse_81" id="menu-product-81" oldtitle="Chất tráng khô - cho máy rửa chén" title="">Q-RINSE</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qkitchen_82" id="menu-product-82" oldtitle="Vệ sinh và khử trùng sàn bếp" title="">Q-KITCHEN</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qcerami_83" id="menu-product-83" oldtitle="Nước rửa chén" title="">Q-CERAMI</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qbbq_84" id="menu-product-84" class="more hidden" oldtitle="Siêu tẩy cặn carbon cháy, vết bẩn cứng đầu" title="">Q-BBQ</a></li>
																									<li class="see-more"><a href="#">See more...</a></li>
															</ul>
						</li>
											<li>
							<a href="#">Vệ sinh bề mặt</a>
							<ul class="sub-menu sub-menu-lv-3 hidden">			
																																		<li class=""><a href="http://avco.vn/index.php/products/details/qfloor_73" id="menu-product-73" oldtitle="Nước vệ sinh sàn nhà" title="">Q-FLOOR</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qvani_74" id="menu-product-74" oldtitle="Nước vệ sinh và làm bóng gỗ" title="">Q-VANI</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qglaze_75" id="menu-product-75" oldtitle="Nước lau kính" title="">Q-GLAZE</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qcarpet_76" id="menu-product-76" oldtitle="Nước giặt thảm " title="">Q-CARPET</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qeffect_77" id="menu-product-77" oldtitle="Tẩy rửa đa năng đá hoa cương và cẩm thạch" title="">Q-EFFECT</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/q--nox_78" id="menu-product-78" class="more hidden" oldtitle="Đánh bóng làm mới inox" title="">Q - NOX</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qgloss_128" id="menu-product-128" class="more hidden" oldtitle="Chất phủ bóng sàn" title="">Q-GLOSS</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qcar-clean_98" id="menu-product-98" class="more hidden" oldtitle="Tẩy rửa xe hơi" title="">Q-CAR CLEAN</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qsafesani_97" id="menu-product-97" class="more hidden" oldtitle="Kem vệ sinh, xát trùng và khử mùi cho sứ vệ sinh" title="">Q-SAFESANI</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qcream-clean_96" id="menu-product-96" class="more hidden" oldtitle="Tẩy vết mờ xỉn cho inox, đồng, bạc và thủy tinh plexi" title="">Q-CREAM CLEAN</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qrust-remove_95" id="menu-product-95" class="more hidden" oldtitle="Tẩy gỉ cho sàn và thảm" title="">Q-RUST REMOVE</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qmoket_94" id="menu-product-94" class="more hidden" oldtitle="Vệ sinh tẩy điểm cho thảm" title="">Q-MOKET</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qcrystal_93" id="menu-product-93" class="more hidden" oldtitle="Đánh bóng sàn hoa cương" title="">Q-CRYSTAL</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qfloor-cond_92" id="menu-product-92" class="more hidden" oldtitle="Phủ sàn hoa cương trước khi đánh bóng" title="">Q-FLOOR COND</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qrefinish_91" id="menu-product-91" class="more hidden" oldtitle="Tẩy bóc lớp wax &amp; sealer cho sàn" title="">Q-REFINISH</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qfortex_90" id="menu-product-90" class="more hidden" oldtitle="Vệ sinh vết bẩn cứng đầu cho sàn" title="">Q-FORTEX</a></li>
																									<li class="see-more"><a href="#">See more...</a></li>
															</ul>
						</li>
											<li>
							<a href="#">Khử trùng</a>
							<ul class="sub-menu sub-menu-lv-3 hidden">			
																																		<li class=""><a href="http://avco.vn/index.php/products/details/qspirit_85" id="menu-product-85" oldtitle="Nước hoa xịt phòng" title="">Q-SPIRIT</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qsani_86" id="menu-product-86" oldtitle="Vệ sinh khử trùng toilet" title="">Q-SANI</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qbact_87" id="menu-product-87" oldtitle="Khử trùng sàn và bề mặt" title="">Q-BACT</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qhand-gel_88" id="menu-product-88" oldtitle="Gel rửa tay diệt khuẩn không dùng nước" title="">Q-HAND GEL</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qsense_89" id="menu-product-89" oldtitle="Nước rửa tay diệt khuẩn hương thảo mộc" title="">Q-SENSE</a></li>
																							</ul>
						</li>
									</ul>
			</li>
					<li>
				<a href="#">QHEAVY</a>
				<ul class="sub-menu sub-menu-lv-2">
											<li>
							<a href="#">Tẩy dầu nhớt</a>
							<ul class="sub-menu sub-menu-lv-3 hidden">			
																																		<li class=""><a href="http://avco.vn/index.php/products/details/deg-n812_3" id="menu-product-3" oldtitle="Tẩy nhớt công nghiệp đa năng" title="">DEG N-812</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/deg-a812_48" id="menu-product-48" oldtitle="Siêu tẩy nhớt công nghiệp" title="">DEG A-812</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/deg-a801_49" id="menu-product-49" oldtitle="Tẩy rửa công nghiệp đa năng" title="">DEG A-801</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/deg-a802_50" id="menu-product-50" oldtitle="Siêu tẩy nhớt ức chế ăn mòn" title="">DEG A-802</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/deg-s800_51" id="menu-product-51" oldtitle="Dung môi tẩy nhớt công nghiệp" title="">DEG S-800</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/deg-s812_52" id="menu-product-52" class="more hidden" oldtitle="Dung môi tẩy nhớt gốc thực vật " title="">DEG S-812</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/deg-ss204_129" id="menu-product-129" class="more hidden" oldtitle="Tẩy dầu tôn - dây chuyền sản xuất tôn kẽm" title="">DEG SS-204</a></li>
																									<li class="see-more"><a href="#">See more...</a></li>
															</ul>
						</li>
											<li>
							<a href="#">Kiểm soát ăn mòn</a>
							<ul class="sub-menu sub-menu-lv-3 hidden">			
																																		<li class=""><a href="http://avco.vn/index.php/products/details/cor-r810_53" id="menu-product-53" oldtitle="Chống gỉ và ăn mòn kim loại tạm thời" title="">COR R-810</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/cor-h502_54" id="menu-product-54" oldtitle="Tẩy gỉ sét, cặn vôi" title="">COR H-502</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/cor-h810_55" id="menu-product-55" oldtitle="Chuyển hóa gỉ sét" title="">COR H-810</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/cor-h500_56" id="menu-product-56" oldtitle="Tẩy gỉ sét và Phosphate hóa" title="">COR H-500</a></li>
																							</ul>
						</li>
											<li>
							<a href="#">Tẩy bóc &amp; chống bám dính</a>
							<ul class="sub-menu sub-menu-lv-3 hidden">			
																																		<li class=""><a href="http://avco.vn/index.php/products/details/str-h521_57" id="menu-product-57" oldtitle="Tẩy rửa cặn trong nước tuần hoàn" title="">STR H-521</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/str-h310_58" id="menu-product-58" oldtitle="Siêu tẩy bê tông, vữa, gỉ sét" title="">STR H-310</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/str-h312_59" id="menu-product-59" oldtitle="Tẩy bê tông và xi măng" title="">STR H-312</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/str-h810_60" id="menu-product-60" oldtitle="Tẩy sơn" title="">STR H-810</a></li>
																							</ul>
						</li>
											<li>
							<a href="#">Bảo vệ &amp; làm mới bề mặt</a>
							<ul class="sub-menu sub-menu-lv-3 hidden">			
																																		<li class=""><a href="http://avco.vn/index.php/products/details/ren-s510_61" id="menu-product-61" oldtitle="Dầu đánh bóng gốc silicon" title="">REN S-510</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/ren-h510_62" id="menu-product-62" oldtitle="Vệ sinh và làm mới inox và nhôm" title="">REN H-510</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/ren-a302_63" id="menu-product-63" oldtitle="Tẩy rửa đa năng trong chế biến thực phẩm" title="">REN A-302</a></li>
																							</ul>
						</li>
											<li>
							<a href="#">Kháng bọt</a>
							<ul class="sub-menu sub-menu-lv-3 hidden">			
																																		<li class=""><a href="http://avco.vn/index.php/products/details/foa-n520_67" id="menu-product-67" oldtitle="Chất kháng bọt đa năng" title="">FOA N-520</a></li>
																							</ul>
						</li>
											<li>
							<a href="#">Khử trùng công nghiệp</a>
							<ul class="sub-menu sub-menu-lv-3 hidden">			
																																		<li class=""><a href="http://avco.vn/index.php/products/details/dis-a511_65" id="menu-product-65" oldtitle="Vệ sinh khử trùng sàn và các bề mặt" title="">DIS A-511</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/dis-n522_66" id="menu-product-66" oldtitle="Khử trùng không khí" title="">DIS N-522</a></li>
																							</ul>
						</li>
											<li>
							<a href="#">Tái chế nhựa</a>
							<ul class="sub-menu sub-menu-lv-3 hidden">			
																																		<li class=""><a href="http://avco.vn/index.php/products/details/pla-h320_68" id="menu-product-68" oldtitle="Tẩy rửa nhựa PET" title="">PLA H-320</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/pla-n320_69" id="menu-product-69" oldtitle="Chất tách nhựa PET" title="">PLA N-320</a></li>
																							</ul>
						</li>
											<li>
							<a href="#">Bảo vệ da tay</a>
							<ul class="sub-menu sub-menu-lv-3 hidden">			
																																		<li class=""><a href="http://avco.vn/index.php/products/details/qhand-pro_64" id="menu-product-64" oldtitle="Kem rửa tay tẩy dầu nhớt" title="">Q-HAND pro</a></li>
																							</ul>
						</li>
									</ul>
			</li>
					<li>
				<a href="#">Q DES</a>
				<ul class="sub-menu sub-menu-lv-2">
											<li>
							<a href="#">Hồ bơi</a>
							<ul class="sub-menu sub-menu-lv-3 hidden">			
																																		<li class=""><a href="http://avco.vn/index.php/products/details/qph-minus_127" id="menu-product-127" oldtitle="Điều chỉnh pH MINUS" title="">Q-PH MINUS</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qph-plus_126" id="menu-product-126" oldtitle="Điều chỉnh pH PLUS" title="">Q-PH PLUS</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qoxo_125" id="menu-product-125" oldtitle="Chất oxi hóa" title="">Q-OXO</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qfloc_124" id="menu-product-124" oldtitle="Tạo đông và làm trong" title=""> Q-FLOC</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qchlor_123" id="menu-product-123" oldtitle="Khử trùng bể bơi" title="">Q-CHLOR</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/qno-alg_122" id="menu-product-122" class="more hidden" oldtitle="Chống nấm tảo bể bơi" title="">Q-NO ALG </a></li>
																									<li class="see-more"><a href="#">See more...</a></li>
															</ul>
						</li>
											<li>
							<a href="#">Vệ sinh khử trùng nông trại</a>
							<ul class="sub-menu sub-menu-lv-3 hidden">			
																																		<li class=""><a href="http://avco.vn/index.php/products/details/wss_100" id="menu-product-100" oldtitle="Khử trùng trang trại" title="">WS-S</a></li>
																							</ul>
						</li>
											<li>
							<a href="#">Khử trùng y tế</a>
							<ul class="sub-menu sub-menu-lv-3 hidden">			
																																		<li class=""><a href="http://avco.vn/index.php/products/details/wscdisl-conc3_117" id="menu-product-117" oldtitle="Tẩy rửa khử trùng bề mặt, thiết bị và dụng cụ y tế" title="">WS-C-DISL CONC(3)</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/wscdisl-conc2_116" id="menu-product-116" oldtitle="Tẩy rửa khử trùng nhanh bề mặt, thiết bị và dụng cụ y tế" title="">WS-C-DISL CONC(2)</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/wscdisl-conc_115" id="menu-product-115" oldtitle="Khử trùng đậm đặc bề mặt, thiết bị và dụng cụ y tế" title="">WS-C-DISL CONC</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/wscdisp_110" id="menu-product-110" oldtitle="Khử trùng bề mặt, thiết bị và dụng cụ y tế" title="">WS-C-DISP</a></li>
																							</ul>
						</li>
											<li>
							<a href="#">Thực phẩm và đồ uống</a>
							<ul class="sub-menu sub-menu-lv-3 hidden">			
																																		<li class=""><a href="http://avco.vn/index.php/products/details/bac-clean-h-000_99" id="menu-product-99" oldtitle="Tẩy rửa và khử trùng thực phẩm" title="">BAC CLEAN H 000</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/suf-clean-h410_121" id="menu-product-121" oldtitle="Tẩy cặn vôi thiết bị bếp" title="">SUF CLEAN H-410</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/suf-clean-h200_120" id="menu-product-120" oldtitle="Tẩy rửa thiết bị sản xuất sữa" title="">SUF CLEAN H-200</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/cip-clean-h223_119" id="menu-product-119" oldtitle="Tẩy rửa tuần hoàn cho CIP sản xuất sữa" title="">CIP CLEAN H-223</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/cip-clean-h220_118" id="menu-product-118" oldtitle="Tẩy rửa đa năng không tạo bọt gốc acid cho CIP" title="">CIP CLEAN H-220</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/suf-clean-h311_114" id="menu-product-114" class="more hidden" oldtitle="Vệ sinh &amp; tẩy cặn gốc acid dạng bọt cho F&amp;B" title="">SUF CLEAN H-311</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/suf-clean-a311_113" id="menu-product-113" class="more hidden" oldtitle="Tẩy rửa dạng bọt cho kim loại nhôm" title="">SUF CLEAN A-311</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/bac-clean-a313_112" id="menu-product-112" class="more hidden" oldtitle="Tẩy rửa &amp; khử trùng gốc kiềm dạng bọt cho F&amp;B" title="">BAC CLEAN A-313</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/bac-clean-h311_111" id="menu-product-111" class="more hidden" oldtitle="Tẩy rửa &amp; khử trùng gốc acid dạng bọt cho F&amp;B" title="">BAC CLEAN H-311</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/bac-clean-a311_109" id="menu-product-109" class="more hidden" oldtitle="Tẩy rửa và khử trùng bề mặt chế biến thực phẩm" title="">BAC CLEAN A-311</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/cip-clean-a303_108" id="menu-product-108" class="more hidden" oldtitle="Tẩy rửa gốc kiềm cho CIP trong nước cứng" title="">CIP CLEAN A-303</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/suf-clean-a300_107" id="menu-product-107" class="more hidden" oldtitle="Tẩy rửa gốc kiềm mạnh cho F&amp;B" title="">SUF CLEAN A-300</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/suf-clean-a111_106" id="menu-product-106" class="more hidden" oldtitle="Tẩy rửa gốc kiềm mạnh cho chế biến thực phẩm" title="">SUF CLEAN A-111</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/suf-clean-h211_105" id="menu-product-105" class="more hidden" oldtitle="Tẩy rửa gốc acid cho tank bia, đường ống và thiết bị" title="">SUF CLEAN H-211</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/suf-clean-h210_104" id="menu-product-104" class="more hidden" oldtitle="Tẩy rửa gốc acid cho tank bia" title="">SUF CLEAN H-210</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/bac-clean-h202_103" id="menu-product-103" class="more hidden" oldtitle="Khử trùng tank bia" title="">BAC CLEAN H-202</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/cip-clean-a302_102" id="menu-product-102" class="more hidden" oldtitle="Tẩy rửa và khử trùng gốc kiềm cho CIP" title="">CIP CLEAN A-302</a></li>
																										<li class=""><a href="http://avco.vn/index.php/products/details/cip-clean-h302_101" id="menu-product-101" class="more hidden" oldtitle="Tẩy rửa cặn gốc Acid cho CIP " title="">CIP CLEAN H-302</a></li>
																									<li class="see-more"><a href="#">See more...</a></li>
															</ul>
						</li>
									</ul>
			</li>
			</ul>
			</li>
		
	</ul></div>
	</div>
	
	
	
			<?php
			list_posts_by_taxonomy( 'san_pham', 'danh_muc_san_pham' );
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			
			?>
	
	
	
	
	
	
	
	
	</aside>
	<div id="primary_product" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<select name="page-dropdown"
 onchange='document.location.href=this.options[this.selectedIndex].value;'> 
 <option value="">
<?php echo esc_attr( __( 'Select page' ) ); ?></option> 
 <?php 
  $pages = get_pages(); 
  foreach ( $pages as $page ) {
  	$option = '<option value="' . get_page_link( $page->ID ) . '">';
	$option .= $page->post_title . ' ' . $page->post_name . ' ' . $page->ID;
	$option .= '</option>';
	echo $option;
  }
 ?>
</select>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();