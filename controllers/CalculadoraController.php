<?php
require_once __DIR__ . "/../models/Calculadora.php";

class CalculadoraController
{

    public function index()
    {

        $resultado = null;
        $modelo = new Calculadora();

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            if (isset($_POST["limpiar"])) {
                $modelo->limpiarHistorial();
            } else {

                $a = floatval($_POST["a"]);
                $b = floatval($_POST["b"]);
                $op = $_POST["operacion"];

                $resultado = $modelo->operar($a, $b, $op);
            }
        }

        $historial = $modelo->obtenerHistorial();

        require __DIR__ . "/../views/calculadora/index.php";
    }
}
