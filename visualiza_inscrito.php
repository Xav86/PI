<?php 
include("src/extra/protect-cap.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style-visualiza-inscrito.css">
    <link rel="shortcut icon" href="assets/image/fivicon.png" type="image/x-icon">
    <title>Visualiza Equipe</title>

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
        
            <div id="tabela">

                <table class="table table-striped table-hover table-bordered">
                <div class="pesq">
                    <form class="d-flex" action="" method="post">
                        <div class="pesquise">
                            <label for="pesquisa">Pesquise pelo Nome</label>
                        </div>
                        <input class="form-control me-2" type="search" id="pesquisa" placeholder="Digite aqui para pesquisar" aria-label="Search" name="pesquisa">
                        <button class="btn btn-success" type="submit">Pesquisar</button>
                        
                    </form>

                </div>

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Matrícula</th>
                            <th scope="col" >Nome</th>
                            <th scope="col" >Turma</th>
                            <th scope="col" >Editar</th>
                            <th scope="col" >Excluir</th>
                        </tr>
                    </thead>
                    <?php
                        include("src/extra/connection.php");
                        if (!isset($_SESSION)){
                            session_start();
                        }
                        //pegando id do usuarios logado
                        $cod = $_SESSION['id'];
                        //vendo qual a equipe q ele ta vinculado pela chave estrangeira
                        $sql = "SELECT * FROM equipes where usuarios_id='$cod'";
                        $res = mysqli_query($id, $sql);
                        $linha = mysqli_fetch_array($res);
                        //tacando na variavel cod o id da equipe
                        $cod = $linha['id'];

                        //pegando o nome dos inscritos que tem o chave estrangeira = id da equipe do usuarios logado
                        $termoPesquisa = '';

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $termoPesquisa = $_POST['pesquisa'];
                    
                    
                        $sql = "SELECT * FROM inscritos WHERE equipes_id='$cod' AND nome LIKE '%$termoPesquisa%'";
                    } else {
                        $sql = "SELECT * FROM inscritos where equipes_id='$cod'";

                    }

                        $res = mysqli_query($id, $sql);
                        
                        $posicao = 0;
                        while ($linha = mysqli_fetch_array($res)) { 
                            if ($linha['status'] == 'ativo') {
                            $posicao++;
                            ?>
                        
                            <tr>
                                <td><?php echo $posicao;?></td>

                                <td><?php echo $linha['matricula'];?></td>

                                <td><?php echo $linha['nome'];?></td>

                                <td><?php echo $linha['turma'];?></td>
                                
                                <td ><a class="btn btn-warning" href="edit-inscrito.php?id=<?php echo $linha['id']; ?>">Alterar</a></td>
                                <td ><a class="btn btn-danger" href="src/deleta-inscrito.php?id=<?php echo $linha['id']; ?>">Excluir</a></td>
                
                            </tr>
                
                    <?php } } ?>
                </table>
                
            </div>

    </main>

</body>
</html>