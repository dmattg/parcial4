<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Gestión de Libros</title>
</head>
<body>
    <h1>Gestión de Libros</h1>

    <a href="index.php">
        <button>Menú Principal</button>
    </a>

    <a href="index.php?action=create&entity=book">
        <button>Agregar Libro</button>
    </a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Año de Publicación</th>
                <th>Autor</th>
                <th>Género</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?php echo $book['ID_BOOK']; ?></td>
                    <td><?php echo $book['TITLE']; ?></td>
                    <td><?php echo $book['DESCRIPTION']; ?></td>
                    <td><?php echo $book['YEAR_PUBLICATION']; ?></td>
                    <td><?php echo $book['ID_AUTHOR']; ?></td>
                    <td><?php echo $book['ID_GENRE']; ?></td>
                    <td>
                        <a href="index.php?action=update&entity=book&id=<?php echo $book['ID_BOOK']; ?>">Actualizar</a>
                        <a href="index.php?action=delete&entity=book&id=<?php echo $book['ID_BOOK']; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
