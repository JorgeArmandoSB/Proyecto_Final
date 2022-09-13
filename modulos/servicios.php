<?php
    class Servicios extends Conexion{
        public static $servicios = null;
        public static function get() {
            self::$servicios = (!self::$servicios instanceof self) ? new self() : self::$servicios;
            return self::$servicios; 
        }
        public function disenoServicios(){

            $data = json_decode(json_encode($this->peticion), true)["seccion-servicios"];
            
            $plantilla = (object) [];
            $plantilla->service =<<<HTML
                <h2 class="title" data-title2="{$data['subtituloServicios']}">{$data['tituloServicios']}</h2>
            HTML;

            $plantilla->card = <<<HTML
           <div class="card">
                    <div class="box">
                        <i class="fa-solid fa-file-code"></i>
                        <div class="text">{$data['tituloDiseno']}</div>
                        <p>{$data['parrafoDiseno']}</p>
                    </div>
            </div>

            <div class="card">
                    <div class="box">
                        <i class="fa-solid fa-bullhorn icono"></i>
                        <div class="text">{$data['tituloPublicidad']}</div>
                        <p>{$data['parrafoPublicidad']}</p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <i class="fa-solid fa-laptop-code icono"></i>
                        <div class="text">{$data['tituloDedWeb']}</div>
                        <p>{$data['parrafoDedWeb']}</p>
                    </div>
                </div>
       HTML;
 
            return json_encode($plantilla); 
        }
    }
?>

