<?php require __DIR__ . "/../layout/header.php"; ?>

<h2>Operaciones con Conjuntos</h2>

<form method="POST">

    <input
        type="text"
        name="conjuntoA"
        placeholder="A: 1,2,3,4"
        required>

    <input
        type="text"
        name="conjuntoB"
        placeholder="B: 3,4,5,6"
        required>

    <button type="submit">Calcular</button>
</form>

<?php if (isset($union) && count($union) > 0): ?>

    <h3>Resultados:</h3>

    <p>
        <strong>Unión:</strong>
        <?= implode(", ", $union ?? []) ?>
    </p>

    <p>
        <strong>Intersección:</strong>
        <?= implode(", ", $inter ?? []) ?>
    </p>

    <p>
        <strong>A - B:</strong>
        <?= implode(", ", $diffAB ?? []) ?>
    </p>

    <p>
        <strong>B - A:</strong>
        <?= implode(", ", $diffBA ?? []) ?>
    </p>

<?php endif; ?>

<?php require __DIR__ . "/../layout/footer.php"; ?>