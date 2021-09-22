<?php
include("../Modelo/Usuario.php");


$usuario=new Usuario();
echo $usuario->getIdUsuario()."br/";
echo $usuario->getIdTipoUsuario()."br/";
echo $usuario->getNombre()."br/";
echo $usuario->getApellidos()."br/";
echo $usuario->getGenero()."br/";
echo $usuario->getDomicilio()."br/";
echo $usuario->getEmail()."br/";
echo $usuario->getContrasena()."br/";
echo $usuario->getRfc()."br/";
echo $usuario->getPuesto()."br/";
echo $usuario->getSalario()."br/";
echo $usuario->getIdDepartamento()."br/";
echo $usuario->getFormaPago()."br/";

