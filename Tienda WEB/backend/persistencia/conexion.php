<?php
class conexion{
    private $server="localhost";
    private $usr="root";
    private $pass="";
    private $db="supercito";

    private function conectar(){

        $mysqli=new $mysqli($this->server,
        $this->usr,
        $this->pass,
        $this->db);
return $mysqli;


    }

    public function consulta($csql){
        $conexion=$this->conectar();
        $resultado=$con->query($csql);
        return $resultado;
    }




}
?>