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

// Consulta para obtener los productos
$sql = "SELECT * FROM productos WHERE estado = 'alta'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Productos</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: left;
    }
    th {
      background-color: #f4f4f4;
    }
  </style>
</head>
<body>
  <h1>Lista de Productos</h1>
  <table>
    <tr>
      <th>Nombre</th>
      <th>Categoría</th>
      <th>Acción</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["nombre"] . "</td>
                    <td>" . $row["categoria"] . "</td>
                    <td><a href='dar_baja.php?id=" . $row["id"] . "'>Dar de baja</a></td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No hay productos disponibles</td></tr>";
    }
    ?>
  </table>
</body>
</html>

<?php
$conn->close();
?>
