<?php
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$correo = $_POST['correo'];

$connection = mysqli_connect("localhost", "root", "Kellyperokmond4", "paperlife");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {    
  $sql = "INSERT INTO loginn (usuario, contrasena, correo, fecha) VALUES (?, ?, ?, NULL)";
  
  $stmt = mysqli_prepare($connection, $sql);

  mysqli_stmt_bind_param($stmt, "sss", $usuario, $contrasena, $correo);

  if (mysqli_stmt_execute($stmt)) {
      echo "Data entered";
  } else {
      echo "Error: " . mysqli_error($connection);
  }
} else {
  echo "Invalid request method";
}

mysqli_close($connection);
?>
