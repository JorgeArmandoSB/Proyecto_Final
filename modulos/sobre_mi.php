<?php
    class SobreMi extends Conexion{
        public static $sobre_mi = null;
        public static function get() {
            self::$sobre_mi = (!self::$sobre_mi instanceof self) ? new self() : self::$sobre_mi;
            return self::$sobre_mi; 
        }
        public function seccionSobreMi(){
            $data = json_decode(json_encode($this->peticion), true)["Seccion-sobre-mi"];
            $key = array_keys($data);
            $lista = json_encode($data[$key[2]]);
            $plantilla = (object) [];
            $plantilla->titulo =<<<HTML
                <h2 class="title" data-title="{$data['subtituloSobreMi']}">{$data['tituloSobreMi']}</h2>
            HTML;
            $plantilla->secion = <<<HTML
                 <div class="column left">
                    <img src="./img/profile-1.jpeg" alt="">
                </div> 

                 <div class="column right">
                    <div class="text">{$data['tituloSobreMi']} <span class="typing-2" data-lista='{$lista}'></span></div>
                    <p>{$data['parrafo']}</p>
                    <a href="{$data[$key[4]]}">$key[4]</a>
                </div>
            HTML;
            return json_encode($plantilla); 
        } 
    }
?>