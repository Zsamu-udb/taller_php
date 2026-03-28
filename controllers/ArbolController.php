<?php
require_once __DIR__ . "/../models/Arbol.php";

class ArbolController {

    public function index() {

        $html = "";
        $error = "";

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $pre = $_POST["preorden"] ?? "";
            $in  = $_POST["inorden"] ?? "";
            $post = $_POST["postorden"] ?? "";

            $preorden = $pre ? array_map('trim', explode(",", $pre)) : [];
            $inorden  = $in ? array_map('trim', explode(",", $in)) : [];
            $postorden = $post ? array_map('trim', explode(",", $post)) : [];

            $arbol = new Arbol();
            $raiz = null;

            if (!empty($preorden) && !empty($inorden)) {
                $raiz = $arbol->construirPreIn($preorden, $inorden);

            } elseif (!empty($inorden) && !empty($postorden)) {
                $raiz = $arbol->construirInPost($inorden, $postorden);

            } else {
                $error = "Debe ingresar al menos: Preorden + Inorden o Inorden + Postorden";
            }

            if ($raiz) {
                $html = $arbol->renderHTML($raiz);
            }
        }

        require __DIR__ . "/../views/arbol/index.php";
    }
}