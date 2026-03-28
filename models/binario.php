<?php
class Binario
{

    //existe un método re fácil: hago dos, uno prehecho y el manual

    public function convertir($numero)
    {
        return decbin($numero);
    }

    public function convertirManual($numero)
    {

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
