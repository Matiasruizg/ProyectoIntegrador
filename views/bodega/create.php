
<!DOCTYPE html>
<html>
<head>
    <title>Create Bodega</title>
</head>
<body>
    <h1>Create Bodega</h1>
    <form action="/bodega/create" method="post">
        <label for="prod_id">Product ID:</label>
        <input type="text" name="prod_id" id="prod_id">
        <br>
        <label for="prod_stock">Stock:</label>
        <input type="text" name="prod_stock" id="prod_stock">
        <br>
        <label for="suc_id">Sucursal ID:</label>
        <input type="text" name="suc_id" id="suc_id">
        <br>
        <button type="submit">Create</button>
    </form>
</body>
</html>
