<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];

$sql = "UPDATE produto SET
        nome = '$nome',
        preco = '$preco',
        quantidade = '$quantidade',
        categoria = '$categoria'
        WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Produto atualizado com sucesso!";
} else {
    echo "Erro ao atualizar: " . $conn->error;
}

header("Location: index.php");
exit;
?>
