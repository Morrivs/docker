<?php

$host = "localhost";
$user = "miusuario";
$password = "micontrasena";
$database = "mibasededatos";

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_errno) {
  echo "Error al conectar a la base de datos: " . $mysqli->connect_error;
  exit;
}

$sql = "SELECT * FROM usuarios";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "Nombre: " . $row["nombre"] . "<br>";
    echo "Apellido: " . $row["apellido"] . "<br>";
  }
} else {
  echo "No hay usuarios en la base de datos.";
}

$mysqli->close();

?>
