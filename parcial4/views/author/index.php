<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Gestión de Autores</title>
</head>
<body>
    <h1>Gestión de Autores</h1>

    <!-- Botón para volver al menú principal -->
    <a href="index.php">
        <button>Menú Principal</button>
    </a>

    <!-- Botón para crear un nuevo autor -->
    <a href="index.php?action=create&entity=author">
        <button>Agregar Autor</button>
    </a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha de Nacimiento</th>
                <th>Fecha de Muerte</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($authors as $author): ?>
                <tr>
                    <td><?php echo $author['ID_AUTHOR']; ?></td>
                    <td><?php echo $author['FULL_NAME']; ?></td>
                    <td><?php echo $author['DATE_OF_BIRTH']; ?></td>
                    <td><?php echo $author['DATE_OF_DEATH']; ?></td>
                    <td>
                        <a href="index.php?action=update&entity=author&id=<?php echo $author['ID_AUTHOR']; ?>">Actualizar</a>
                        <a href="index.php?action=delete&entity=author&id=<?php echo $author['ID_AUTHOR']; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
