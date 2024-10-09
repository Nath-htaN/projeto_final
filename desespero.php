<?php
include('conexao.php');
if(isset($_POST['nome'])){
    $nome=$_POST['nome'];
    $preco=$_POST['preco'];
    $descricao=$_POST['descricao'];
    $categoria=$_POST['categoria'];
    $codigo=$_POST['codigo'];

    $alterar="UPDATE produto SET nome='{$nome}', preco='{$preco}', descricao='{$descricao}', categoria='{$categoria}' WHERE codigo='{$codigo}'";
    $op_alterar=mysqli_query($conexao, $alterar);
    
    if(!$op_alterar){
        echo "Error". mysqli_error($conexao);
    }else{
        echo "Alteração realizada com sucesso!";
    }
}

$produto="SELECT*FROM produto";
if(isset($_POST['codigo'])){
    $codigo=$_POST['codigo'];
    $produto .=" WHERE codigo LIKE {$codigo}";
}else{
    $produto .=" WHERE codigo LIKE 1";
}
$con_produto=mysqli_query($conexao, $produto);
if(!$con_produto){
    echo "ERROR" .mysqli_error($conexao);
}else{
    $inf_produto=mysqli_fetch_assoc($con_produto);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor Produto</title>
</head>
<body>
    <center><h1>Gestão de Produto</h1></center>
    <form action="Alterar" method="post">

    <label for="nome">Nome do Produto:</label>
    <input type="text" value="<?php echo $inf_produto['nome']?>" name="nome"><br>
    <label for="preco">Preço do Produto:</label>
    <input type="text" value="<?php echo $inf_produto['preco']?>" name="preco"><br>
    <label for="descricao">Descrição do Produto:</label>
    <input type="text" value="<?php echo $inf_produto['descricao']?>" name="descricao"><br>
    <label for="categoria">Categoria do Produto:</label>
    <input type="text" value="<?php echo $inf_produto['categoria']?>" name="categoria"><br>
    <input type="hidden" value="<?php echo $inf_produto['codigo']?>" name="codigo">
    <input type="submit" name="submit" value="Alterar">
    </form> 
</body>
</html>