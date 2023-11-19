<?php 
include("src/extra/protect-adm.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style-cadastro-prova.css">
    <link rel="shortcut icon" href="assets/image/fivicon.png" type="image/x-icon">
    <title>Cadastro de Provas</title>

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
                            <li><a class="dropdown-item" href="form_cad_prova.php">Cadastrar Prova</a></li>
                            <li><a class="dropdown-item" href="visualiza_prova.php">Visualiza Prova</a></li>

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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Capitões</a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="form_cad_capitao.php">Cadastrar Capitão</a></li>
                            <li><a class="dropdown-item" href="#">Visualiza Capitão</a></li>

                        </ul>

                    </li>
                    <!-- Cadastrar usuários -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">usuarios</a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="form_cad_usuario.php">Cadastrar Usuários</a></li>
                            <li><a class="dropdown-item" href="visualiza_usuario.php">Visualiza Usuários</a></li>

                        </ul>
                    </li>
                    <!-- Controle de pontuação -->
                    <li class="nav-item">
                        <a class="nav-link" href="pontuacao.php">Pontuação</a>
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
                <div id="title">
                    <h1>Cadastro de Provas</h1>
                    <p>Faça aqui o cadastro em relação as provas que irão acontecer durante a gincana e pontos que os colocados receberão</p>
                </div>
                <!-- Campos -->
                <form action="src/cad-prova.php" method="post">
                    <div class="row g-3">
                        <div class="col">
                            <label>Numero da Prova</label>
                            <input type="text" class="form-control" placeholder="Número da Prova" aria-label="NumerodaProva" name="numero" autocomplete="off" spellcheck="false" required>
                        </div>

                        <div class="col">
                            <label>Primeiro lugar</label>
                            <input type="text" class="form-control" placeholder="Pontuação" aria-label="PontuacaodaProva" name="ponto1" required autocomplete="off" spellcheck="false">
                        </div>

                        <div class="col">
                            <label>Segundo lugar</label>
                            <input type="text" class="form-control" placeholder="Pontuação" aria-label="PontuacaodaProva" name="ponto2" autocomplete="off" spellcheck="false" required>
                        </div>

                    </div>

                    <div class="row g-3">
                        <div class="col">
                            <label>Terceiro lugar</label>
                            <input type="text" class="form-control" placeholder="Pontuação" aria-label="PontuacaodaProva" name="ponto3" autocomplete="off" spellcheck="false" required>
                        </div>

                        <div class="col">
                            <label>Pontos de Participação</label>
                            <input type="text" class="form-control" placeholder="Pontuação" aria-label="PontuacaodaProva" name="padrao" autocomplete="off" spellcheck="false" required>
                        </div>

                    </div>

                    <div class="box-campos">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Nome da Prova" name="nome" autocomplete="off" spellcheck="false">
                            <label for="floatingInput" required>Nome da prova</label>

                        </div>
                        
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Escreve a Descrição aqui" id="floatingTextarea2" style="height: 100px" name="descricao" autocomplete="off" spellcheck="false"></textarea>
                            <label for="floatingTextarea2">Descrição</label>

                        </div>
                        
                    </div>
                    <!-- botão -->
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-lg" type="submit">Cadastrar</button>
                        
                    </div>
                </form> 
            </div>

        </div>

    </main>

</body>
</html>