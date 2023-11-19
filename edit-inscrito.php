<?php
include("src/extra/protect-cap.php");

include("src/extra/connection.php");

$pk = $_GET['id'];

$sql = "SELECT * FROM inscritos where id=$pk";

$res = mysqli_query($id,$sql);
while ($linha = mysqli_fetch_array($res)) { ?>


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
                <img src="assets/image/saga-cedup-logo.png" alt="Logo Cedup" width="30" height="24" class="d-inline-block align-text-top">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <!-- Links da barra de navegação -->
                <ul class="nav navbar-nav nav-underline">
                    <!-- Links dos Incritos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Incritos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="form_cad_inscrito.php">Cadastrar Inscritos</a></li>
                            <li><a class="dropdown-item" href="visualiza_inscrito.php">Visualiza Inscritos</a></li>

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
                    <p>Realize a inscrição de um aluno para <br> ele estar participando da gincana!</p>
                </div>
                <!-- Campos -->
                <form action="update-inscrito.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Matricula" aria-label="Matricula" autocomplete="off" spellcheck="false" name="matricula" value="<?php echo $linha['matricula'];  ?>">
                        </div>

                        <div class="col">
                            <input type="text" class="form-control" placeholder="Turma" aria-label="Turma" autocomplete="off" spellcheck="false" name="turma" value="<?php echo $linha['turma'];  ?>">
                        </div>

                    </div>
                    
                    <div class="mb-3">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome do Aluno" autocomplete="off" spellcheck="false" name="nome" value="<?php echo $linha['nome'];  }?>">

                    </div>
                    <!-- Botão -->
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-lg" type="submit">Cadastrar</button>
                        
                    </div>

                </form>

                <!-- Aviso -->
                <div class="aviso">
                    <p>Ao cadastrar o aluno, o mesmo estara atuomaticamente participando da equipe qual você responsavel</p>

                </div>
            </div>
        </div>

    </main>

</body>
</html>