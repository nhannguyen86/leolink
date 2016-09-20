<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Matata
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php get_sidebar( 'footer' ); ?>


		<div id="logoo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="alignnone size-medium wp-image-76" src="http://www.leolink.com.vn/wp-content/uploads/2016/09/LeoLinkFooter-300x82.png" alt="LeoLinkFooter" width="300" height="82" />
				</a>
			<!--End footer image check. -->
		</div>

		
		<div class="coppy_right">
                <p>© <span>Copyright 2016 Leolink.com.vn,</span>  All rights reserved</p>
                <p>® Leolink.com.vn giữ bản quyền nội dung trên website này.</p>
		<p>Nhóm NP | Thiết kế: website, ứng dụng desktop, ứng dụng mobile...</p>
             </div>

		<!--<div class="site-info">
			<a href="<? php echo esc_url( __( 'https://wordpress.org/', 'matata' ) ); ?>"><? php printf( esc_html__( 'Proudly powered by %s', 'matata' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<? php printf( esc_html__( 'Theme: %1$s by %2$s.', 'matata' ), 'matata', '<a href="'. esc_url('http://justhemes.com/').'" rel="designer">JusThemes.com</a>' ); ?>
		</div> .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<div id="cfacebook">
    <a href="javascript:;" class="chat_fb"><i class="fa fa-comments"></i> Hỗ trợ trực tuyến</a>
    <div id="fchat" class="fchat">
        <div class="fb-page" data-tabs="messages" data-href="https://www.facebook.com/LeoLink-539131742943152/" data-width="250" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
        <div class="chat-single"><a target="_blank" href="https://www.facebook.com/LeoLink-539131742943152/"><i class="fa fa-facebook-square"></i> Fanpage leolink.com.vn</a></div>
    </div>
</div>

</body>
</html>
