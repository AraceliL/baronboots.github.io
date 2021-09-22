<?php
include("../Modelo/Articulo.php");


$articulo=new Articulo();
echo $articulo->getidArticulo()."br/";
echo $articulo->getidCategoria()."br/";
echo $articulo->getNombre()."br/";
echo $articulo->getDescripcion()."br/";
echo $articulo->getMarca()."br/";
echo $articulo->getPrecio()."br/";
echo $articulo->getUnidad()."br/";
echo $articulo->getExsitencias()."br/";
echo $articulo->getImagen()."br/";

?>