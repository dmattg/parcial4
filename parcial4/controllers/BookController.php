<?php
include_once('../models/Book.php');
include_once('../controllers/AuthorController.php');
include_once('../controllers/GenreController.php');

class BookController {
    private $bookModel;

    // Constructor que inicializa el modelo
    public function __construct() {
        $this->bookModel = new Book();
    }

    // Crear un libro
    public function create($title = null, $description = null, $year_publication = null, $id_author = null, $id_genre = null) {
        // Si se reciben los datos de POST, crear el libro
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->bookModel->create($title, $description, $year_publication, $id_author, $id_genre);
            header('Location: index.php?action=read&entity=book');
            exit;
        }

        // Si no es un POST, obtener los autores y géneros para mostrarlos en el formulario
        $authorController = new AuthorController();
        $authors = $authorController->read();  // Obtener los autores
        $genreController = new GenreController();
        $genres = $genreController->read();  // Obtener los géneros

        // Incluir la vista para crear el libro
        include_once('../views/book/create.php');
    }

    // Leer todos los libros
    public function read() {
        return $this->bookModel->getAll();
    }

    // Obtener un libro por ID
    public function getById($id_book) {
        return $this->bookModel->getById($id_book);
    }

    // Actualizar un libro
    public function update($id_book, $title, $description, $year_publication, $id_author, $id_genre) {
        $this->bookModel->update($id_book, $title, $description, $year_publication, $id_author, $id_genre);
    }

    // Eliminar un libro
    public function delete($id_book) {
        $this->bookModel->delete($id_book);
    }
}
?>
