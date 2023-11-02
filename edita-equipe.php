<?php
require 'code/connection.php';

$pk = $_GET['id_equipe'];

$sql = "Select * from equipes where id_equipe=$pk";

$res = mysqli_query($id,$sql);
while ($linha = mysqli_fetch_array($res)) { ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style-cadastro-equipe.css">
    <title>Edição de Equipes</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="home_adm.html">
                <img src="assets/image/cedup_logo.webp" alt="Logo Cedup" width="30" height="24" class="d-inline-block align-text-top">
                Cedup
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                            <li><a class="dropdown-item" href="visualiza_equipe.php">Visualizar Equipe</a></li>
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
        <div id="container">
            <div id="box">
                <div id="title-box">
                    <div id="title">  <!-- Cabeçario -->
                        <h1>Edição de Equipes</h1>
                        <p>Digite para estar alterando <br> o nome da equipe</p>
                        
                    </div>

                </div>
                    <!-- Campos -->
                    <form action="update-equipe.php" method="post">

                        <input type="hidden" name="id" value="<?php echo $linha['id_equipe']; ?>">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="floatingInput" placeholder="Nome da Equipe" name="nome" value="<?php echo $linha['nome']; } ?>">
                            <label for="floatingInput">Nome da Equipe</label>
                        </div>
                        
                        <!-- Botão -->
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-lg" type="submit">Button</button>
                        </div> 

                    </form>
                    
            </div>
        </div>
            

    </main>

</body>
</html>