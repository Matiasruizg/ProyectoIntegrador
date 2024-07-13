
<!DOCTYPE html>
<html>
<head>
    <title>Bodega List</title>
</head>
<body>
    <h1>Bodega List</h1>
    <a href="/bodega/create">Create New</a>
    <table>
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
                    <a href="/bodega/show/<?= $bodega['bod_id'] ?>">Show</a>
                    <a href="/bodega/edit/<?= $bodega['bod_id'] ?>">Edit</a>
                    <a href="/bodega/delete/<?= $bodega['bod_id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
