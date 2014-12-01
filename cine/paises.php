<?php
	include_once ("variables.php");
	$titulo_pagina = "Países";
	$paises = mysql_query("SELECT * FROM paises");
	//Query = consulta o solicitud a la BD     
?>
<!DOCTYPE HTML>
<html>
<head>
	<?php include_once ("head.php"); ?>
</head>
<body>
	<header>
		<h1><?php echo $titulo_pagina; ?></h1>
		<?php include_once ("menu.php"); ?>
	</header>
	
    
    <table>
        <tr>
            <th>Nombre</th>
            <th>Bandera</th>
        </tr>
        
<!-- PHP -->      
        <?php
            while($fila = mysql_fetch_array($paises)){
                echo "<tr>";
                echo "<td>" . $fila['nombre'] . "</td>";
                echo "<td> <img src='imagenes/banderas/" . $fila ['bandera'] . "' /></td>";
                echo "</tr>";
            }
        ?>
<!-- PHP --> 
    </table>
    

</body>
</html> 












