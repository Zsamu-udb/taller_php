<?php
require_once "models/FibonacciFactorial.php";

class FibonacciFactorialController {

    public function index() {

        $modelo = new FibonacciFactorial();
        $resultado = null;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $n = intval($_POST["numero"]);
            $operacion = $_POST["operacion"];

            if ($operacion == "fibonacci") {
                $resultado = $modelo->fibonacci($n);
            } else if ($operacion == "factorial") {
                $resultado = $modelo->factorial($n);
            }
        }

        require "views/fibonacci/index.php";
    }
}