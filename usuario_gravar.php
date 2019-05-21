<?php

    $dados = $_POST;


$nome = $dados['nome'];
$tipo = $dados['tipo_usuario'];
$telefone = $dados['telefone'];
$email = $dados['email'];
$senha_form = $dados['senha'];


$sql = "INSERT INTO usuario (NOME, TIPO_USUARIO, TELEFONE, EMAIL, SENHA) VALUES ('$nome', $tipo, '$telefone', '$email', MD5('$senha_form'))";

include_once './classes/conexao.php';
$conexao = new Conexao();

$conexao->execute($sql);


echo "<script> alert('Formulario foi salvo com sucesso');
        window.location.href = 'usuario_listar.php' </script>";


