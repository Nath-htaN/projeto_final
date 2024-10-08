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
        if(isset($_POST["email"])){
            $email = $_POST["email"];
            $senha=$_POST["senha"];

            //echo "$usuario e $email";
            $login="SELECT * FROM usuario WHERE email='{$email}' AND senha='{$senha}'";
            $acesso=mysqli_query($conexao, $login);
            if(!$acesso){
                echo" falha de login";
            }
            $informação = mysqli_fetch_assoc($acesso);
            
        }
        if(empty($informação)){
            echo "login sem conexão";
        }else{
            //header("location:index.html");
            if($informação['tipo'] == 'Funcionário'){
                echo "funcionario";
            }else{
                echo "cliente";
            }
        }
    ?>
</body>
</html>