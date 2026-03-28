<?php require __DIR__ . "/../layout/header.php"; ?>

<h2>Generador de Acrónimo</h2>

<form method="POST">
    <input type="text" name="texto" placeholder="Ingrese frase" required>
    <button type="submit">Generar</button>
</form>

<?php if ($resultado !== null): ?>
    <h3>Resultado: <?= $resultado ?></h3>
<?php endif; ?>

<?php require __DIR__ . "/../layout/footer.php"; ?>