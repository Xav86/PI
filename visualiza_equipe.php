<?php 
include("src/extra/protect-adm.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style-visualiza-equipe.css">
    <link rel="shortcut icon" href="assets/image/fivicon.png" type="image/x-icon">
    <title>Visualiza Equipe</title>

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
        
            <div id="tabela">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <!-- <th scope="col" >Pontos</th> -->
                            <th scope="col" >Capitão da Equipe</th>
                            <th scope="col" >Editar</th>
                            <th scope="col" >Excluir</th>
                        </tr>
                    </thead>
                    <?php
                        include("src/extra/connection.php");

                        $sql = ('SELECT * FROM equipes');

                        $res = mysqli_query($id, $sql);
                        $posicao = 0;
                        while ($linha = mysqli_fetch_array($res)) { 
                            if ($linha['status'] == 'ativo') {
                            $posicao = $posicao+1;
                            ?>
                        
                            <tr>
                                <td><?php echo $posicao;?></td>

                                <td><?php echo $linha['nome'];?></td>

                                <td>
                                    <!-- escrever nome do capitão da equipe -->
                                    <?php if($linha['usuarios_id'] == ''){echo '<i>sem capitão</i>';}else{
                                        $cod = $linha['usuarios_id'];
                                        $sql2 = ("SELECT nome FROM usuarios where id=$cod");
                                        $res2 = mysqli_query($id, $sql2);
                                        $linha2 = mysqli_fetch_array($res2);
                                        if ($res2) { echo $linha2['nome'];}

                                    } ?>
                                </td>
                                
                                <td ><a class="btn btn-warning" href="edit-equipe.php?id=<?php echo $linha['id']; ?>">Alterar</a></td>
                                <td ><a class="btn btn-danger" href="src/deleta-equipe.php?id=<?php echo $linha['id']; ?>">Excluir</a></td>
                
                            </tr>
                
                    <?php } } ?>
                </table>
                
            </div>

    </main>

</body>
</html>