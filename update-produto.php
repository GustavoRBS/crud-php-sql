<?php

include 'conexao.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_REQUEST['id'];
    $id_fornecedor = $_POST['id_fornecedor'];
    $nome_produto = $_POST['nome'];
    $valor_produto = $_POST['valor_produto'];
    $peso = $_POST['peso'];
    $quantidade_estoque = $_POST['quantidade_estoque'];

    $sql0 = "update produto set id_fornecedor = '$id_fornecedor',
        nome_produto = '$nome_produto',
        valor_produto = '$valor_produto',
        peso = '$peso',
        quantidade_estoque = '$quantidade_estoque'
        where id_produto = '$id'";

    if ($con->query($sql0) == TRUE) {
        $_SESSION['msg-success'] = "Cadastro atualizado com sucesso!";
    }
    $con->close();
    header("Location: produto-editar.php?id=$id");
} else {
    $_SESSION['msg-danger'] = 'Erro ao cadastrar.';
    $con->close();
    header("Location: produto-editar.php?id=$id");
}
