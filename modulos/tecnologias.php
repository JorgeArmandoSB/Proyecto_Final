<?php
    class Tecnologias extends Conexion{
        public static $tecnologias = null;
        public static function get() {
            self::$tecnologias = (!self::$tecnologias instanceof self) ? new self() : self::$tecnologias;
            return self::$tecnologias; 
        }
        public function disenoTecnologia(){

            $data = json_decode(json_encode($this->peticion), true)["seccion-tecnologias"];
            $key = array_keys($data);
            $lista = json_encode($data[$key[2]]);
            $plantilla = (object) [];
            $plantilla->sof =<<<HTML
                 <h2 class="title" data-title="{$data['subtituloTecnologias']}">{$data['tituloTecnologia']}</h2>
            HTML;

            $plantilla->herramientas = <<<HTML
           <div class="column left">
                    <div class="text">{$data['tituloHerramientas']}</div>
                    <p>{$data['parrafoHerramientas']}</p>
                    <a href="{$data[$key[4]]}">$key[4]</a>
                </div>

       HTML;

    //    $plantilla->barras = <<<HTML
    //        <div class="column right">
    //        <div class="bars">
    //                     <div class="info">
    //                         <span>HTML</span>
    //                         <span>80%</span>
    //                     </div>
    //                     <div class="line html"></div>
    //                 </div>
    //             </div>

    //    HTML;

         $plantilla->barras = (string) "";
            foreach ($data as $key => $value) {
                $plantilla->barras .= <<<HTML
                    <div class="bars">
                        <div class="info">
                            
                            <span></span>
                            <span></span>
                        </div>
                        <div class="line html"></div>
                    </div>
                HTML;
            }



 
            return json_encode($plantilla); 
        }
    }
?>

