<?php require $_SERVER['DOCUMENT_ROOT'] . "/taller_php/views/layout/header.php"; ?>

<h2>Fibonacci / Factorial</h2>

<form method="POST">
    <input type="number" name="numero" placeholder="Ingrese un número" required min="1">

    <select name="tipo">
        <option value="fibonacci">Fibonacci</option>
        <option value="factorial">Factorial</option>
    </select>

    <button type="submit">Calcular</button>
</form>

<?php if (!empty($resultado)): ?>
    <h3>Resultado:</h3>
    <p>
        <?= implode(" → ", $resultado) ?>
    </p>
<?php endif; ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/taller_php/views/layout/footer.php"; ?>