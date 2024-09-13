<?php
require('fpdf/fpdf.php');

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

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Lista de Productos Dados de Alta');
$pdf->Ln(20);

// Crear tabla en PDF
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(40, 10, 'Nombre');
$pdf->Cell(40, 10, 'Categoria');
$pdf->Ln();

while ($row = $result->fetch_assoc()) {
    $pdf->Cell(40, 10, $row['nombre']);
    $pdf->Cell(40, 10, $row['categoria']);
    $pdf->Ln();
}

$pdf->Output();

$conn->close();
?>
<?php
require('fpdf/fpdf.php');

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

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Lista de Productos Dados de Alta');
$pdf->Ln(20);

// Crear tabla en PDF
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(40, 10, 'Nombre');
$pdf->Cell(40, 10, 'Categoria');
$pdf->Ln();

while ($row = $result->fetch_assoc()) {
    $pdf->Cell(40, 10, $row['nombre']);
    $pdf->Cell(40, 10, $row['categoria']);
    $pdf->Ln();
}

$pdf->Output();

$conn->close();
?>
