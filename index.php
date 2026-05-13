<?php

$route = $_GET['route'] ?? 'home';

switch ($route) {

    case 'acronimo':

        require_once __DIR__ . "/controllers/AcronimoController.php";

        $controller = new AcronimoController();
        $controller->index();

        break;

    case 'fibonacci':

        require_once __DIR__ . "/controllers/FibonacciFactorialController.php";

        $controller = new FibonacciFactorialController();
        $controller->index();

        break;

    case 'estadistica':

        require_once __DIR__ . "/controllers/EstadisticaController.php";

        $controller = new EstadisticaController();
        $controller->index();

        break;

    case 'conjuntos':

        require_once __DIR__ . "/controllers/ConjuntosController.php";

        $controller = new ConjuntosController();
        $controller->index();

        break;

    case 'binario':

        require_once __DIR__ . "/controllers/BinarioController.php";

        $controller = new BinarioController();
        $controller->index();

        break;

    case 'arbol':

        require_once __DIR__ . "/controllers/ArbolController.php";

        $controller = new ArbolController();
        $controller->index();

        break;

    case 'calculadora':

        require_once __DIR__ . "/controllers/CalculadoraController.php";

        $controller = new CalculadoraController();
        $controller->index();

        break;

    default:

        require __DIR__ . "/views/layout/header.php";

?>

        <h1>Taller PHP - Aplicaciones</h1>

<?php

        require __DIR__ . "/views/layout/footer.php";

        break;
}