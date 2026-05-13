<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Taller PHP</title>

    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">

</head>

<body>

    <?php
    $current = $_GET['route'] ?? 'home';
    ?>

    <header>

        <nav>

            <a href="<?= BASE_URL ?>"
                class="<?= $current == 'home' ? 'active' : '' ?>">
                Inicio
            </a>

            <a href="<?= BASE_URL ?>?route=acronimo"
                class="<?= $current == 'acronimo' ? 'active' : '' ?>">
                Acrónimo
            </a>

            <a href="<?= BASE_URL ?>?route=fibonacci"
                class="<?= $current == 'fibonacci' ? 'active' : '' ?>">
                Fibonacci / Factorial
            </a>

            <a href="<?= BASE_URL ?>?route=estadistica"
                class="<?= $current == 'estadistica' ? 'active' : '' ?>">
                Estadística
            </a>

            <a href="<?= BASE_URL ?>?route=conjuntos"
                class="<?= $current == 'conjuntos' ? 'active' : '' ?>">
                Conjuntos
            </a>

            <a href="<?= BASE_URL ?>?route=binario"
                class="<?= $current == 'binario' ? 'active' : '' ?>">
                Binario
            </a>

            <a href="<?= BASE_URL ?>?route=arbol"
                class="<?= $current == 'arbol' ? 'active' : '' ?>">
                Árbol
            </a>

            <a href="<?= BASE_URL ?>?route=calculadora"
                class="<?= $current == 'calculadora' ? 'active' : '' ?>">
                Calculadora
            </a>

        </nav>

    </header>

    <main>