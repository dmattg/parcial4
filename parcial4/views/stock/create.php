<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Crear Stock</title>
</head>
<body>
    <h1>Agregar Stock</h1>
    <form action="index.php?action=create&entity=stock" method="POST">
        <label for="id_book">Libro:</label>
        <select name="id_book" id="id_book">
            <?php foreach ($books as $book): ?>
                <option value="<?php echo $book['ID_BOOK']; ?>"><?php echo $book['TITLE']; ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="total_stock">Cantidad Total:</label>
        <input type="number" id="total_stock" name="total_stock" required><br><br>

        <label for="notes">Notas:</label>
        <textarea id="notes" name="notes"></textarea><br><br>

        <label for="last_inventory">Última Inventario:</label>
        <input type="date" id="last_inventory" name="last_inventory" required><br><br>

        <button type="submit">Crear Stock</button>
    </form>
    <br>
    <a href="index.php?action=read&entity=stock">Volver a la lista de stocks</a>
</body>
</html>
