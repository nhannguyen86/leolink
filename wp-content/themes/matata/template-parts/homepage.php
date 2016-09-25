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
                <p class="contact_add">34-36, Đường 57A, P.Tân Tạo,<br>Q.Bình Tân, Tp.Hồ Chí Minh </p>
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

		</main><!-- #main -->
<section id="advps-slideshow1" class="widget widget_categories">
<h2 class="widget-title"><i class="fa fa-slideshare" aria-hidden="true"></i> Khách hàng</h2>
<?php echo do_shortcode('[advps-slideshow optset="1"]');?>
</section>
<section id="advps-slideshow4" class="widget widget_categories">
<h2 class="widget-title"><i class="fa fa-delicious" aria-hidden="true"></i> Đối tác</h2>
<?php echo do_shortcode('[advps-slideshow optset="4"]');?>
</section>
	</div><!-- #primary -->
<?php
matata_sidebar_select();
get_footer();
