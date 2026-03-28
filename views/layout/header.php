<!DOCTYPE html>
<html>

<head>
    <title>Taller PHP</title>
    <link rel="stylesheet" href="/taller_php/css/style.css">
    <h1>Taller PHP - Aplicaciones</h1>

</head>

<body>
    
<?php
$current = $_GET['route'] ?? 'home';
?>
    <nav>
    <a href="/taller_php/index.php" 
       class="home <?= $current == 'home' ? 'active' : '' ?>">Inicio</a>

    <a href="?route=acronimo" 
       class="<?= $current == 'acronimo' ? 'active' : '' ?>">Acrónimo</a>

    <a href="?route=math" 
       class="<?= $current == 'math' ? 'active' : '' ?>">Fibonacci</a>

    <a href="?route=estadistica" 
       class="<?= $current == 'estadistica' ? 'active' : '' ?>">Estadística</a>

    <a href="?route=conjuntos" 
       class="<?= $current == 'conjuntos' ? 'active' : '' ?>">Conjuntos</a>

    <a href="?route=binario" 
       class="<?= $current == 'binario' ? 'active' : '' ?>">Binario</a>

    <a href="?route=arbol" 
       class="<?= $current == 'arbol' ? 'active' : '' ?>">Árbol</a>

    <a href="?route=calculadora" 
       class="<?= $current == 'calculadora' ? 'active' : '' ?>">Calculadora</a>
</nav>