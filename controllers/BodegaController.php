
<?php
include_once 'models/Bodega.php';

class BodegaController {
    private $bodega;

    public function __construct($pdo) {
        $this->bodega = new Bodega($pdo);
    }

    public function index() {
        $bodegas = $this->bodega->getAll();
        include 'views/bodega/index.php';
    }

    public function show($id) {
        $bodega = $this->bodega->getById($id);
        include 'views/bodega/show.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'prod_id' => $_POST['prod_id'],
                'prod_stock' => $_POST['prod_stock'],
                'suc_id' => $_POST['suc_id']
            ];
            $this->bodega->create($data);
            header('Location: /bodega');
            exit();
        } else {
            include 'views/bodega/create.php';
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
            header('Location: /bodega');
            exit();
        } else {
            $bodega = $this->bodega->getById($id);
            include 'views/bodega/edit.php';
        }
    }

    public function delete($id) {
        $this->bodega->delete($id);
        header('Location: /bodega');
        exit();
    }
}
?>
