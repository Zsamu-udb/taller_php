<?php require $_SERVER['DOCUMENT_ROOT'] . "/taller_php/views/layout/header.php"; ?>

<h2>Calculadora</h2>

<!-- FORM CALCULAR -->
<form method="POST">
    <input type="number" step="any" name="a" required placeholder="Número A">
    <input type="number" step="any" name="b" required placeholder="Número B">

    <select name="operacion">
        <option value="+">Suma</option>
        <option value="-">Resta</option>
        <option value="*">Multiplicación</option>
        <option value="/">División</option>
        <option value="%">Porcentaje</option>
    </select>

    <button type="submit">Calcular</button>
</form>

<br>

<!-- FORM LIMPIAR (SEPARADO) -->
<form method="POST">
    <button type="submit" name="limpiar">Limpiar Historial</button>
</form>


<?php if ($resultado === "Error"): ?>
    <p style="color:red;">No se puede dividir entre 0</p>
<?php elseif ($resultado !== null): ?>
    <h3>Resultado: <?= $resultado ?></h3>
<?php endif; ?>

<h3>Historial</h3>

<table border="1" cellpadding="5">
    <tr>
        <th>Operación</th>
        <th>Resultado</th>
        <th>Fecha</th>
    </tr>

    <?php while($row = $historial->fetch_assoc()): ?>
        <tr>
            <td><?= $row['operacion'] ?></td>
            <td><?= $row['resultado'] ?></td>
            <td><?= $row['fecha'] ?></td>
        </tr>
    <?php endwhile; ?>

</table>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/taller_php/views/layout/footer.php"; ?>