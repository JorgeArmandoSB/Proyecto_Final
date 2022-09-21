<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    $_DATA = ($_SERVER["REQUEST_METHOD"] == "POST") 
                ? json_decode(file_get_contents("php://input"), true)
                : (array) ["file" => "404"];
    extract($_DATA);
    unset($_DATA);
    include "Proyecto_Final/modulos/conexion.php";
    include "Proyecto_Final/modulos/$file.php";
    echo match ($file) {
        'menu' => Menu::get()->disenoMenu(), 
        'icono' => Icono::get()->iconoMenu(),
        'inicio' => Inicio::get()->seccionInicio(),
        'sobre_mi' => SobreMi::get()->seccionSobreMi(),
        'servicios' => Servicios::get()->disenoServicios(),
        'tecnologias' => Tecnologias::get()->disenoTecnologia(),
        'team' => Team::get()->disenoTeam(),
        'footer' => Footer::get()->disenoFooter(),


    }; 
?> 