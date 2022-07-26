<?php
include('header.php');
?>

</br></br>
<div class="container">
    <div class="row d-flex justify-content-center text-center">
        <div class="col-md">
            <h3>Cadastro de Fornecedor</h3>
            </br>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <form method="post" action="cadastro-fornecedor.php">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nome:</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira o nome" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput2">Email:</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Insira o email" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">CNPJ:</label>
                    <input type="number" class="form-control" name="cnpj" id="cnpj" placeholder="Insira o CNPJ" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">Razão Social:</label>
                    <input type="text" class="form-control" name="razao_social" id="razao_social" placeholder="Insira a razão social" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">Nome Fantasia:</label>
                    <input type="text" class="form-control" name="nome_fantasia" id="nome_fantasia" placeholder="Insira o nome dantasia" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">Telefone:</label>
                    <input type="number" class="form-control" name="telefone" id="telefone" placeholder="Insira o telefone" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">Celular:</label>
                    <input type="number" class="form-control" name="celular" id="celular" placeholder="Insira o celular" required>
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