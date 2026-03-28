<?php require $_SERVER['DOCUMENT_ROOT'] . "/taller_php/views/layout/header.php"; ?>

<h2>Conversor Decimal a Binario</h2>

<form method="POST">
    <input
        type="number"
        name="numero"
        placeholder="Ingrese número entero"
        required
        min="0">
    <button type="submit">Convertir</button>
</form>

<?php if ($resultado !== null): ?>

    <h3>Resultado:</h3>
    <p><?= $resultado ?></p>

<?php endif; ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/taller_php/views/layout/footer.php"; ?>