<?php
 include("../Modelo/Empleado.php");

 $empleaod=new Empleado();

 $empleado->setId(1);
 $empleado->setNombre("Pedro");
 $empleado->setApellidos("Sanchez");
 $empleado->setSueldo(5000.00);

 echo $empleado->getId()."br/";
 echo $empleado->getNombre()."br/";
 echo $empleado->getApellidos()."br/";
 echo $empleado->getSueldo()."br/";