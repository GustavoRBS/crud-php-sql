<?php

include 'conexao.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id_fornecedor = $_POST['id_fornecedor'];
    $nome_produto = $_POST['nome_produto'];
    $valor_produto = $_POST['valor_produto'];
    $peso = $_POST['peso'];
    $quantidade_estoque = $_POST['quantidade_estoque'];

    $sql = "select count(*) as total from produto where nome_produto = '$nome_produto'";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['total'] == 1) {
        $_SESSION['msg-danger'] = 'Já existe esse produto cadastrado.';
        $con->close();
        header('Location: produto-cadastro.php');
    } else {
        $sql0 = "insert into produto (id_fornecedor, nome_produto, valor_produto, peso, 
        quantidade_estoque) 
        values ('$id_fornecedor', '$nome_produto', '$valor_produto','$peso', 
        '$quantidade_estoque')";
        
        if ($con->query($sql0) == TRUE) {
            $_SESSION['msg-success'] = "Cadastro realizado com sucesso!";
        }
        $con->close();
        header('Location: produto-cadastro.php');
    }
} else {
    $_SESSION['msg-danger'] = 'Erro ao cadastrar.';
    $con->close();
    header('Location: produto-cadastro.php');
}
