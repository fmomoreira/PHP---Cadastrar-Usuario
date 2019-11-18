<?php
$conn = new mysqli("localhost","root","","db_pagamentos");
if(mysqli_connect_errno()){
    die("Conexao falhou: " . mysqli_conect_errno());
}
if(isset($_POST["nome"])){
    $nome = utf8_decode($_POST["nome"]);
    $senha = utf8_decode($_POST["senha"]);
    $inserir = "INSERT INTO tb_usuarios";
    $inserir .= "(deslogin, dessenha)";
    $inserir .= "VALUES";
    $inserir .= "('$nome','$senha')";
$retorno = array();
$salvounobanco = mysqli_query($conn, $inserir);
if($salvounobanco){
    $retorno["sucesso"] = true;
    $retorno["menssagem"] = "Usuario adicionado com Sucesso.";
}else{
    $retorno["sucesso"] = false;
    $retorno["menssagem"] = "Falha ao adicionar Usuário.";

}
echo json_encode($retorno);
}
?>
