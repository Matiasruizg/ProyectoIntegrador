<?php
// controllers/BodegaController.php
include_once __DIR__ . '/../models/Bodega.php';

class BodegaController {
    private $bodega;

    public function __construct($pdo) {
        $this->bodega = new Bodega($pdo);
    }

    public function index() {
        $bodegas = $this->bodega->getAll();
        include __DIR__ . '/../views/bodega/index.php';
    }

    public function show($id) {
        $bodega = $this->bodega->getById($id);
        include __DIR__ . '/../views/bodega/show.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'prod_id' => $_POST['prod_id'],
                'prod_stock' => $_POST['prod_stock'],
                'suc_id' => $_POST['suc_id']
            ];
            $this->bodega->create($data);
            header('Location: /ProyectoIntegrador/bodega');
            exit();
        } else {
            include __DIR__ . '/../views/bodega/create.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'prod_id' => $_POST['prod_id'],
                'prod_stock' => $_POST['prod_stock'],
                'suc_id' => $_POST['suc_id']
            ];
            $this->bodega->update($id, $data);
            header('Location: /ProyectoIntegrador/bodega');
            exit();
        } else {
            $bodega = $this->bodega->getById($id);
            include __DIR__ . '/../views/bodega/edit.php';
        }
    }

    public function delete($id) {
        $this->bodega->delete($id);
        header('Location: /ProyectoIntegrador/bodega');
        exit();
    }
}
?>
