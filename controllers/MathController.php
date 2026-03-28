<?php
require_once __DIR__ . "/../models/Math.php";

class MathController {

    public function index() {

        $resultado = [];
        $tipo = "";

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $n = intval($_POST["numero"]);
            $tipo = $_POST["tipo"];

            $modelo = new Math();

            if ($tipo === "fibonacci") {
                $resultado = $modelo->fibonacci($n);
            } else if ($tipo === "factorial") {
                $resultado = $modelo->factorial($n);
            }
        }

        require __DIR__ . "/../views/math/index.php";
    }
}