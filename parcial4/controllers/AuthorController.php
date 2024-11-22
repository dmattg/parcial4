<?php
include_once('../models/Author.php');

class AuthorController {
    private $authorModel;

    // Constructor que inicializa el modelo
    public function __construct() {
        $this->authorModel = new Author();  // Creamos una instancia del modelo Author
    }

    // Crear un autor
    public function create($full_name, $date_of_birth, $date_of_death) {
        // Llamamos al modelo para crear el autor
        $this->authorModel->create($full_name, $date_of_birth, $date_of_death);
    }

    // Leer todos los autores
    public function read() {
        // Obtener todos los autores
        return $this->authorModel->getAll(); 
        // Incluir la vista que muestra todos los autores
        include_once('../views/author/index.php');
    }

    // Obtener un autor por ID
    public function getById($id_author) {
        // Devolver el autor que tiene ese ID
        return $this->authorModel->getById($id_author);
    }

    // Actualizar un autor
    public function update($id_author, $full_name, $date_of_birth, $date_of_death) {
        // Llamamos al modelo para actualizar los datos del autor
        $this->authorModel->update($id_author, $full_name, $date_of_birth, $date_of_death);
    }

    // Eliminar un autor
    public function delete($id_author) {
        // Llamamos al modelo para eliminar al autor
        $this->authorModel->delete($id_author);
    }
}
?>
