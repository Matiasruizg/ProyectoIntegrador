<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Categorías</title>
    <link rel="stylesheet" href="path/to/your/css/style.css">
</head>
<body>
    <h1>Lista de Categorías</h1>
    <a href="index.php?controller=categoria&action=create">Crear Nueva Categoría</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorias as $categoria): ?>
            <tr>
                <td><?php echo htmlspecialchars($categoria['cat_id']); ?></td>
                <td><?php echo htmlspecialchars($categoria['cat_nombre']); ?></td>
                <td><img src="<?php echo htmlspecialchars($categoria['cat_imagen']); ?>" alt="Imagen" width="100"></td>
                <td>
                    <a href="index.php?controller=categoria&action=edit&id=<?php echo htmlspecialchars($categoria['cat_id']); ?>">Editar</a>
                    <a href="index.php?controller=categoria&action=delete&id=<?php echo htmlspecialchars($categoria['cat_id']); ?>" onclick="return confirm('¿Estás seguro de eliminar esta categoría?');">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
