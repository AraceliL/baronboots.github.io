<?php
    require('Modelo/articulo.php');
    require('Persistencia/conexion.php');
    $con = new Coneccion();
    $articulos = new Articulo();
    $lista = $articulos->listarArticulos($con);
?>