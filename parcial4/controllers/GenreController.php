<?php
include_once('../models/Genre.php');

class GenreController {
    private $genreModel;

    // Constructor que inicializa el modelo
    public function __construct() {
        $this->genreModel = new Genre();
    }

    // Crear un género
    public function create($name) {
        $this->genreModel->create($name);
    }

    // Leer todos los géneros
    public function read() {
        return $this->genreModel->getAll();
    }

    // Obtener un género por ID
    public function getById($id_genre) {
        return $this->genreModel->getById($id_genre);
    }

    // Actualizar un género
    public function update($id_genre, $name) {
        $this->genreModel->update($id_genre, $name);
    }

    // Eliminar un género
    public function delete($id_genre) {
        $this->genreModel->delete($id_genre);
    }
}
?>
