<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "articulos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el ID del producto a dar de baja
$id = $_GET['id'];

// Actualizar el estado del producto
$sql = "UPDATE productos SET estado = 'baja' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Producto dado de baja exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
