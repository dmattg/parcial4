<?php
include_once('../config/db.php');

class Stock {
    private $conn;

    public function __construct() {
        $this->conn = $GLOBALS['conn'];
    }

    // Crear un stock
    public function create($id_book, $total_stock, $notes, $last_inventory) {
        $sql = "INSERT INTO stock (ID_BOOK, TOTAL_STOCK, NOTES, LAST_INVENTORY) 
                VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id_book, $total_stock, $notes, $last_inventory]);
    }

    // Obtener todos los stocks
    public function getAll() {
        $sql = "SELECT * FROM stock";
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener un stock por ID
    public function getById($id_stock) {
        $sql = "SELECT * FROM stock WHERE ID_STOCK = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id_stock]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Actualizar un stock
    public function update($id_stock, $id_book, $total_stock, $notes, $last_inventory) {
        $sql = "UPDATE stock SET ID_BOOK = ?, TOTAL_STOCK = ?, NOTES = ?, LAST_INVENTORY = ? 
                WHERE ID_STOCK = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id_book, $total_stock, $notes, $last_inventory, $id_stock]);
    }

    // Eliminar un stock
    public function delete($id_stock) {
        $sql = "DELETE FROM stock WHERE ID_STOCK = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id_stock]);
    }
}
?>
