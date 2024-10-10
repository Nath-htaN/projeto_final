<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de Produto</title>
</head>
<body>
    <center><h1>Exclusão de Produto</h1></center>

<?php
    include("conexao.php");

    if(isset($_POST['codigo'])){
        $codigo=$_POST["codigo"];
        //echo $codigo;
    }
    $exclusao="DELETE FROM produto WHERE codigo=($codigo)";

    if(mysqli_query($conexao, $exclusao)){
        echo "Produto excluído com sucesso!";
    }else{
        echo "Erro" .mysqli_error($conexao);
    }
?>
</body>
</html>