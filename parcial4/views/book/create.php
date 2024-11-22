<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Crear Libro</title>
</head>
<body>
    <h1>Agregar Nuevo Libro</h1>
    <form action="index.php?action=create&entity=book" method="POST">
        <label for="title">Título del Libro:</label>
        <input type="text" id="title" name="title" required><br><br>
        
        <label for="description">Descripción:</label>
        <input type="text" id="description" name="description"><br><br>

        <label for="year_publication">Año de Publicación:</label>
        <input type="number" id="year_publication" name="year_publication" required><br><br>

        <label for="id_author">Autor:</label>
        <select name="id_author" id="id_author" required>
            <?php if (!empty($authors)): ?>
                <?php foreach ($authors as $author): ?>
                    <option value="<?php echo $author['ID_AUTHOR']; ?>"><?php echo $author['FULL_NAME']; ?></option>
                <?php endforeach; ?>
            <?php else: ?>
                <option value="">No hay autores disponibles</option>
            <?php endif; ?>
        </select><br><br>

        <label for="id_genre">Género:</label>
        <select name="id_genre" id="id_genre" required>
            <?php if (!empty($genres)): ?>
                <?php foreach ($genres as $genre): ?>
                    <option value="<?php echo $genre['ID_GENRE']; ?>"><?php echo $genre['NAME']; ?></option>
                <?php endforeach; ?>
            <?php else: ?>
                <option value="">No hay géneros disponibles</option>
            <?php endif; ?>
        </select><br><br>

        <button type="submit">Crear Libro</button>
    </form>
    <br>
    <a href="index.php?action=read&entity=book">Volver a la lista de libros</a>
</body>
</html>
