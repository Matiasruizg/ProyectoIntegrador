<?php
include_once 'config.php';

class Bodega {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query('SELECT * FROM bodega');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM bodega WHERE bod_id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->pdo->prepare('INSERT INTO bodega (prod_id, prod_stock, suc_id) VALUES (?, ?, ?)');
        return $stmt->execute([$data['prod_id'], $data['prod_stock'], $data['suc_id']]);
    }

    public function update($id, $data) {
        $stmt = $this->pdo->prepare('UPDATE bodega SET prod_id = ?, prod_stock = ?, suc_id = ? WHERE bod_id = ?');
        return $stmt->execute([$data['prod_id'], $data['prod_stock'], $data['suc_id'], $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare('DELETE FROM bodega WHERE bod_id = ?');
        return $stmt->execute([$id]);
    }
}
?>
