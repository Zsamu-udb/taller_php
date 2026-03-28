<?php
class Binario {

    // método nativo (rápido)
    public function convertir($numero) {
        return decbin($numero);
    }

    // método manual (mejor valor académico)
    public function convertirManual($numero) {

        if ($numero == 0) return "0";

        $binario = "";

        while ($numero > 0) {
            $residuo = $numero % 2;
            $binario = $residuo . $binario;
            $numero = floor($numero / 2);
        }

        return $binario;
    }
}