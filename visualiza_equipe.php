<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style-visualiza-equipe.css">
    <title>Visualiza Equipe</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="home_adm.html">
                <img src="assets/image/cedup_logo.webp" alt="Logo Cedup" width="30" height="24" class="d-inline-block align-text-top">
                Cedup
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Provas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cadastro_prova.html">Cadastrar Prova</a></li>
                            <li><a class="dropdown-item" href="#">Editar Prova</a></li>
                            <li><a class="dropdown-item" href="#">Excluir Prova</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Equipes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cadastro_equipe.html">Cadastrar Equipe</a></li>
                            <li><a class="dropdown-item" href="visualiza_equipe.php">Visualizar Equipe</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Capitões
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cadastrar_capitao.html">Cadastrar Capitão</a></li>
                            <li><a class="dropdown-item" href="#">Editar Capitão</a></li>
                            <li><a class="dropdown-item" href="#">Excluir Capitão</a></li>
                        </ul>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Sair</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <main>
        <div id="alinhamento">
            <div id="tabela">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col" style="text-align:end;">Pontos</th>
                            <th scope="col" style="text-align:end;">Editar</th>
                            <th scope="col" style="text-align:end;">Excluir</th>
                        </tr>
                    </thead>
                    <?php
                        require 'code/connection.php';

                        $sql = ('SELECT * FROM equipes ORDER BY pontuacao_total DESC');

                        $res = mysqli_query($id, $sql);
                        while ($linha = mysqli_fetch_array($res)) { ?>
                            <tr> <!-- Necessário corrigir a ordem da lista -->
                                <td>
                                    <?php echo $linha['id_equipe'];?>
                                </td>
                                <td>
                                    <?php echo $linha['nome'];?>
                                </td>
                                <td style="text-align:end;">
                                    <?php echo $linha['pontuacao_total'];?>
                                </td>
                                <td style="text-align:end;"><a href="#">nada ainda</a></td>
                                <td style="text-align:end;"><a href="#">nada ainda</a></td>
                
                            </tr>
                
                        <?php } ?>
                </table>
                
            </div>
        </div>       
            
    </main>
        
</body>
</html>