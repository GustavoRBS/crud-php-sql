<?php
include('header.php');
include('conexao.php');
$sql = "select * from fornecedor";
$result = mysqli_query($con, $sql);
?>

</br></br>
<div class="container">
    <div class="row d-flex justify-content-center text-center">
        <div class="col-md">
            <h3>Cadastro de Produto</h3>
            </br>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <form method="post" action="cadastro-produto.php">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Fornecedor:</label>
                    <select name="id_fornecedor" id="id_fornecedor" class="form-control">
                        <option value="0" selected>Insira o fonrcedor</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?><option value="<?php echo $row['id_fornecedor'] ?>"><?php echo $row['nome_vendedor'] ?></option> ;
                        <?php }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nome:</label>
                    <input type="text" class="form-control" name="nome_produto" id="nome_produto" placeholder="Insira o nome" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">Valor:</label>
                    <input type="number" class="form-control" name="valor_produto" id="valor_produto" placeholder="Insira o valor" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">Peso:</label>
                    <input type="number" class="form-control" name="peso" id="peso" placeholder="Insira a peso" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">Quantidade de estoque:</label>
                    <input type="number" class="form-control" name="quantidade_estoque" id="quantidade_estoque" placeholder="Insira a quantidade" required>
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