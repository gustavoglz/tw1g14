<?php
//Conexión a la base de datos
$conexion = mysql_connect('localhost','root','root');


if (!$conexion){
	die('No se pudo conectar:' . mysql_error());
}

// ! Don't, not, diferente de, Negativa a la condicional  
//Instrucciones de PHP con respecto a MySQL
//mysql_connect
//mysql_select_db
//mysql_set_charset
 
$bd = mysql_select_db('cine',$conexion);
mysql_set_charset('utf-8', $conexion);
mysql_query("SET NAMES 'utf8'");
?>