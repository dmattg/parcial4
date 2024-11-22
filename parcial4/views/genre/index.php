<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Gestión de Géneros</title>
</head>
<body>
    <h1>Gestión de Géneros</h1>

    <a href="index.php">
        <button>Menú Principal</button>
    </a>

    <a href="index.php?action=create&entity=genre">
        <button>Agregar Género</button>
    </a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($genres as $genre): ?>
                <tr>
                    <td><?php echo $genre['ID_GENRE']; ?></td>
                    <td><?php echo $genre['NAME']; ?></td>
                    <td>
                        <a href="index.php?action=update&entity=genre&id=<?php echo $genre['ID_GENRE']; ?>">Actualizar</a>
                        <a href="index.php?action=delete&entity=genre&id=<?php echo $genre['ID_GENRE']; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
