<?php
    Class Coneccion{
        private $server="localhost";
        private $usr="root";
        private $pass="";
        private $db ="supercito";
        public function conectar(){
            $mysqli = new mysqli($this->server,
                                $this->usr,
                                $this->pass,
                                $this->db);
            return $mysqli;
        }
    }
?>
