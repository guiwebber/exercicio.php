<?php 
$dados = $_POST;

//print_r($dados);
//exit;

$Codigo = $dados['usuario_codigo'];
$Caminho = $dados['Caminho'];
$NumeroCopias = $dados['NumeroCopias'];
$TipoImpressao = $dados['TipoImpressao'];

$valor = $NumeroCopias * 0.15;
$DataHora = date('Y-m-d H:i:s');



$sql = "INSERT INTO documentos (NomeArquivo, Usuario_Codigo, Caminho , NumeroCopias, TipoImpressao, Status, Valor) 
VALUES ('$Caminho', '$Codigo', '$Caminho', '$NumeroCopias', '$TipoImpressao', 'N', $valor)";

//echo $sql;
//exit;

include_once './classes/conexaodoc.php';
$conexaodoc = new conexaodoc();

$conexaodoc->execute($sql);

echo "<script> alert('Formulario enviado com sucesso');
        window.location.href = 'CadastroDoc.php' </script>";


