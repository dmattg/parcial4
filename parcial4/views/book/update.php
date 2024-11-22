<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Actualizar Libro</title>
</head>
<body>
    <h1>Actualizar Libro</h1>
    
    <form method="post" action="index.php?action=update&entity=book">
        <input type="hidden" name="id_book" value="<?php echo $book['ID_BOOK']; ?>">

        <label for="title">Título:</label>
        <input type="text" id="title" name="title" value="<?php echo $book['TITLE']; ?>" required><br><br>

        <label for="description">Descripción:</label>
        <input type="text" id="description" name="description" value="<?php echo $book['DESCRIPTION']; ?>"><br><br>

        <label for="year_publication">Año de Publicación:</label>
        <input type="number" id="year_publication" name="year_publication" value="<?php echo $book['YEAR_PUBLICATION']; ?>" required><br><br>

        <label for="id_author">Autor:</label>
        <select name="id_author" id="id_author">
            <?php foreach ($authors as $author): ?>
                <option value="<?php echo $author['ID_AUTHOR']; ?>" <?php if ($author['ID_AUTHOR'] == $book['ID_AUTHOR']) echo 'selected'; ?>>
                    <?php echo $author['FULL_NAME']; ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="id_genre">Género:</label>
        <select name="id_genre" id="id_genre">
            <?php foreach ($genres as $genre): ?>
                <option value="<?php echo $genre['ID_GENRE']; ?>" <?php if ($genre['ID_GENRE'] == $book['ID_GENRE']) echo 'selected'; ?>>
                    <?php echo $genre['NAME']; ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <input type="submit" value="Actualizar Libro">
    </form>

    <!-- Botón para regresar a la lista de libros -->
    <a href="index.php?action=read&entity=book">
        <button>Volver a la lista de libros</button>
    </a>
</body>
</html>
