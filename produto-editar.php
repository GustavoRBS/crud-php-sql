<?php
include('header.php');
include('conexao.php');
$sql = "select * from produto where id_produto ='" . $_REQUEST["id"] . "'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$sql2 = "select * from fornecedor";
$result2 = mysqli_query($con, $sql2);
?>

</br></br>
<div class="container">
    <div class="row d-flex justify-content-center text-center">
        <div class="col-md">
            <h3>Editar produto</h3>
            </br>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <form method="post" action="update-produto.php?id=<?php echo $_REQUEST["id"] ?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Fornecedor:</label>
                    <select name="id_fornecedor" id="id_fornecedor" class="form-control">
                        <option value="0" selected>Insira o fonrcedor</option>
                        <?php
                        while ($row2 = mysqli_fetch_assoc($result2)) {
                        ?><option value="<?php echo $row2['id_fornecedor'] ?>"><?php echo $row2['nome_vendedor'] ?></option> ;
                        <?php }
                        ?>
                    </select>
                </div>  
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nome:</label>
                    <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $row['nome_produto']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput2">Valor:</label>
                    <input type="number" step="0.01" class="form-control" name="valor_produto" id="valor_produto" value="<?php echo $row['valor_produto']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">Peso:</label>
                    <input type="number" step="0.01" class="form-control" name="peso" id="peso" value="<?php echo $row['peso']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">Quantidade Estoque:</label>
                    <input type="number" class="form-control" name="quantidade_estoque" id="quantidade_estoque" value="<?php echo $row['quantidade_estoque']; ?>" required>
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