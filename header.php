<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/a3000fd09d.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Vmarket - teste PHP</title>
</head>

<body>
  </br><img src="img/logo-vmarket.jpeg" class="rounded mx-auto d-block .mr-md-3 " alt="Vmarket - teste PHP"></br>

  <nav class="navbar navbar-expand-lg bg-success p-2 text-white">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">Teste PHP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Fornecedor
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="fornecedor-listagem.php">Listagem</a></li>
              <li><a class="dropdown-item" href="fornecedor-cadastro.php">Cadastro</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Produto
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="produto-listagem.php">Listagem</a></li>
              <li><a class="dropdown-item" href="produto-cadastro.php">Cadastro</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <?php
  include('mensagem.php');
  ?>