<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produtos</title>
</head>
<body>
    <h1>Cadastrar Produto</h1>
    <form action="salvar.php" method="post">
        Nome: <input type="text" name="nome" required><br>
        Preço: <input type="number" step="0.01" name="preco" required><br>
        Quantidade: <input type="number" name="quantidade" required><br>
        Categoria: <input type="text" name="categoria" required><br>
        <button type="submit">Salvar</button>
    </form>

    <h2>Lista de Produtos</h2>
    <table border="1">
        <tr>
            <th>ID</th><th>Nome</th><th>Preço</th><th>Qtd</th><th>Categoria</th>
        </tr>
        <?php
        $sql = "SELECT * FROM produto";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nome']}</td>
                    <td>{$row['preco']}</td>
                    <td>{$row['quantidade']}</td>
                    <td>{$row['categoria']}</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
