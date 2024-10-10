<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("conexao.php");
        $nome = $_POST['nome'];
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        $telefone=$_POST['telefone'];
    
        //echo $nome ."<br>" .$email;

        $sql= "INSERT INTO usuario(nome, email, senha, telefone) VALUES('$nome','$email','$senha','$telefone')";
        if(mysqli_query($conexao, $sql)){
            echo "usuario cadastrado com sucesso!";
        }else{
            echo "error" .mysqli_error($conexao);
        }
        ?>
</body>
</html>