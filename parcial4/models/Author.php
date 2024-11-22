<?php
include_once('../config/db.php');

class Author {
    private $conn;

    public function __construct() {
        $this->conn = $GLOBALS['conn'];
    }

    // Crear un autor
    public function create($full_name, $date_of_birth, $date_of_death) {
        $sql = "INSERT INTO author (FULL_NAME, DATE_OF_BIRTH, DATE_OF_DEATH) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$full_name, $date_of_birth, $date_of_death]);
    }

    // Obtener todos los autores
    public function getAll() {
        $sql = "SELECT * FROM author";
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener un autor por ID
    public function getById($id_author) {
        $sql = "SELECT * FROM author WHERE ID_AUTHOR = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id_author]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Actualizar un autor
    public function update($id_author, $full_name, $date_of_birth, $date_of_death) {
        $sql = "UPDATE author SET FULL_NAME = ?, DATE_OF_BIRTH = ?, DATE_OF_DEATH = ? WHERE ID_AUTHOR = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$full_name, $date_of_birth, $date_of_death, $id_author]);
    }

    // Eliminar un autor
    public function delete($id_author) {
        $sql = "DELETE FROM author WHERE ID_AUTHOR = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id_author]);
    }
}
?>
