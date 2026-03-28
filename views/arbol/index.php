<?php require $_SERVER['DOCUMENT_ROOT'] . "/taller_php/views/layout/header.php"; ?>

<h2>Construcción de Árbol Binario</h2>

<form method="POST">

    <label>Preorden:</label>
    <input type="text" name="preorden" placeholder="A,B,D,E,C">

    <label>Inorden:</label>
    <input type="text" name="inorden" placeholder="D,B,E,A,C">

    <label>Postorden:</label>
    <input type="text" name="postorden" placeholder="D,E,B,C,A">

    <button type="submit">Construir Árbol</button>
</form>

<?php if (!empty($error)): ?>
    <p style="color:red;"><?= $error ?></p>
<?php endif; ?>

<?php if (!empty($html)): ?>
    <h3>Árbol generado:</h3>
    <div class="tree">
        <ul>
            <?= $html ?>
        </ul>
    </div>
<?php endif; ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/taller_php/views/layout/footer.php"; ?>