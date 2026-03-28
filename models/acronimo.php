<?php
class Acronimo
{

    public function generar($texto)
    {

        $texto = preg_replace("/[^a-zA-Z\s-]/", "", $texto);

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
