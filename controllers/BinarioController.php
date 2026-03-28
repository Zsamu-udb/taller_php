<?php
require_once __DIR__ . "/../models/Binario.php";

class BinarioController {

    public function index() {

        $resultado = null;

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $numero = intval($_POST["numero"]);

            if ($numero >= 0) {
                $modelo = new Binario();

                // puedes cambiar aquí si quieres usar el manual
                $resultado = $modelo->convertirManual($numero);
            }
        }

        require __DIR__ . "/../views/binario/index.php";
    }
}