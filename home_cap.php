<?php 
include("src/extra/protect-cap.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style-home-capitao.css">
    <link rel="shortcut icon" href="assets/image/fivicon.png" type="image/x-icon">
    <title>Menu Principal</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <!-- Logo -->
        <div class="container-fluid">
            <a class="navbar-brand" href="home_cap.php">
                <img src="assets/image/logonav.png" alt="Logo Cedup" width="58" height="28" class="d-inline-block align-text-top">
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
        <div id="container">
        <?php
        include 'src/extra/connection.php';
        if (!isset($_SESSION))
        {
        session_start();
        }
        $cod = $_SESSION['id'];
        $sql = "SELECT * FROM equipes where usuarios_id='$cod'";

        $res = mysqli_query($id,$sql);

        $linha = mysqli_fetch_array($res);
        if ($res){
        ?>
            <h1>você esta no menu de capitão da equipe <br> <?php if (isset($linha['nome'])) {echo $linha['nome'];} else {echo "...parece que você não está vinculado a uma equipe.";} ?></h1>

        </div>
        
        <?php } ?>

    <div id="tabela">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col" class="posicao">Posição</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Pontuação</th>

                </tr>
            </thead>
            <?php

                $sql = 'SELECT e.id, e.nome, SUM(ep.pontuacao) AS soma
                        FROM equipes e
                        LEFT JOIN equipes_provas ep ON e.id = ep.equipes_id
                        GROUP BY e.id, e.nome
                        ORDER BY soma DESC';

                $res = mysqli_query($id, $sql);
                $posicao = 0;

                while ($linha = mysqli_fetch_array($res)) { 
                    $posicao++;
                    ?>
                    <tr>
                        <td><?php echo $posicao ?></td>

                        <td><?php echo $linha['nome']; ?></td>

                        <td><?php echo $linha['soma'] ?? 0; ?></td>

                    </tr>

            <?php } ?>

        </table>

    </div>

</main>

</body>
</html>