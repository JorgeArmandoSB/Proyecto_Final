<?php
    class Footer extends Conexion{
        public static $footer = null;
        public static function get() {
            self::$footer = (!self::$footer instanceof self) ? new self() : self::$footer;
            return self::$footer; 
        }
        public function disenoFooter(){
            $data = json_decode(json_encode($this->peticion), true)["seccion-footer"];
            $key = array_keys($data);
            $lista = json_encode($data[$key[2]]);
            $plantilla = <<<HTML
                 <span>{$data["texto-footer"]}<a href="{$data[$key[1]]}">{$key[1]}</a> | <span class="fa-solid fa-pen-nib"></span>  {$data["cargo"]}</span>
            HTML;
            return $plantilla; 
        }
    }
?>