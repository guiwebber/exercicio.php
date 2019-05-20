<?php 
$dados = $_POST;

//print_r($dados);
//exit;

$Codigo = $dados['usuario_codigo'];
$Caminho = $dados ['Caminho'];
$NumeroCopias = $dados ['NumeroCopias'];
$TipoImpressao = $dados ['TipoImpressao'];
$Status = $dados ['Status'];




$sql = "INSERT INTO documentos (Usuario_Codigo, Caminho , NumeroCopias, TipoImpressao, 'Status', ) 
VALUES ('$Usuario', '$Caminho', '$NumeroCopias', '$TipoImpressao', '$Status' )";

//echo $sql;
//exit;

include_once './classes/conexaodoc.php';
$conexaodoc = new conexaodoc();

$conexaodoc->execute($sql);

echo "<script> alert('Formulario foi enviado com sucesso');
        window.location.href = 'CadastroDoc.php' </script>";


