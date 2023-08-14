<?php
    include "conecta.php";

    $usuario = $_POST['usuario'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO 
                USUARIO(NOME, USUARIO , SENHA)
                    VALUES('".$nome."','". $usuario."','".$senha."')";
                    
    // mysqli_query($conexao, $sql);
echo($sql);
    header('Location:USUARIO.html');
?>
