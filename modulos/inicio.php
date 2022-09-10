<?php
    class Inicio extends Conexion{
        public static $inicio = null;
        public static function get() {
            self::$inicio = (!self::$inicio instanceof self) ? new self() : self::$inicio;
            return self::$inicio; 
        }
        public function seccionInicio(){
            $data = json_decode(json_encode($this->peticion), true)["seccion-inicio"];
            $key = array_keys($data);
            $lista = json_encode($data[$key[2]]);
            $plantilla = <<<HTML
                <div class="text-1">{$data["saludo"]}</div>
                <div class="text-2">{$data["presentacion"]}</div>
                <div class="text-3">{$key[2]} <span class="typing" data-lista='{$lista}'></span></div>
                <a href="{$data[$key[3]]}">{$key[3]}</a>
            HTML;
            return $plantilla; 
        }
    }
?>