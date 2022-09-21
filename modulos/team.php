<?php
    class Team extends Conexion{
        public static $team = null;
        public static function get() {
            self::$team = (!self::$team instanceof self) ? new self() : self::$team;
            return self::$team; 
        }
        public function disenoTeam(){

            $data = json_decode(json_encode($this->peticion), true)["seccion-grupo"];
            
            $plantilla = (object) [];
            $plantilla->grupo =<<<HTML
                <h2 class="title" data-title2="{$data['subtituloGrupo']}">{$data['tituloGrupo']}</h2>
            HTML;

            $plantilla->target = <<<HTML
                
       HTML;
 
            return json_encode($plantilla); 
        }
    }
?>