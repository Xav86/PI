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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Capitães</a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="form_cad_capitao.php">Cadastrar Capitão</a></li>
                            <li><a class="dropdown-item" href="#">Visualizar Capitão</a></li>

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
            <div id="tabela">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">N° da prova</th>
                            <th scope="col">Nome</th>
                            <th scope="col" >Ponto 1</th>
                            <th scope="col" >Ponto 2</th>
                            <th scope="col" >Ponto 3</th>
                            <th scope="col" >Ponto padrão</th>
                            <th scope="col" >Descrição</th>
                            <th scope="col" >Editar</th>
                            <th scope="col" >Excluir</th>
                        </tr>
                    </thead>
                    <?php
                    include("src/extra/connection.php");

                    $sql = 'SELECT p.*, t.* FROM provas p JOIN pontuacao t ON p.id = t.id ORDER BY p.numero_prova asc';

                    $res = mysqli_query($id, $sql);

                    while ($linha = mysqli_fetch_array($res)) { 
                        if ($linha['status'] == 'ativo') {
                        ?>
                        <tr>
                            <td><?php echo $linha['numero_prova']; ?></td>

                            <td><?php echo $linha['nome']; ?></td>

                            <td><?php echo $linha['primeiro']; ?></td>

                            <td><?php echo $linha['segundo']; ?></td>

                            <td><?php echo $linha['terceiro']; ?></td>

                            <td><?php echo $linha['ponto_padrao']; ?></td>

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