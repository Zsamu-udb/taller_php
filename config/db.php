<?php
class DB {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "taller_php";

    public function conectar() {
        return new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
}