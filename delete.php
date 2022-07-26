<?php

include('conexao.php');

$tabela = $_REQUEST['tabela'];
$id = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (isset($id['id'])) {
    foreach ($id['id'] as $id => $fornecedor) {
        $sql = "delete from $tabela where id_$tabela ='$id'";
        $result = $con->prepare($sql);
        $result->execute();
    }
    $_SESSION['msg-success'] = 'Item excluido com sucesso';
    if ($tabela == 'fornecedor') {
        header('Location: fornecedor-listagem.php');
    } elseif ($tabela == 'produto') {
        header('Location: produto-listagem.php');
    }
} else {
    $_SESSION['msg-danger'] = 'Erro ao excluir o item.';
    if ($tabela == 'fornecedor') {
        header('Location: fornecedor-listagem.php');
    } elseif ($tabela == 'produto') {
        header('Location: produto-listagem.php');
    }
}
$con->close();
