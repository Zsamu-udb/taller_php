<?php
require_once __DIR__ . "/../models/Conjuntos.php";

class ConjuntosController
{

    public function index()
    {

        $union = $inter = $diffAB = $diffBA = [];

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $inputA = $_POST["conjuntoA"];
            $inputB = $_POST["conjuntoB"];

            $A = array_map('intval', explode(",", $inputA));
            $B = array_map('intval', explode(",", $inputB));

            $A = array_filter($A, fn($n) => $n !== null);
            $B = array_filter($B, fn($n) => $n !== null);

            $modelo = new Conjuntos();

            $A = $modelo->limpiar($A);
            $B = $modelo->limpiar($B);

            $union = $modelo->union($A, $B);
            $inter = $modelo->interseccion($A, $B);
            $diffAB = $modelo->diferenciaAB($A, $B);
            $diffBA = $modelo->diferenciaBA($A, $B);
        }

        require __DIR__ . "/../views/conjuntos/index.php";
    }
}
