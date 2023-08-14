<?php /*SERVE PARA CONECTAR TODOS OS OUTROS BANCO DE DADOS */

    $banco = "universounesc";
    $usuario = "universounesc";
    $senha = "@Devweb1";
    $servidor = "universounesc.mysql.uhserver.com";

    global $conexao;
    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco)

?>
