<?php
    class Menu extends Conexion{
        public static $menu = null;
        public static function get() {
            self::$menu = (!self::$menu instanceof self) ? new self() : self::$menu;
            return self::$menu; 
        }
        public function disenoMenu(){
            $plantilla = (string) "";
            foreach ($this->peticion->menu as $key => $value) {
                $plantilla .= <<<HTML
                    <li><a href="$value" class="menu-btn">$key</a></li>
                HTML;
            }
            return $plantilla; 
        }
    }
?>