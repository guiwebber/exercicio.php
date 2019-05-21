<?php 

$dados = $_POST;

//print_r($dados);
//exit;

$Usuario = $dados['usuario_codigo'];
$SaldoAdc = $dados ['SaldoAdc'];

$sql = "INSERT INTO saldo (Usuario_Codigo, SaldoAdc) VALUES ('$Usuario', '$SaldoAdc')";

//echo $sql;
//exit;

include_once './classes/conexao2.php';
$conexao2 = new Conexao2();

$conexao2->execute($sql);

echo "<script> alert('Formulario foi salvo com sucesso');
        window.location.href = 'CadastroSaldo.php' </script>";


