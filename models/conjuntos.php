<?php
class Conjuntos {

    public function limpiar($arr) {
        // quitar duplicados y reindexar
        return array_values(array_unique($arr));
    }

    public function union($A, $B) {
        return $this->limpiar(array_merge($A, $B));
    }

    public function interseccion($A, $B) {
        return array_values(array_intersect($A, $B));
    }

    public function diferenciaAB($A, $B) {
        return array_values(array_diff($A, $B));
    }

    public function diferenciaBA($A, $B) {
        return array_values(array_diff($B, $A));
    }
}