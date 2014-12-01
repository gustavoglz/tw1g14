<?php
	include_once ("../core/variables.php");
	$id = $_GET['id'];
	$pelicula = mysql_query("SELECT * FROM peliculas WHERE id=$id");
    while($fila = mysql_fetch_array($pelicula)){
		$titulo=$fila['titulo'];
		$sinopsis=$fila['sinopsis'];
		$fecha_estreno=$fila['fecha_estreno'];
		$duracion=$fila['duracion'];
		$poster=$fila['poster'];
    }
	$titulo_pagina = $titulo;
    
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
    
	<p><?php echo $sinopsis; ?></p>
	<p><?php echo $fecha_estreno; ?></p>
	<p><?php echo $duracion; ?> min</p>
	<img src="../imagenes/peliculas/posters/<?php echo $poster; ?>"></img>    
     <div class="clear" ></div>
</body>
</html>