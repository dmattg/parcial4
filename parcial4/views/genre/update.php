<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Género</title>
    <link rel="stylesheet" href="../public/css/style.css"> <!-- Ruta a tu archivo CSS -->
</head>
<body>

    <h1>Actualizar Género</h1>

    <form method="post" action="index.php?action=update&entity=genre" class="genre-form">
        <input type="hidden" name="id_genre" value="<?php echo $genre['ID_GENRE']; ?>">

        <div class="form-group">
            <label for="name" class="form-label">Nombre del género:</label>
            <input type="text" id="name" name="name" value="<?php echo $genre['NAME']; ?>" class="form-input" required>
        </div>

        <div class="form-group">
            <input type="submit" value="Actualizar Género" class="submit-btn">
        </div>
    </form>

    <!-- Botón para regresar a la lista de géneros -->
    <div class="back-button">
        <a href="index.php?action=read&entity=genre" class="btn-back">
            <button>Volver a la lista de géneros</button>
        </a>
    </div>

</body>
</html>

