<?php
include("src/extra/protect-adm.php");

include("src/extra/connection.php");

$pk = $_GET['id'];

$sql = "SELECT * FROM equipes where id=$pk";

$res = mysqli_query($id,$sql);
while ($linha = mysqli_fetch_array($res)) { ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style-cadastro-equipe.css">
    <link rel="shortcut icon" href="assets/image/fivicon.png" type="image/x-icon">
    <title>Edição de Equipes</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <!-- Logo -->
        <div class="container-fluid">
            <a class="navbar-brand" href="home_adm.php">
                <img src="assets/image/logonav.png" alt="Logo Cedup" width="58" height="28" class="d-inline-block align-text-top">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <!-- Links da barra de navegação -->
                <ul class="nav navbar-nav nav-underline">
                    <!-- Links das Provas -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Provas</a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="form_cad_prova.php">Cadastrar Prova</a></li>
                            <li><a class="dropdown-item" href="visualiza_prova.php">Visualizar Prova</a></li>

                        </ul>

                    </li>

                    <!-- Links da Equipe-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Equipes</a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="form_cad_equipe.php">Cadastrar Equipe</a></li>
                            <li><a class="dropdown-item" href="visualiza_equipe.php">Visualizar Equipe</a></li>

                        </ul>

                    </li>

                    <!-- Links do Capitão -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vinculo</a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="form_vinc_capitao.php">Vincular Capitão</a></li>
                            <li><a class="dropdown-item" href="visualiza_vinculo.php">Visualizar Capitão</a></li>

                        </ul>

                    </li>
                    <!-- Cadastrar usuários -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Usuarios</a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="form_cad_usuario.php">Cadastrar Usuário</a></li>
                            <li><a class="dropdown-item" href="visualiza_usuario.php">Visualizar Usuário</a></li>

                        </ul>
                    </li>
                    <!-- Controle de pontuação -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pontuação</a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="pontuacao.php">Cadastrar Pontuação</a></li>
                            <li><a class="dropdown-item" href="edit-pontuacao.php">Alterar Pontuação</a></li>

                        </ul>
                    </li>

                    <!-- Deslogar -->
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Sair</a>
                    </li>
                    
                </ul>

            </div>

        </div>

    </nav>   

    <main>
        <div id="container">
            <div id="box">
                <!-- Cabeçalho -->
                <div id="title-box">
                    <div id="title">
                        <h1>Edição de Equipes</h1>
                        <p>Digite para alterar o nome da equipe</p>
                        
                    </div>

                </div>
                    <!-- Campos -->
                    <form action="update-equipe.php" method="post">

                        <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="floatingInput" placeholder="Nome da Equipe" name="nome" value="<?php echo $linha['nome']; } ?>" autocomplete="off" spellcheck="false">
                            <label for="floatingInput">Nome da Equipe</label>
                        </div>
                        
                        <!-- Botão -->
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-lg" type="submit">Salvar alterações</button>
                        </div> 

                    </form>
                    
            </div>
        </div>
            

    </main>

</body>
</html>