<?php
// index.php
include_once 'config.php';
include_once 'controllers/BodegaController.php';

$controller = new BodegaController($pdo);

$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($request) {
    case '/':
        echo "Bienvenido a la aplicación CRUD.";
        break;
    case '/bodega':
        $controller->index();
        break;
    case '/bodega/create':
        $controller->create();
        break;
    case (preg_match('/\/bodega\/edit\/(\d+)/', $request, $matches) ? true : false):
        $controller->edit($matches[1]);
        break;
    case (preg_match('/\/bodega\/delete\/(\d+)/', $request, $matches) ? true : false):
        $controller->delete($matches[1]);
        break;
    case (preg_match('/\/bodega\/show\/(\d+)/', $request, $matches) ? true : false):
        $controller->show($matches[1]);
        break;
    default:
        http_response_code(404);
        echo 'Page not found';
        break;
}
?>
