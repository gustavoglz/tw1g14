<?php
include_once('../../core/conexion.php');
$URL = $_GET['id'];
mysql_query("DELETE FROM peliculas WHERE id=$URL");
header('location:index.php');
?>