<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style-cadastro-capitao.css">
    <title>Cadastro de Capitões</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <!-- Logo -->
        <div class="container-fluid">
            <a class="navbar-brand" href="home_adm.html">
                <img src="assets/image/cedup_logo.webp" alt="Logo Cedup" width="30" height="24" class="d-inline-block align-text-top">
                Cedup
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <!-- Links da barra de navegação -->
                <ul class="navbar-nav">
                    <!-- Links das Provas -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Provas</a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cadastro_prova.html">Cadastrar Prova</a></li>
                            <li><a class="dropdown-item" href="#">Visualiza Prova</a></li>

                        </ul>

                    </li>

                    <!-- Links da Equipe-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Equipes</a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cadastro_equipe.html">Cadastrar Equipe</a></li>
                            <li><a class="dropdown-item" href="visualiza_equipe.php">Visualizar Equipe</a></li>

                        </ul>

                    </li>

                    <!-- Links do Capitão -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Capitões</a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cadastrar_capitao.php">Cadastrar Capitão</a></li>
                            <li><a class="dropdown-item" href="#">Visualiza Capitão</a></li>

                        </ul>

                    </li>

                    <!-- Deslogar -->
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Sair</a>
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
                    <h1>Cadastro de Capitões</h1>
                    <p>Faça o cadastro de um capitão e <br> o vincule a uma equipe</p>
                    
                </div>

                <!-- Inserir dados -->
                <form action="code/cadastra-capitao.php" method="post">  
                    <!-- Nome do capitão -->  
                    <div id="campos">
                        <label>Insira o nome do Capitão</label>
                        <input type="text" class="form-control" placeholder="Nome do Capitão" aria-label="Username" aria-describedby="addon-wrapping" name="nome" required>

                    </div>

                    <!-- Vincular um capitão a uma equipe -->
                    <div id="campos">

                        <label>Escolha a equipe para o Capitão</label>
                            
                        <select class="form-select" aria-label="Default select example" name="equipe" required>
                            <option selected></option>
                            <?php
                            require 'code/connection.php';

                            $sql = ('SELECT * FROM equipes');
                            $res = mysqli_query($id, $sql);

                            while ($linha = mysqli_fetch_array($res)) { 

                            if (($linha['statu'] == 'ativo') && ($linha['capitao'] == '')){ ?>

                            <option><?php echo $linha['nome'];?></option>
                            <?php } } ?>
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