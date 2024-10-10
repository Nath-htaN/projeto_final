<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Produto</title>
</head>
<body>
    <center><h1>Consulta de Produto</h1></center>

<?php
    include('conexao.php');
    $nome=$_POST['codigo'];
    echo $nome;

    $result_codigo="SELECT*FROM produto WHERE nome LIKE '%$nome%'";
    $resultado_codigo=mysqli_query($conexao, $result_codigo);
    $result = mysqli_fetch_assoc($resultado_codigo);
    var_dump($result)

    /*if(mysqli_query($conexao, $resultado_codigo)){
        while($row_codigo=mysqli_fetch_assoc($resultado_codigo)){
            echo "Código: ". $row_codigo['codigo']. "<br>";
            echo "Nome:". $row_codigo['nome']. "<br>";
            echo "Preço:". $row_codigo['preco']. "<br>";
            echo "Descrição:". $row_codigo['descricao']. "<br>";
            echo "Categoria:". $row_codigo['categoria']. "<br>";
        }
    }*/
?>
</body>
</html>