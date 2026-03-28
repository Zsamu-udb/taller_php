<?php
require_once __DIR__ . "/../models/Acronimo.php";

class AcronimoController {

    public function index() {

        $resultado = null;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $texto = $_POST["texto"] ?? "";

            $modelo = new Acronimo();
            $resultado = $modelo->generar($texto);
        }

        require __DIR__ . "/../views/acronimo/index.php";
    }
}
