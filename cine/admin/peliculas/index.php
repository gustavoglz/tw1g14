<?php
	include_once ("../../core/variables.php");
	$titulo_pagina = "Películas";
    $peliculas = mysql_query("SELECT * FROM peliculas");
?>
<!DOCTYPE HTML>
<html>
<head>
	<?php include_once ("../head.php"); ?>
</head>
<body>
	<header>
		<h1><?php echo $titulo_pagina; ?></h1>
		<?php include_once ("../menu.php"); ?>
	</header> 
    
	<table>
		<tr>
			<th>ID</th>
			<th>Titulo</th>
			<th>Editar</th>
			<th>Borrar</th>
			<th>Ver</th>
		</tr>
        <?php
            while($fila = mysql_fetch_array($peliculas)){
				echo "<tr>";
				echo "<td>". $fila['id'] ."</td>";
				echo "<td>". $fila['titulo'] ."</td>";
				echo "<td><a href='eliminar.php?id=". $fila['id']."'>Eliminar</a></td>";
				echo "</tr>";
			}
		?>
	</table>
         
     <div class="clear" ></div>
</body>
</html>