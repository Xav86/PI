<?php 
include("src/extra/protect-adm.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/style-pontuacao.css">
    <link rel="shortcut icon" href="assets/image/fivicon.png" type="image/x-icon">
    <title>Pontuação</title>
    
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
                <div id="title">
                    <h1>Pontuação das Equipes</h1>
                    <p>Digite aqui o numero da prova e qual colocação que as equipes ficaram</p>
                    
                </div>

                <form action="" method="post">
                    <div class="numero-prova">
                        <?php
                        include 'src/extra/connection.php';
                        
                        $sql = "SELECT * FROM provas ORDER BY numero_prova ASC";
                        $res = mysqli_query($id, $sql);

                        ?>
                        
                        <label for="nprova">Selecione o Número da prova</label>
                        <select id="nprova" class="form-select" aria-label="Default select example">
                            <option></option>
                            <?php while ($linha = mysqli_fetch_array($res)){
                            if ($linha['status'] == 'ativo'){    
                            ?>
                            <option><?php echo $linha['numero_prova']; } } ?></option>                            
                        </select> 

                    </div>

                    <?php
                    $sql = "SELECT * FROM equipes";
                    $res2 = mysqli_query($id, $sql);
                    
                    ?>

                    <div class="campos">
                        <label for="nprova">Selecione o Primeiro Colocado</label>
                        <select id="nprova" class="form-select" aria-label="Default select example">
                            <option></option>
                            <?php while ($linha2 = mysqli_fetch_array($res2)){?>
                            <option><?php echo $linha2['nome']; }?></option>
                            
                        </select> 

                    </div>

                    <?php $res2 = mysqli_query($id, $sql); ?>
                    
                    <div class="campos">
                        <label for="nprova">Selecione o Segundo Colocado</label>
                        <select id="nprova" class="form-select" aria-label="Default select example">
                            <option></option>
                            <?php while ($linha2 = mysqli_fetch_array($res2)){?>
                            <option><?php echo $linha2['nome']; } ?></option>
                            
                        </select> 

                    </div>

                    <?php $res2 = mysqli_query($id, $sql); ?>

                    <div class="campos">
                        <label for="nprova">Selecione o Terceiro Colocado</label>
                        <select id="nprova" class="form-select" aria-label="Default select example">
                            <option></option>
                            <?php while ($linha2 = mysqli_fetch_array($res2)){?>
                            <option><?php echo $linha2['nome']; } ?></option>
                        
                        </select>
                        
                    </div>

                    <?php $res2 = mysqli_query($id, $sql); ?>

                    <div class="campos">
                        <label for="nprova">Selecione o Quarto Colocado</label>
                        <select id="nprova" class="form-select" aria-label="Default select example">
                            <option></option>
                            <?php while ($linha2 = mysqli_fetch_array($res2)){?>
                            <option><?php echo $linha2['nome']; } ?></option>
                        
                        </select>
                        
                    </div>

                    <?php $res2 = mysqli_query($id, $sql); ?>

                    <div class="campos">
                        <label for="nprova">Selecione o Quinto Colocado</label>
                        <select id="nprova" class="form-select" aria-label="Default select example">
                            <option></option>
                            <?php while ($linha2 = mysqli_fetch_array($res2)){?>
                            <option><?php echo $linha2['nome']; } ?></option>
                        
                        </select>
                        
                    </div>
                    
                </form>

            </div>
            
        </div>
        
    </main>

</body>
</html>