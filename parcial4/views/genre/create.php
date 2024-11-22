<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Crear Género</title>
</head>
<body>
    <h1>Agregar Género</h1>
    <form action="index.php?action=create&entity=genre" method="POST">
        <label for="name">Nombre del Género:</label>
        <input type="text" id="name" name="name" required><br><br>

        <button type="submit">Crear Género</button>
    </form>
    <br>
    <a href="index.php?action=read&entity=genre">Volver a la lista de géneros</a>
</body>
</html>
