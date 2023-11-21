<?php 
include("src/extra/protect-cap.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style-cadastro-inscrito.css">
    <link rel="shortcut icon" href="assets/image/fivicon.png" type="image/x-icon">
    <title>Cadastro de Inscritos</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
        <!-- Barra de Navegação -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <!-- Logo -->
        <div class="container-fluid">
            <a class="navbar-brand" href="home_cap.php">
            <img src="assets/image/saga-cedup-logo-oficial.png" alt="Logo Cedup" width="50" height="50" class="d-inline-block align-text-top">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <!-- Links da barra de navegação -->
                <ul class="nav navbar-nav nav-underline">
                    <!-- Links dos Incritos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Inscritos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="form_cad_inscrito.php">Cadastrar Inscritos</a></li>
                            <li><a class="dropdown-item" href="visualiza_inscrito.php">Visualizar Inscritos</a></li>

                        </ul>

                    </li>
                    <!-- versão capitão -->
                    <li class="nav-item">
                        <a class="nav-link" href="visualiza_prova_cap.php">Visualizar Provas</a>
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
                <!-- Cabeçalho -->
                <div id="title"> 
                    <h1>Cadastro do Aluno</h1>
                    <p>Realize a inscrição de um aluno para<br>que ele participe da gincana</p>
                </div>
                <!-- Campos -->
                <form action="src/cad-inscrito.php" method="post">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Matrícula" aria-label="Matricula" autocomplete="off" spellcheck="false" name="matricula">
                        </div>

                        <div class="col">
                            <input type="text" class="form-control" placeholder="Turma" aria-label="Turma" autocomplete="off" spellcheck="false" name="turma">
                        </div>

                    </div>
                    
                    <div class="mb-3">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome do Aluno" autocomplete="off" spellcheck="false" name="nome">

                    </div>
                    <!-- Botão -->
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-lg" type="submit">Cadastrar</button>
                        
                    </div>

                </form>

                <!-- Aviso -->
                <div class="aviso">
                    <p>O aluno será automaticamente vinculado<br>à equipe pela qual você é responsável</p>

                </div>
            </div>
        </div>

    </main>

</body>
</html>