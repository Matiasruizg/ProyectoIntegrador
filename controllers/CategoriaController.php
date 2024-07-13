<?php
require_once 'models/Categoria.php';

class CategoriaController {
    private $categoriaModel;

    public function __construct() {
        $this->categoriaModel = new Categoria();
    }

    // Mostrar todas las categorías
    public function index() {
        $categorias = $this->categoriaModel->getAll();
        require 'views/categoria/index.php';
    }

    // Mostrar el formulario para crear una categoría
    public function create() {
        require 'views/categoria/create.php';
    }

    // Procesar el formulario para crear una categoría
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $imagen = $_POST['imagen'];
            $this->categoriaModel->create($nombre, $imagen);
            header('Location: index.php?controller=categoria&action=index');
        }
    }

    // Mostrar el formulario para editar una categoría
    public function edit($id) {
        $categoria = $this->categoriaModel->getById($id);
        require 'views/categoria/edit.php';
    }

    // Procesar el formulario para actualizar una categoría
    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $imagen = $_POST['imagen'];
            $this->categoriaModel->update($id, $nombre, $imagen);
            header('Location: index.php?controller=categoria&action=index');
        }
    }

    // Eliminar una categoría
    public function delete($id) {
        $this->categoriaModel->delete($id);
        header('Location: index.php?controller=categoria&action=index');
    }
}
?>
