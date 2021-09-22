<?php
class Usuario {
    //--Atributos
    private $idUsuario;
    private $idTipoUsuario;
    private $nombre;
    private $apellidos;
    private $genero;
    private $domicilio;
    private $email;
    private $contrasena;
    private $rfc;
    private $puesto;
    private $salario;
    private $idDepartamento;
    private $formaPago;

    //Métodos de mutación (SET's)
    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario; 
    }

    public function setIdTipoUsuario($idTipoUsuario){
        $this->idTipoUsuario = $idTipoUsuario; 
    }

    public function setNombre($nombre){
        $this->nombre = $nombre; 
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos; 
    }

    public function setGenero($genero){
        $this->genero = $genero; 
    }

    public function setDomicilio($domicilio){
        $this->domicilio = $domicilio; 
    }

    public function setEmail($email){
        $this->email = $email; 
    }

    public function setContrasena($contrasena){
        $this->contrasena = $contrasena; 
    }

    public function setRfc($rfc){
        $this->rfc = $rfc; 
    }

    public function setPuesto($puesto){
        $this->puesto = $puesto; 
    }

    public function setSalario($salario){
        $this->salario = $salario; 
    }

    public function setIdDepartamento($idDepartamento){
        $this->idDepartamento = $idDepartamento; 
    }

    public function setFormaPago($formaPago){
        $this->formaPago = $formaPago; 
    }

    //Métodos de acceso (GET's)
    public function getIdUsuario(){ 
        return $this->idUsuario; 
    }

    public function getIdTipoUsuario(){
        return $this->idTipoUsuario; 
    }

    public function getNombre(){
        return $this->nombre;  
    }

    public function getApellidos(){
        return $this->apellidos; 
    }

    public function getGenero(){
        return $this->genero;  
    }

    public function getDomicilio(){
        return $this->domicilio;  
    }

    public function getEmail(){
        return $this->email;  
    }

    public function getContrasena(){
        return $this->contrasena;  
    }

    public function getRfc(){
        return $this->rfc; 
    }

    public function getPuesto(){
        return $this->puesto; 
    }

    public function getSalario(){
        return $this->salario;  
    }

    public function getIdDepartamento(){
        return $this->idDepartamento; 
    }

    public function getFormaPago(){
        return $this->formaPago; 
    }


}