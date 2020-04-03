<?php

  $name = "Jose Daniel Gomez Carrasco";
  $movie = "Infinity War";
  $serie = "Game of thrones";
  $pet = "Los gatos";
 
//$nombre es una variable que no ha sido definida antes de su uso. Su valor es NULL.

?>

<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php echo '<h3>Tu nombre es: </h3>' . $name; 
 	   echo '<h3>Tu pelicula favorita es: </h3>' . $movie; 
  	   echo '<h3>Tu tu serie favorita es: </h3>' . $serie; 
  	   echo '<h3>Tu animal favorito es: </h3>' . $pet; 
 ?> 	   
 </body>
</html>