<?php
class Articulo{

private $idArticulo;
private $idCategoria;
private $Nombre;
private $Descripcion;
private $Marca;
private $Precio;
private $Unidad;
private $Existencias;
private $Imagen;


public funtion setidAtriculo($idArticulo){
    this->id_int=$id;
}
public funtion setidCategoria($idCategoria){
    this->idCategoria_int=$idCategoria;
}

public funtion setNombre($Nombre){
    this->nombre_str=$Nombre;
}
public funtion setDescripcion($Descripcion){
    this->descripcion_str=$Descripcion;
}
public funtion setMarca($Marca){
    this->marca_str=$Marca;
}
public funtion setPrecio($Precio){
    this->precio_float=$Precio;
}
public funtion setUnidad($Unidad){
    this->unidad_str=$Unidad;
}
public funtion setExistencia($Existencias){
    this->existencia_int=$Existencias;
}
public funtion setImagen($Imagen){
    this->imagen=$Imagen;
}


public funtion getidArticulo(){
    return $this->idArticulo_int;
 }
 public funtion getidCategoria(){
    return $this->idCategoria_int;
 }
 public funtion getNombre(){
    return $this->Nombre_str;
 }
 public funtion getDescripcion(){
    return $this->Descripcion_str;
 }
 public funtion getMarca(){
    return $this->marca_str;
 }
 public funtion getPrecio(){
    return $this->precio_float;
 }
 public funtion getUnidad(){
    return $this->Unidad_str;
 }
 public funtion getExsitencias(){
    return $this->Existencias_int;
 }
 public funtion getImagen(){
    return $this->Imagen_;
 }

}
?>