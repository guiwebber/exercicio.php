<?php

    $dados = $_GET;

    $id = $dados ["id"];

    $sql = "DELETE FROM usuario WHERE ID='$id';";

    include_once './classes/conexao.php';

    $conexao = new Conexao();

    $conexao->execute($sql);

    Header("location: usuario_listar.php"); 

?>