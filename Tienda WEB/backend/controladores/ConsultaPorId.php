<?php
include("../Persistencia/articuloDao.php");
$id=$_POST["id"];

$articuloDao= new articuloDao();
$conexion=$articuloDao->conectar();
$csql="select * from articulo where idArticulo="."$id";

$resultado=$articuloDao->consultar($csql);

require_once("../Vista/ConsultaArticulo.php")
?>
