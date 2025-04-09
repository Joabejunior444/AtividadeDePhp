<?php
include 'conexao.php';

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO produto (nome, preco, quantidade, categoria)
        VALUES ('$nome', '$preco', '$quantidade', '$categoria')";

if ($conn->query($sql) === TRUE) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

header("Location: index.php");
exit;
?>
