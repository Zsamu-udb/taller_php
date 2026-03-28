<?php
require_once __DIR__ . "/../models/Estadistica.php";

class EstadisticaController {

    public function index() {

        $promedio = null;
        $media = null;
        $moda = [];

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $input = $_POST["numeros"];

            // convertir string → array de números reales
            $numeros = array_map('floatval', explode(",", $input));

            // limpiar vacíos
            $numeros = array_filter($numeros, function($n) {
                return $n !== "";
            });

            if (count($numeros) > 0) {
                $modelo = new Estadistica();

                $promedio = $modelo->promedio($numeros);
                $media = $modelo->media($numeros);
                $moda = $modelo->moda($numeros);
            }
        }

        require __DIR__ . "/../views/estadistica/index.php";
    }
}