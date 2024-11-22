<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Actualizar Stock</title>
</head>
<body>
    <h1>Actualizar Stock</h1>
    
    <form method="post" action="index.php?action=update&entity=stock">
        <input type="hidden" name="id_stock" value="<?php echo $stock['ID_STOCK']; ?>">

        <label for="id_book">Libro:</label>
        <select name="id_book" id="id_book">
            <?php foreach ($books as $book): ?>
                <option value="<?php echo $book['ID_BOOK']; ?>" <?php if ($book['ID_BOOK'] == $stock['ID_BOOK']) echo 'selected'; ?>>
                    <?php echo $book['TITLE']; ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="total_stock">Cantidad Total:</label>
        <input type="number" id="total_stock" name="total_stock" value="<?php echo $stock['TOTAL_STOCK']; ?>" required><br><br>

        <label for="notes">Notas:</label>
        <textarea id="notes" name="notes"><?php echo $stock['NOTES']; ?></textarea><br><br>

        <label for="last_inventory">Último Inventario:</label>
        <input type="date" id="last_inventory" name="last_inventory" value="<?php echo $stock['LAST_INVENTORY']; ?>" required><br><br>

        <input type="submit" value="Actualizar Stock">
    </form>

    <!-- Botón para regresar a la lista de stocks -->
    <a href="index.php?action=read&entity=stock">
        <button>Volver a la lista de stocks</button>
    </a>
</body>
</html>
