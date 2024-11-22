<?php
include_once('../models/Stock.php');

class StockController {
    private $stockModel;

    // Constructor que inicializa el modelo
    public function __construct() {
        $this->stockModel = new Stock();
    }

    // Crear un stock
    public function create($id_book, $total_stock, $notes, $last_inventory) {
        $this->stockModel->create($id_book, $total_stock, $notes, $last_inventory);
    }

    // Leer todos los stocks
    public function read() {
        return $this->stockModel->getAll();
    }

    // Obtener un stock por ID
    public function getById($id_stock) {
        return $this->stockModel->getById($id_stock);
    }

    // Actualizar un stock
    public function update($id_stock, $id_book, $total_stock, $notes, $last_inventory) {
        $this->stockModel->update($id_stock, $id_book, $total_stock, $notes, $last_inventory);
    }

    // Eliminar un stock
    public function delete($id_stock) {
        $this->stockModel->delete($id_stock);
    }
}
?>
