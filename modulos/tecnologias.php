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
            $lista = json_encode($data[$key[4]]);
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

                <div class="column right">
                        <div class="bars">
                            <div class="info">        
                                <span>{$data['HTML']}</span>
                                <span>{$data['htmlpor']}</span>
                            </div>
                            <div class="line html"></div>
                        </div>
                        <div class="bars">
                        <div class="info">
                        <span>{$data['CSS']}</span>
                        <span>{$data['csspor']}</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                        <span>{$data['PHP']}</span>
                        <span>{$data['phppor']}</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                        <span>{$data['JavaScript']}</span>
                        <span>{$data['JavaScriptpor']}</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                        <span>{$data['Illustrator']}</span>
                        <span>{$data['Illustratorpor']}</span>
                        </div>
                        <div class="line il"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                        <span>{$data['Photoshop']}</span>
                        <span>{$data['Photoshoppor']}</span>
                        </div>
                        <div class="line ps"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>{$data['AfterEffects']}</span>
                            <span>{$data['AfterEffectspor']}</span>
                        </div>
                        <div class="line ae"></div>
                    </div>
                </div>

       HTML;

         



 
            return json_encode($plantilla); 
        }
    }
?>

