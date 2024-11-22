<?php
include_once('../config/db.php');

class Genre {
    private $conn;

    public function __construct() {
        $this->conn = $GLOBALS['conn'];
    }

    // Crear un género
    public function create($name) {
        $sql = "INSERT INTO genre (NAME) VALUES (?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$name]);
    }

    // Obtener todos los géneros
    public function getAll() {
        $sql = "SELECT * FROM genre";
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener un género por ID
    public function getById($id_genre) {
        $sql = "SELECT * FROM genre WHERE ID_GENRE = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id_genre]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Actualizar un género
    public function update($id_genre, $name) {
        $sql = "UPDATE genre SET NAME = ? WHERE ID_GENRE = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$name, $id_genre]);
    }

    // Eliminar un género
    public function delete($id_genre) {
        $sql = "DELETE FROM genre WHERE ID_GENRE = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id_genre]);
    }
}
?>
