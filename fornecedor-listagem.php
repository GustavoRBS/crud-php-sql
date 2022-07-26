<?php
include('header.php');
?>

</br></br>
<div class="container">
    <div class="row d-flex justify-content-center text-center">
        <div class="col-md">
            <h3>Listagem de fornecedores</h3>
            </br>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 table-responsive text-nowrap ">

            <span id="conteudo"></span>
            <script>
                var qnt_result_pg = 5;
                var pagina = 1;
                $(document).ready(function() {
                    listar(pagina, qnt_result_pg);
                });

                function listar(pagina, qnt_result_pg) {
                    var dados = {
                        pagina: pagina,
                        qnt_result_pg: qnt_result_pg
                    }
                    $.post('select-fornecedor.php', dados, function(retorna) {
                        $("#conteudo").html(retorna);
                    });
                }
            </script>

        </div>
    </div>
</div>

<?php
include('footer.php');
?>