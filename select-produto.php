<?php
include_once "conexao.php";
$pagina = filter_input(INPUT_POST, 'pagina', FILTER_SANITIZE_NUMBER_INT);
$qnt_result_pg = filter_input(INPUT_POST, 'qnt_result_pg', FILTER_SANITIZE_NUMBER_INT);
$inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;

$result = "SELECT * FROM produto ORDER BY id_produto ASC LIMIT $inicio, $qnt_result_pg";
$resultado = mysqli_query($con, $result);

if (($resultado) and ($resultado->num_rows != 0)) {
?>
    <form method="post" id="form" action="delete.php?tabela=produto">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Fornecedor</th>
                    <th scope='col'>Nome</th>
                    <th scope='col'>Valor</th>
                    <th scope='col'>Peso</th>
                    <th scope='col'>Quantidade Estoque</th>
                    <th scope='col'>Excluir</th>
                    <th scope='col'>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($resultado)) {
                ?>
                    <tr>
                        <th scope='row'><?php echo $row['id_produto']; ?></th>
                        <td><?php echo $row['id_fornecedor']; ?></td>
                        <td><?php echo $row['nome_produto']; ?></td>
                        <td><?php echo $row['valor_produto']; ?></td>
                        <td><?php echo $row['peso']; ?></td>
                        <td><?php echo $row['quantidade_estoque']; ?></td>
                        <td align="center"><input type="checkbox" id="id[<?php echo $row['id_produto']; ?>]" name="id[<?php echo $row['id_produto']; ?>]" value="<?php echo $row['id_produto']; ?>"></td>
                        <td align="center"><button type="button" class="btn btn-info text-white" onclick="location.href='produto-editar.php?id=<?php echo $row['id_produto']; ?>'">Editar</button></td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
        <button class="btn btn-danger">Excluir</button>
    </form>
<?php
    $result_pg = "SELECT COUNT(id_produto) AS num_result FROM produto";
    $resultado_pg = mysqli_query($con, $result_pg);
    $row_pg = mysqli_fetch_assoc($resultado_pg);

    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

    $max_links = 2;

    echo "<nav aria-label='Page navigation example'>
  <ul class='pagination justify-content-center'>
    <li class='page-item'>
      <a class='page-link' href='#' onclick='listar(1, $qnt_result_pg)' aria-label='Primeira'>
        <span aria-hidden='true'>&laquo;</span>
      </a>
    </li>";

    for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
        if ($pag_ant >= 1) {
            echo " <li class='page-item' onclick='listar($pag_ant, $qnt_result_pg)'><a class='page-link' href='#'>$pag_ant</a></li> ";
        }
    }

    echo " <li class='page-item'><a class='page-link' href='#'><b>$pagina</b></a></li> ";

    for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
        if ($pag_dep <= $quantidade_pg) {
            echo " <li class='page-item' onclick='listar($pag_dep, $qnt_result_pg)'><a class='page-link' href='#'>$pag_dep</a></li> ";
        }
    }

    echo " <li class='page-item'>
<a class='page-link' href='#' onclick='listar($quantidade_pg, $qnt_result_pg)' aria-label='Next'>
  <span aria-hidden='true'>&raquo;</span>
</a>
</li>
</ul>
</nav>";
} else {
    echo "<div class='alert alert-danger' role='alert'>Nenhum item encontado.</div></br>";
}
