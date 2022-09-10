<?php
    class Icono extends Conexion{
        public static $icono = null;
        public static function get() {
            self::$icono = (!self::$icono instanceof self) ? new self() : self::$icono;
            return self::$icono; 
        }
        public function iconoMenu(){
            $key = key($this->peticion->logo);
            $cadena = explode("-", $key);
            $plantilla = <<<HTML
                <a href="{$this->peticion->logo->$key}">{$cadena[0]}<span>{$cadena[1]}</span></a>
            HTML;
            return $plantilla; 
        }
    }
?>