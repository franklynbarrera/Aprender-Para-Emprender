<?php
if (is_user_logged_in()){
		
			    $cu = wp_get_current_user();
			
				echo '<div class="div_perfil" align="center">';
			    echo '<h6 class="perfill">ID:</h6> '                . $cu->ID             . '<br />';
    			echo '<h6 class="perfill">Nombre de usuario:  </h6> ' . $cu->user_login     . '<br />';
    	/*  d		echo '<h6 class="perfill">Nombre: </h6>'            . $cu->user_firstname . '<br />';
    			echo '<h6 class="perfill">Apellidos:</h6>  '         . $cu->user_lastname  . '<br />';
    			echo '<h6 class="perfill">Nombre publico: </h6> '    . $cu->display_name   . '<br />';*/
    			echo '<h6 class="perfill">Email:</h6>  '             . $cu->user_email     . '<br />';
    			/*echo '<h6 class="perfill"> Web: </h6> '               . $cu->user_url       . '<br />';
		*/
				echo '<h6 class="perfill">Molde Link Unico: </h6>';
				?>

		<a href=''.<?php echo STYLESHEETPATH.'/index.php/perfil/Editar'.'/'.$cu->ID?>> <?php  echo STYLESHEETPATH.'/index.php/perfil/Editar'.'/'.$cu->ID?> </a>
				<?php
				
				
			
echo '</div>';

		}else{

			echo '<div class="div_perfil" align="center" style="text-align: center;">';

		echo '<h2 class="perfill">No estas Loggeado </h2>';
		echo '</div>';

	}
	
	
	




?>


