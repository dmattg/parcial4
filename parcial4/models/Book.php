<?php
include_once('../config/db.php');

class Book {
    private $conn;

    public function __construct() {
        $this->conn = $GLOBALS['conn'];
    }

    // Crear un libro
    public function create($title, $description, $year_publication, $id_author, $id_genre) {
        $sql = "INSERT INTO book (TITLE, DESCRIPTION, YEAR_PUBLICATION, ID_AUTHOR, ID_GENRE) 
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$title, $description, $year_publication, $id_author, $id_genre]);
    }

    // Obtener todos los libros
    public function getAll() {
        $sql = "SELECT * FROM book";
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener un libro por ID
    public function getById($id_book) {
        $sql = "SELECT * FROM book WHERE ID_BOOK = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id_book]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Actualizar un libro
    public function update($id_book, $title, $description, $year_publication, $id_author, $id_genre) {
        $sql = "UPDATE book SET TITLE = ?, DESCRIPTION = ?, YEAR_PUBLICATION = ?, ID_AUTHOR = ?, ID_GENRE = ? 
                WHERE ID_BOOK = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$title, $description, $year_publication, $id_author, $id_genre, $id_book]);
    }

    // Eliminar un libro
    public function delete($id_book) {
        $sql = "DELETE FROM book WHERE ID_BOOK = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id_book]);
    }
}
?>
