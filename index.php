<?php

$route = $_GET['route'] ?? 'home';

switch ($route) {

    case 'acronimo':
        require_once "controllers/AcronimoController.php";
        $controller = new AcronimoController();
        $controller->index();
        break;

    case 'fibonacci':
        require_once "controllers/FibonacciFactorialController.php";
        $controller = new FibonacciFactorialController();
        $controller->index();
        break;

    case 'estadistica':
        require_once "controllers/EstadisticaController.php";
        $controller = new EstadisticaController();
        $controller->index();
        break;

    case 'conjuntos':
        require_once "controllers/ConjuntosController.php";
        $controller = new ConjuntosController();
        $controller->index();
        break;

    case 'binario':
        require_once "controllers/BinarioController.php";
        $controller = new BinarioController();
        $controller->index();
        break;

    case 'arbol':
        require_once "controllers/ArbolController.php";
        $controller = new ArbolController();
        $controller->index();
        break;

    case 'calculadora':
        require_once "controllers/CalculadoraController.php";
        $controller = new CalculadoraController();
        $controller->index();
        break;

    default:
        require $_SERVER['DOCUMENT_ROOT'] . "/taller_php/views/layout/header.php";



        require $_SERVER['DOCUMENT_ROOT'] . "/taller_php/views/layout/footer.php";

        break;
}
