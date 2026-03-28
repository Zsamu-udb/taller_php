<?php
class Estadistica {

    public function promedio($numeros) {
        return array_sum($numeros) / count($numeros);
    }

    public function media($numeros) {
        sort($numeros);
        $n = count($numeros);

        if ($n % 2 == 0) {
            return ($numeros[$n/2 - 1] + $numeros[$n/2]) / 2;
        } else {
            return $numeros[floor($n/2)];
        }
    }

    public function moda($numeros) {
        $frecuencia = [];

        foreach ($numeros as $num) {
            $frecuencia[$num] = ($frecuencia[$num] ?? 0) + 1;
        }

        $max = max($frecuencia);

        // puede haber varias modas
        $modas = [];
        foreach ($frecuencia as $num => $freq) {
            if ($freq == $max) {
                $modas[] = $num;
            }
        }

        return $modas;
    }
}