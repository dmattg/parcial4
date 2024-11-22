<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Crear Autor</title>
</head>
<body>
    <h1>Agregar Autor</h1>
    <form action="index.php?action=create&entity=author" method="POST">
        <label for="full_name">Nombre Completo:</label>
        <input type="text" id="full_name" name="full_name" required><br><br>
        
        <label for="date_of_birth">Fecha de Nacimiento:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" required><br><br>

        <label for="date_of_death">Fecha de Fallecimiento:</label>
        <input type="date" id="date_of_death" name="date_of_death"><br><br>

        <button type="submit">Crear Autor</button>
    </form>
    <br>
    <a href="index.php?action=read&entity=author">Volver a la lista de autores</a>
</body>
</html>
