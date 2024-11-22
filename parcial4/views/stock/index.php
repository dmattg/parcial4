<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Gestión de Stock</title>
</head>
<body>
    <h1>Gestión de Stock</h1>

    <a href="index.php">
        <button>Menú Principal</button>
    </a>

    <a href="index.php?action=create&entity=stock">
        <button>Agregar Stock</button>
    </a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Libro</th>
                <th>Cantidad Total</th>
                <th>Notas</th>
                <th>Último Inventario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stocks as $stock): ?>
                <tr>
                    <td><?php echo $stock['ID_STOCK']; ?></td>
                    <td><?php echo $stock['ID_BOOK']; ?></td>
                    <td><?php echo $stock['TOTAL_STOCK']; ?></td>
                    <td><?php echo $stock['NOTES']; ?></td>
                    <td><?php echo $stock['LAST_INVENTORY']; ?></td>
                    <td>
                        <a href="index.php?action=update&entity=stock&id=<?php echo $stock['ID_STOCK']; ?>">Actualizar</a>
                        <a href="index.php?action=delete&entity=stock&id=<?php echo $stock['ID_STOCK']; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
