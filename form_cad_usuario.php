<?php 
    include("src/extra/protect.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style-cadastro-usuario.css">
    <link rel="shortcut icon" href="assets/image/fivicon.png" type="image/x-icon">
    <title>Cadastro de Usuários</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <!-- Logo -->
        <div class="container-fluid">
            <a class="navbar-brand" href="home_adm.php">
                <img src="assets/image/saga-cedup-logo.png" alt="Logo Cedup" width="35" height="29" class="d-inline-block align-text-top">
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
                            <li><a class="dropdown-item" href="form_cad_prova.html">Cadastrar Prova</a></li>
                            <li><a class="dropdown-item" href="visualiza_prova.php">Visualiza Prova</a></li>

                        </ul>

                    </li>

                    <!-- Links da Equipe-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Equipes</a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="form_cad_equipe.html">Cadastrar Equipe</a></li>
                            <li><a class="dropdown-item" href="visualiza_equipe.php">Visualizar Equipe</a></li>

                        </ul>

                    </li>

                    <!-- Links do Capitão -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Capitões</a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="form_cad_capitao.php">Cadastrar Capitão</a></li>
                            <li><a class="dropdown-item" href="#">Visualiza Capitão</a></li>

                        </ul>

                    </li>
                    <!-- Cadastrar usuários -->
                    <li class="nav-item">
                        <a class="nav-link" href="form_cad_usuario.php">Cadastrar Usuários</a>
                    </li>
                    <!-- Controle de pontuação -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pontuação</a>
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
        <!-- Caixa de Centralizar -->
        <div id="container">
            <div id="box">
                <div id="title-box">
                    <!-- Cabeçalho -->
                    <div id="title">
                        <h1>Cadastro de Usuários</h1>
                        <p>Cadastre um usuário e selecione o seu nivel de acesso dentro do sistema.</p>

                    </div>

                </div>

                <!-- Inserir dados -->
                <form action="src/cad_usuario.php" method="post">
                    <!-- Cadastro -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="floatingInput" placeholder="Nome do usuário" name="nome" required>
                        <label for="floatingInput">Nome</label>

                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="floatingInput" placeholder="Nome que o usuário usara para logar" name="usuario" required>
                        <label for="floatingInput">Usuário</label>

                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="floatingInput" placeholder="Senha do usuário" name="senha" type="password" required>
                        <label for="floatingInput">Senha</label>

                    </div>
                    <!-- Checkbox de nivel do usuário -->
                    <div id="checkbox">
                        <label for="nivel">Nivel de acesso ao sistema</label>
                        <select class="form-select" aria-label="Selecione uma opção" id="nivel" name="nivel" required>
                            <option selected></option>
                            <option value="cap">Nivel Capitão</option>
                            <option value="adm">Nivel Administrador</option>

                        </select>

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