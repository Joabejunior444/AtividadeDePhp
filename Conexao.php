<?php
$host = 'localhost';
$db = 'sistema_produtos';
$user = 'root'; // ou outro usuário do seu MySQL
$pass = '';     // coloque a senha, se houver

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
