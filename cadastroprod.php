<?php
    include("conexao.php");
    $categoria = "SELECT * FROM categoria ";
    $querycat = mysqli_query($conexao, $categoria);
    if(isset($_POST['nome'])){
        $nome=$_POST['nome'];
        $preco=$_POST['preco'];
        $descricao=$_POST['descricao'];
        $categoria=$_POST['categoria'];
        echo "$nome <br> $preco <br> $descricao <br> $categoria";

        $sql="INSERT INTO produto(nome,preco,descricao,categoria) VALUES('$nome','$preco','$descricao','$categoria')";
        if(mysqli_query($conexao,$sql)){
            echo "Produto cadastrado com sucesso!";
        }else{
            echo "Error". mysqli_error($conexao);
        }
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>
    <center><h1>Cadastro de Produto</h1></center>
    <form action="" method="post">
        <input type="text" name="nome" placeholder="Digite nome de produto:">
        <input type="text" name="preco" placeholder="Digite o preço do produto:">
        <input type="text" name="descricao" placeholder="Digite uma descrição para o produto:">
        <select name="categoria" required="required">
            <?php while ($resultado=mysqli_fetch_array($querycat)){?>
                <option value="<?=$resultado['codigo'] ?>"><?php echo $resultado['nome']; ?></option>
            <?php }?>
        </select>
        <input type="submit" name="submit" value="cadastrar">
    </form>
</body>
</html>