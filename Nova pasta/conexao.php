<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "Agenda";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
