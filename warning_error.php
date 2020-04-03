<?php 
 $contenido = file_get_contents('archivo_que_no_existe.txt');
 echo 'El contenido del archivo es: ' . $contenido;
?>