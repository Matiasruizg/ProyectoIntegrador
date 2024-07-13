<!-- views/bodega/edit.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Bodega</title>
</head>
<body>
    <h1>Edit Bodega</h1>
    <form action="/ProyectoIntegrador/bodega/edit/<?= $bodega['bod_id'] ?>" method="post">
        <label for="prod_id">Product ID:</label>
        <input type="text" name="prod_id" id="prod_id" value="<?= $bodega['prod_id'] ?>">
        <br>
        <label for="prod_stock">Stock:</label>
        <input type="text" name="prod_stock" id="prod_stock" value="<?= $bodega['prod_stock'] ?>">
        <br>
        <label for="suc_id">Sucursal ID:</label>
        <input type="text" name="suc_id" id="suc_id" value="<?= $bodega['suc_id'] ?>">
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
