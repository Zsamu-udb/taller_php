<?php require $_SERVER['DOCUMENT_ROOT'] . "/taller_php/views/layout/header.php"; ?>

<h2>Promedio, Media y Moda</h2>

<form method="POST">
    <input 
        type="text" 
        name="numeros" 
        placeholder="Ej: 1,2,3,4,5,5,6" 
        required
    >
    <button type="submit">Calcular</button>
</form>

<?php if ($promedio !== null): ?>

    <h3>Resultados:</h3>

    <p><strong>Promedio:</strong> <?= $promedio ?></p>
    <p><strong>Media:</strong> <?= $media ?></p>
    <p><strong>Moda:</strong> <?= implode(", ", $moda) ?></p>

<?php endif; ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/taller_php/views/layout/footer.php"; ?>