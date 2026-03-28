<?php
require_once __DIR__ . "/../config/db.php";

class Calculadora
{

    private $db;

    public function __construct()
    {
        $this->db = (new DB())->conectar();
    }

    public function operar($a, $b, $op)
    {

        switch ($op) {
            case '+':
                $res = $a + $b;
                break;
            case '-':
                $res = $a - $b;
                break;
            case '*':
                $res = $a * $b;
                break;
            case '/':
                $res = ($b != 0) ? $a / $b : "Error";
                break;
            case '%':
                $res = ($a * $b) / 100;
                break;
        }

        $operacion = "$a $op $b";

        $stmt = $this->db->prepare("INSERT INTO historial (operacion, resultado) VALUES (?, ?)");
        $stmt->bind_param("ss", $operacion, $res);
        $stmt->execute();

        return $res;
    }

    public function obtenerHistorial()
    {
        return $this->db->query("SELECT * FROM historial ORDER BY id DESC");
    }

    public function limpiarHistorial()
    {
        $this->db->query("TRUNCATE historial");
    }
}
