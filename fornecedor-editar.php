<?php
include('header.php');
include('conexao.php');
$sql = "select * from fornecedor where id_fornecedor ='" . $_REQUEST["id"] . "'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>

</br></br>
<div class="container">
    <div class="row d-flex justify-content-center text-center">
        <div class="col-md">
            <h3>Editar Fornecedor</h3>
            </br>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <form method="post" action="update-fornecedor.php?id=<?php echo $_REQUEST["id"] ?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nome:</label>
                    <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $row['nome_vendedor']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput2">Email:</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?php echo $row['email_vendedor']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">CNPJ:</label>
                    <input type="number" class="form-control" name="cnpj" id="cnpj" value="<?php echo $row['cnpj']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">Razão Social:</label>
                    <input type="text" class="form-control" name="razao_social" id="razao_social" value="<?php echo $row['razao_social']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">Nome Fantasia:</label>
                    <input type="text" class="form-control" name="nome_fantasia" id="nome_fantasia" value="<?php echo $row['nome_fantasia']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">Telefone:</label>
                    <input type="number" class="form-control" name="telefone" id="telefone" value="<?php echo $row['telefone']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">Celular:</label>
                    <input type="number" class="form-control" name="celular" id="celular" value="<?php echo $row['celular_vendedor']; ?>" required>
                </div>
                </br><input type="submit" class="text-white btn bg-success" value="Salvar">
            </form></br>
            <div class="resposta"></div>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>