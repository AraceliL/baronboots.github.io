<?php
include("../Persistencia/conexion.php");

$correo=$_POST["e-mail"];
$clave=$_POST["Password"];

$con= new conexion();

$conexion=$con->conectar();

$csql="SELECT * from usuario where correo='$correo' and clave='$clave'" ;

$resultado=$con->consultar($csql);


if($resultado==1){
echo "Bienvenido".$
echo "<a href= '..../Frontend/Index2.htlm'"
}



