<?php
  class EmpleadoDao{
    private $server="localhost";
    private $usr="root";
    private $pass="";
    private $db="empresa";

    private funtion conectar(){
        
        $mysqli=new $mysqli($this->server,
                            this->usr,
                            $this->pass,
                            $this->db);
        return $mysqli;
    }
    
    public funtion consulta($csql){
        $conexion=$this->conectar();
        $resultado=$con->query($csql);
        return $resultado;
    }
}
?>