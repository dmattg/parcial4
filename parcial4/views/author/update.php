<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Autor</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

    <h1>Actualizar Autor</h1>

    <form method="post" action="index.php?action=update&entity=author" class="author-form">
        <input type="hidden" name="id_author" value="<?php echo $author['ID_AUTHOR']; ?>">

        <div class="form-group">
            <label for="full_name" class="form-label">Nombre completo:</label>
            <input type="text" id="full_name" name="full_name" value="<?php echo $author['FULL_NAME']; ?>" class="form-input" required>
        </div>

        <div class="form-group">
            <label for="date_of_birth" class="form-label">Fecha de nacimiento:</label>
            <input type="date" id="date_of_birth" name="date_of_birth" value="<?php echo $author['DATE_OF_BIRTH']; ?>" class="form-input" required>
        </div>

        <div class="form-group">
            <label for="date_of_death" class="form-label">Fecha de muerte:</label>
            <input type="date" id="date_of_death" name="date_of_death" value="<?php echo $author['DATE_OF_DEATH']; ?>" class="form-input">
        </div>

        <div class="form-group">
            <input type="submit" value="Actualizar Autor" class="submit-btn">
        </div>
    </form>

    <!-- Botón para regresar a la lista de autores -->
    <div class="back-button">
        <a href="index.php?action=read&entity=author" class="btn-back">
            <button>Volver a la lista de autores</button>
        </a>
    </div>

</body>
</html>

