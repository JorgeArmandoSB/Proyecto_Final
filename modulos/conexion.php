<?php
    class Conexion {
        public $peticion = null;
        function __construct(){
            $this->peticion = json_decode(file_get_contents("config.json"));
        }
    }
?>