<?php
    include("conexao.php");
    $categoria = "SELECT * FROM categoria ";
    $querycat = mysqli_query($conexao, $categoria);
    $cat = mysqli_fetch_assoc($querycat);
    foreach($cat as $lista){
        echo $lista."<br>";
    } 
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="post">
        <input type="text" name="nome" placeholder="Digite nome de usuario">
        <input type="email" name="email" placeholder="Digite um email">
        <input type="text" name="senha" placeholder="Digite uma senha">
        <input type="text" name="telefone" placeholder="Digite seu telefone">
        <select name="categoria" required="required">
            <option value=<?php echo $cat['codigo']?>><?php  echo$cat['nome']?></option>
        </select>
        <input type="submit" name="submit" value="cadastrar">
    </form>
</body>
</html>