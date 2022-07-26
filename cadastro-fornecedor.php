<?php

include 'conexao.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cnpj = $_POST['cnpj'];
    $razao_social = $_POST['razao_social'];
    $nome_fantasia = $_POST['nome_fantasia'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];

    $sql = "select count(*) as total from fornecedor where cnpj = '$cnpj'";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['total'] == 1) {
        $_SESSION['msg-danger'] = 'Já existe um cadastro com esse CNPJ.';
        $con->close();
        header('Location: fornecedor-cadastro.php');
    } else {
        $sql0 = "insert into fornecedor (nome_vendedor, email_vendedor, cnpj, razao_social, 
        nome_fantasia, telefone, celular_vendedor) 
        values ('$nome', '$email', '$cnpj','$razao_social', '$nome_fantasia', '$telefone', '$celular')";

        if ($con->query($sql0) == TRUE) {
            $_SESSION['msg-success'] = "Cadastro realizado com sucesso!";
        }
        $con->close();
        header('Location: fornecedor-cadastro.php');
    }
} else {
    $_SESSION['msg-danger'] = 'Erro ao cadastrar.';
    $con->close();
    header('Location: fornecedor-cadastro.php');
}
