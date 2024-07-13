
<!DOCTYPE html>
<html>
<head>
    <title>Show Bodega</title>
</head>
<body>
    <h1>Show Bodega</h1>
    <p>ID: <?= $bodega['bod_id'] ?></p>
    <p>Product ID: <?= $bodega['prod_id'] ?></p>
    <p>Stock: <?= $bodega['prod_stock'] ?></p>
    <p>Sucursal ID: <?= $bodega['suc_id'] ?></p>
    <a href="/bodega">Back to List</a>
</body>
</html>
