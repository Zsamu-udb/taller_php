<?php

$route = $_GET['route'] ?? 'home';

switch ($route) {

    case 'acronimo':
        require_once "controllers/AcronimoController.php";
        $controller = new AcronimoController();
        $controller->index();
        break;

    case 'math':
        require_once "controllers/MathController.php";
        $controller = new MathController();
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
        echo "<h1>Bienvenido al Taller PHP</h1>";
        echo "<a href='?route=acronimo'>Ir a Acrónimo</a>";
        echo "<a href='?route=math'>Ir a Fibonacci</a>";
        echo "<a href='?route=estadistica'>Ir a Estadistica</a>";
        echo "<a href='?route=conjuntos'>Ir a Conjuntos</a>";
        echo "<a href='?route=binario'>Ir a Binario</a>";
        echo "<a href='?route=arbol'>Ir a Arbol</a>";
        echo "<a href='?route=calculadora'>Ir a Calculadora</a>";

        break;
}
