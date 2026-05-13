<?php

require_once __DIR__ . "/../models/FibonacciFactorial.php";

class FibonacciFactorialController
{
    public function index()
    {
        $resultado = null;

        $modelo = new FibonacciFactorial();

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $n = intval($_POST["numero"] ?? 0);

            $operacion = $_POST["operacion"] ?? "";

            if ($operacion === "fibonacci") {

                $resultado = $modelo->fibonacci($n);

            } elseif ($operacion === "factorial") {

                $resultado = $modelo->factorial($n);
            }
        }

        require __DIR__ . "/../views/fibonacci/index.php";
    }
}