<?php
// index.php
include_once __DIR__ . '/config.php';
include_once __DIR__ . '/controllers/BodegaController.php';

$request = $_SERVER['REQUEST_URI'];
$base_path = '/ProyectoIntegrador';

if (strpos($request, $base_path) === 0) {
    $request = substr($request, strlen($base_path));
}

switch (true) {
    case $request === '/bodega':
        $controller = new BodegaController($pdo);
        $controller->index();
        break;
    case $request === '/bodega/create':
        $controller = new BodegaController($pdo);
        $controller->create();
        break;
    case preg_match('#^/bodega/edit/(\d+)$#', $request, $matches):
        $controller = new BodegaController($pdo);
        $controller->edit($matches[1]);
        break;
    case preg_match('#^/bodega/delete/(\d+)$#', $request, $matches):
        $controller = new BodegaController($pdo);
        $controller->delete($matches[1]);
        break;
    case preg_match('#^/bodega/show/(\d+)$#', $request, $matches):
        $controller = new BodegaController($pdo);
        $controller->show($matches[1]);
        break;
    default:
        http_response_code(404);
        echo 'Page not found';
        break;
}
?>
