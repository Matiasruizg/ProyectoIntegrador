<!-- views/bodega/index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Bodega List</title>
</head>
<body>
    <h1>Bodega List</h1>
    <a href="/ProyectoIntegrador/bodega/create">Create New</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Product ID</th>
            <th>Stock</th>
            <th>Sucursal ID</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($bodegas as $bodega): ?>
            <tr>
                <td><?= $bodega['bod_id'] ?></td>
                <td><?= $bodega['prod_id'] ?></td>
                <td><?= $bodega['prod_stock'] ?></td>
                <td><?= $bodega['suc_id'] ?></td>
                <td>
                    <a href="/ProyectoIntegrador/bodega/show/<?= $bodega['bod_id'] ?>">Show</a>
                    <a href="/ProyectoIntegrador/bodega/edit/<?= $bodega['bod_id'] ?>">Edit</a>
                    <a href="/ProyectoIntegrador/bodega/delete/<?= $bodega['bod_id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
