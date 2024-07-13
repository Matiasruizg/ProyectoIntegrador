<?php
require_once 'config.php'; // Asegúrate de que el archivo de configuración esté en la misma carpeta o ajusta la ruta

class Categoria {
    private $db;

    public function __construct() {
        global $pdo; // Usa la variable global $pdo definida en config.php
        $this->db = $pdo;
    }

    // Listar todas las categorías
    public function getAll() {
        $query = 'SELECT * FROM categorias';
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener una categoría por ID
    public function getById($id) {
        $query = 'SELECT * FROM categorias WHERE cat_id = :id';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Crear una nueva categoría
    public function create($nombre, $imagen) {
        $query = 'INSERT INTO categorias (cat_nombre, cat_imagen) VALUES (:nombre, :imagen)';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':imagen', $imagen);
        return $stmt->execute();
    }

    // Actualizar una categoría existente
    public function update($id, $nombre, $imagen) {
        $query = 'UPDATE categorias SET cat_nombre = :nombre, cat_imagen = :imagen WHERE cat_id = :id';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':imagen', $imagen);
        return $stmt->execute();
    }

    // Eliminar una categoría
    public function delete($id) {
        $query = 'DELETE FROM categorias WHERE cat_id = :id';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
?>
