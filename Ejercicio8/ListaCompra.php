<?php
// Iniciar sesión para almacenar los productos en un array
session_start();

// Si la sesión de productos no existe, se crea un array vacío
if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = array();
}

// Si el formulario ha sido enviado y el producto no está vacío
if (isset($_POST['producto']) && !empty($_POST['producto'])) {
    $producto = trim($_POST['producto']);
    
    // Agregar el producto al array de la sesión
    $_SESSION['productos'][] = $producto;
}

// Si el usuario decide finalizar, vaciar la lista de productos
if (isset($_POST['finalizar'])) {
    // Finaliza la lista vaciando el array de productos
    unset($_SESSION['productos']);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
</head>
<body>
    <h1>Lista de Compras</h1>

    <!-- Formulario para agregar productos -->
    <form action="" method="post">
        <label for="producto">Producto:</label>
        <input type="text" id="producto" name="producto">
        <input type="submit" value="Agregar a la lista">
    </form>

    <!-- Botón para finalizar la lista -->
    <form action="" method="post">
        <input type="hidden" name="finalizar" value="true">
        <input type="submit" value="Finalizar y vaciar lista">
    </form>

    <?php
    // Mostrar la lista de productos si existen productos en la sesión
    if (!empty($_SESSION['productos'])) {
        echo "<h2>Tu lista de compras:</h2>";
        echo "<ul>";

        // Recorremos el array y mostramos cada producto
        foreach ($_SESSION['productos'] as $producto) {
            echo "<li>" . htmlspecialchars($producto) . "</li>";
        }

        echo "</ul>";
    } else {
        echo "<p>No hay productos en la lista.</p>";
    }
    ?>
</body>
</html>