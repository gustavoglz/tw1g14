<?php
	include_once ("../core/variables.php");
	$titulo_pagina = "Películas";
    $peliculas = mysql_query("SELECT * FROM peliculas");
?>
<!DOCTYPE HTML>
<html>
<head>
	<?php include_once ($head); ?>
</head>
<body>
	<header>
		<h1><?php echo $titulo_pagina; ?></h1>
		<?php include_once ($menu); ?>
	</header> 
    
      
    
<!-- PHP -->      
        <?php
            while($fila = mysql_fetch_array($peliculas)){
                echo "<a href='pelicula.php?id=" . $fila['id'] . "'>";
				echo "<div class='pelicula'>";
                
				if ($fila['poster'] == ""){
					echo "<img src='/tecweb1g/cine/imagenes/peliculas/posters/null.gif'/>";
				}else{
					echo "<img src='/tecweb1g/cine/imagenes/peliculas/posters/" . $fila['poster'] . "' />";
				}
				
                echo "<div class='datopelicula nombrepelicula'>" . $fila['titulo'] . "</div>";
                echo "<div class='datopelicula'>" . $fila['fecha_estreno'] . "</div>";
                echo "<div class='datopelicula'>" . $fila['duracion'] . " min </div>";
                echo "</div>";
				echo "</a>";
            }
        ?>
<!-- PHP --> 
    
     <div class="clear" ></div>
</body>
</html>