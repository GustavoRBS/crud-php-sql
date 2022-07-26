<?php

include 'conexao.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_REQUEST['id'];
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
        header("Location: fornecedor-editar.php?id=$id");
    } else {
        $sql0 = "update fornecedor set nome_vendedor = '$nome',
        email_vendedor = '$email',
        cnpj = '$cnpj',
        razao_social = '$razao_social',
        nome_fantasia = '$nome_fantasia',
        telefone = '$telefone',
        celular_vendedor = '$celular'
        where id_fornecedor = '$id'";

        if ($con->query($sql0) == TRUE) {
            $_SESSION['msg-success'] = "Cadastro atualizado com sucesso!";
        }
        $con->close();
        header("Location: fornecedor-editar.php?id=$id");
    }
} else {
    $_SESSION['msg-danger'] = 'Erro ao cadastrar.';
    $con->close();
    header("Location: fornecedor-editar.php?id=$id");
}
