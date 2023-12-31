<?php
require 'connection.php';

$stmt = $pdo->query('SELECT * FROM equipes ORDER BY pontuacao_total DESC');
 
$equipes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Visualiza Capitão</title>
  
  <link rel="stylesheet" href="../css/style-visualiza-capitao.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="home_adm.html">
        <img src="../assets/image/cedup_logo.webp" alt="Logo Cedup" width="30" height="24" class="d-inline-block align-text-top"> 
        Cedup
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Provas
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="cadastro_prova.html">Cadastrar Prova</a></li>
              <li><a class="dropdown-item" href="#">Editar Prova</a></li>
              <li><a class="dropdown-item" href="#">Excluir Prova</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Equipes
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="cadastro_equipe.html">Cadastrar Equipe</a></li>
              <li><a class="dropdown-item" href="#">Editar Equipe</a></li>
              <li><a class="dropdown-item" href="#">Excluir Equipe</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Capitões
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="cadastrar_capitao.html">Cadastrar Capitão</a></li>
              <li><a class="dropdown-item" href="#">Editar Capitão</a></li>
              <li><a class="dropdown-item" href="#">Excluir Capitão</a></li>
            </ul>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Sair</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>

  <main>
    <div id="alinhamento">
      <div id="tabela">

        <table class="table">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Imagem</th>
              <th scope="col">Nome</th>
              <th scope="col">Pontos</th>
            </tr>
          </thead>
          <?php foreach ($equipes as $key => $equipe): ?>
            <tbody>
              <tr>
                <th scope="row">
                  <?php echo $key + 1; ?>
                </th>
                <td><img src="../assets/image/cedup_logo.webp" alt="teste" style="width: 34px;"></td>
                <td>
                  <?php echo $equipe['nome']; ?>
                </td>
                <td>
                  <?php echo $equipe['pontuacao_total']; ?>
                </td>
              </tr>
            </tbody>
          <?php endforeach; ?>
        </table>

      </div>
    </div>

  </main>

</body>

</html>