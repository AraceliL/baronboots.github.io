<?php
include("../Persistencia/EmpleadoDao.php");
//Recuperar dato del formulario
$id= $_POST["id"];
//Consulta la base de datos
$empleadodao=new EmpleadoDao();

$conexion=$empleadodao->conectar();
$csql="select * from empleado where id= "."$id";

$resultado=$empleadodao->consulta($csql);
//Recorre el resultado en orden
//Despliega la vista con la información

require_once("../Vista/ConsultaEmpleado.php");
?>