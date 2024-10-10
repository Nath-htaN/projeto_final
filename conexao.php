<?php
    $host="localhost";
    $usuario="root";
    $senha="Senac@2024";
    $bdname="migsupermarket";

    $conexao = mysqli_connect($host,$usuario,$senha,$bdname);
    //$conexao= new mysqli($host, $usuario, $senha, $bdname);
    if($conexao->connect_error){

        echo"erro" .mysqli_error($conexao);
    } else {
        //echo "conecto";

        //header('location: index.html');
    }
?>