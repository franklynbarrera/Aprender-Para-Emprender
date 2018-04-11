<ul class="social-links">

			<li><a href="https://www.facebook.com/ApeAcademyOnline/"><img src="wp-content/uploads/2018/04/facebook.png" alt=""></a></li>
			<li><a href="https://www.instagram.com/apeacademyonline/"><img src="wp-content/uploads/2018/04/instagram1.png" alt=""></a></li>
			<li><a href=""><img src="wp-content/uploads/2018/04/twitter.png" alt=""></a></li>
			<li><a href="mailto:apeacademyonline@outlook.com"><img src="wp-content/uploads/2018/04/correo1.png" alt=""></a></li>

<?php




		
			

if( get_theme_mod( 'citylogic-social-email', customizer_library_get_default( 'citylogic-social-email' ) ) != '' ) :
    echo '<li><a href="' . esc_url( 'mailto:' . antispambot( get_theme_mod( 'citylogic-social-email' ), 1 ) ) . '" title="';
	echo __( 'Send us an email', 'citylogic' );
	echo '" class="social-email"><i class="fa fa-envelope-o"></i></a></li>';
endif;

if( get_theme_mod( 'citylogic-social-skype', customizer_library_get_default( 'citylogic-social-skype' ) ) != '' ) :
    echo '<li><a href="skype:' . esc_html( get_theme_mod( 'citylogic-social-skype' ) ) . '?userinfo" title="';
	echo __( 'Contact us on Skype', 'citylogic' );
	echo '" class="social-skype"><i class="fa fa-skype"></i></a></li>';
endif;

if( get_theme_mod( 'citylogic-social-tumblr', customizer_library_get_default( 'citylogic-social-tumblr' ) ) != '' ) :
    echo '<li><a href="' . esc_url( get_theme_mod( 'citylogic-social-tumblr' ) ) . '" target="_blank" title="';
	echo __( 'Find us on Tumblr', 'citylogic' );
	echo '" class="social-tumblr"><i class="fa fa-tumblr"></i></a></li>';
endif;

if( get_theme_mod( 'citylogic-social-flickr', customizer_library_get_default( 'citylogic-social-flickr' ) ) != '' ) :
    echo '<li><a href="' . esc_url( get_theme_mod( 'citylogic-social-flickr' ) ) . '" target="_blank" title="';
	echo __( 'Find us on Flickr', 'citylogic' );
	echo '" class="social-flickr"><i class="fa fa-flickr"></i></a></li>';
endif;
?>
</ul>
