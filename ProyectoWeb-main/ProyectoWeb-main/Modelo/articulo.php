<?php
    Class Articulo{
        
        public function listarArticulos($con){
            $mysql=$con->conectar();
        
            $sql = "SELECT * FROM articulo";
            $stmt = $mysql->query($sql);

            return $stmt;
        } 
    }
?>