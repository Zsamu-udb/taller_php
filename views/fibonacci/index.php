<?php require $_SERVER['DOCUMENT_ROOT'] . "/taller_php/views/layout/header.php"; ?>

<h2>Fibonacci / Factorial</h2>

<form method="POST">

    <input type="number" name="numero" required placeholder="Ingrese un número">

    <select name="operacion">
        <option value="fibonacci">Fibonacci</option>
        <option value="factorial">Factorial</option>
    </select>

    <button type="submit">Calcular</button>

</form>

<?php if ($resultado !== null): ?>

    <h3>Resultado:</h3>

    <?php if (is_array($resultado)): ?>
        <p><?= implode(", ", $resultado) ?></p>
    <?php else: ?>
        <p><?= $resultado ?></p>
    <?php endif; ?>

<?php endif; ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/taller_php/views/layout/footer.php"; ?>