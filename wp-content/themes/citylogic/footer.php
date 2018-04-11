<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package CityLogic
 */
?>

	</div><!-- #content -->
</div><!-- .content-container -->

<footer id="colophon" class="site-footer" role="contentinfo">
	
	<div class="site-footer-widgets">
        <div class="site-container" align='center'>
			<a href="https://www.facebook.com/ApeAcademyOnline/"><img src="wp-content/uploads/2018/04/facebook.png" alt=""></a>
			<a href="https://www.instagram.com/apeacademyonline/"><img src="wp-content/uploads/2018/04/instagram1.png" alt=""></a>
			<a href=""><img src="wp-content/uploads/2018/04/twitter.png" alt=""></a>
			<a href="mailto:apeacademyonline@outlook.com"><img src="wp-content/uploads/2018/04/correo1.png" alt=""></a>

		
			
       
	       <?php if ( is_active_sidebar( 'footer' ) ) : ?>
            <div class="widgets-container">
                <?php dynamic_sidebar( 'footer' ); ?>
            </div>
    		<?php endif; ?>
    		
            <div class="clearboth"></div>
        </div>
    </div>
	
	<div class="site-footer-bottom-bar">
	
		<div class="site-container">
			
			<div class="site-footer-bottom-bar-center"  align='center' style='text-shadow: 0 0 0.2em #40111e, 0 0 0.2em #40111e,
		0 0 0.2em #40111e'>

            <?php echo "Aprender Para Emprender 2018 ©"?>

             	<!--<?php /*printf( __( 'Theme by %1$s', 'citylogic' ), '<a href="http://www.outtheboxthemes.com">Out the Box</a>' );*/ ?> -->

			</div>
	        
	        <div class="site-footer-bottom-bar-right">

	        	<?php
				if ( is_active_sidebar( 'footer-bottom-bar-right' ) ) {
					dynamic_sidebar( 'footer-bottom-bar-right' );
 				}
				?>

	        </div>
	        
	    </div>
		
        <div class="clearboth"></div>
	</div>
	
</footer><!-- #colophon -->

<?php wp_footer(); ?>

<?php
if ( get_theme_mod( 'citylogic-social-right-aligned-buttons', customizer_library_get_default( 'citylogic-social-right-aligned-buttons' ) ) ) {
?>
<div class="side-aligned-social-links">
<?php
get_template_part( 'library/template-parts/social-links' );
?>
</div>
<?php 
}
?>

</body>
</html>
