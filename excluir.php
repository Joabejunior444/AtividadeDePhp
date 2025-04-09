<?php
include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM produto WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Produto excluído!";
} else {
    echo "Erro ao excluir: " . $conn->error;
}

header("Location: index.php");
exit;
?>
