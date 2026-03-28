<?php
class Acronimo {

    public function generar($texto) {

        // eliminar signos excepto letras, espacios y guiones
        $texto = preg_replace("/[^a-zA-Z\s-]/", "", $texto);

        // convertir guiones en espacios
        $texto = str_replace("-", " ", $texto);

        $palabras = explode(" ", $texto);

        $resultado = "";

        foreach ($palabras as $p) {
            if (!empty($p)) {
                $resultado .= strtoupper($p[0]);
            }
        }

        return $resultado;
    }
}