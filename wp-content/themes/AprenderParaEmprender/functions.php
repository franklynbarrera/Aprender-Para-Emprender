<?php

/*AGREGANDO UN SHORCODE PARA MOSTRAR EN UNA ENTRADA CODIGO PHP, EN ESTE CASO EL PERFIL  .. HACIENDO ESTO INCLUYO  UN .PHP Y LO LLAMO
YENDO A LA ENTRADA Y DICIENDO EN ESTE CASO [perfilphp] y ya se carga todo ese .php*/


/*para ruta de tema hijo activo se usa STYLESHEETPATH , para padre activo o simplemente tema normal que no sea hijo es TEMPLATEPATH */
function codigoPHP ($atts){ 
include (STYLESHEETPATH ."/codigos_propios/perfill.php"); 
}
add_shortcode ('perfilphp', 'codigoPHP');

?>
