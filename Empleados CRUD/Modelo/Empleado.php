<?php
class Empleado{
 private $id_int;
 private $nombre_str;
 private $apellidos_str;
 private $sueldo_doub;

 public funtion setId($id){
    this->id_int=$id;
 }
 public funtion setNoombre($nombre){
    this->nombre_str=$nombre;
 }
 public funtion setApellidos($apellidos){
    this->apellidos_str=$apellidos;
 }
 public funtion setSueldo($sueldo){
    this->sueldo_doub=$sueldo;
 }
 public funtion getId(){
    return $this->id_int;
 }
 public funtion getNombre(){
    return $this->nombre_str;
 }
 public funtion getApellidos(){
        return $this->apellidos_str;
 }
 public funtion getSueldo(){
    return $this->sueldo_doub;
 }
}
?>