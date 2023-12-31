<?php 
include("src/extra/protect-adm.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style-visualiza-prova.css">
    <link rel="shortcut icon" href="assets/image/fivicon.png" type="image/x-icon">
    <title>Visualiza Prova</title>

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
            <div id="tabela">

                <table class="table table-striped table-hover table-bordered">
                <div class="pesq">
                    <form class="d-flex" action="" method="post">
                        <div class="pesquise">
                            <label for="pesquisa">Pesquise pelo Numero da Prova, Nome ou Descrição</label>
                        </div>
                        <input class="form-control me-2" type="search" id="pesquisa" placeholder="Digite aqui para pesquisar" aria-label="Search" name="pesquisa">
                        <button class="btn btn-success" type="submit">Pesquisar</button>
                        
                    </form>

                </div>

                    <thead>
                        <tr>
                            <th class="tamanho" scope="col">N° da prova</th>
                            <th class="tamanho" scope="col">Nome</th>
                            <th class="tamanho" scope="col">Ponto 1</th>
                            <th class="tamanho" scope="col">Ponto 2</th>
                            <th class="tamanho" scope="col">Ponto 3</th>
                            <th class="tamanho" scope="col">Ponto 4</th>
                            <th class="tamanho" scope="col">Ponto 5</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Excluir</th>

                        </tr>

                    </thead>
                    <?php
                   include("src/extra/connection.php");

                   $termoPesquisa = '';
                   
                   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                       $termoPesquisa = mysqli_real_escape_string($id, $_POST['pesquisa']);
                       
                       $sql = "SELECT p.*, t.* FROM provas p
                       JOIN pontuacao t ON p.id = t.id
                       WHERE p.nome LIKE '%$termoPesquisa%' OR p.numero_prova LIKE '%$termoPesquisa%' OR p.descricao LIKE '%$termoPesquisa%'
                       ORDER BY p.numero_prova ASC";

                   } else {
                       $sql = 'SELECT p.*, t.* FROM provas p JOIN pontuacao t ON p.id = t.id ORDER BY p.numero_prova ASC';

                   }
                   
                   $res = mysqli_query($id, $sql);
                   
                   while ($linha = mysqli_fetch_array($res)) { 
                       if ($linha['status'] == 'ativo') {
                        ?>
                        <tr>
                            <td class="tamanho"><?php echo $linha['numero_prova']; ?></td>

                            <td class="tamanho"><?php echo $linha['nome']; ?></td>

                            <td class="tamanho"><?php echo $linha['primeiro']; ?></td>

                            <td class="tamanho"><?php echo $linha['segundo']; ?></td>

                            <td class="tamanho"><?php echo $linha['terceiro']; ?></td>

                            <td class="tamanho"><?php echo $linha['quarto']; ?></td>

                            <td class="tamanho"><?php echo $linha['quinto']; ?></td>

                            <td><?php echo $linha['descricao']; ?></td>

                            <td><a class="btn btn-warning" href="edit-prova.php?id=<?php echo $linha['id']; ?>">Alterar</a></td>
                            <td><a class="btn btn-danger" href="src/deleta-prova.php?id=<?php echo $linha['id']; ?>">Excluir</a></td>

                        </tr>

                    <?php } } ?>
                    
                </table>
                
            </div> 

    </main>

</body>
</html>