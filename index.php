<?php 
include("src/extra/connection.php");
//aqui que chega se tem esses campos, se sim, ele executa o código
if(isset($_POST['usuario']) || isset($_POST['senha']))
{
    //dar aviso de preencher campo, mas meio que não precisa...
    if(strlen($_POST['usuario']) == 0){
        // echo'preencha o usuario';

    }else if(strlen($_POST['senha']) == 0){
        // echo 'preencha sua senha';

    } else 
    {
        //pegando dados e jogando pra dentro da variavel
        $usuario = $id->real_escape_string($_POST['usuario']);
        $senha = $id->real_escape_string($_POST['senha']);

        //selecionando os campso usuario e senha na tabela usuarios
        $sql_code = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha = '$senha'";
        $sql_query = $id->query($sql_code) or die('Falha na execução do código SQL:'.$id->error);
        //pegando o numero de linhas que tem o nome e a senha certa, que se for 1, ele faz os negócio
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1)
        {
            $usuario = $sql_query->fetch_assoc();
            //criando uma sessão
            if(!isset($_SESSION)){
                session_start();
            }
            //Pegando dados especificos da linha selecionada e colocando dentro de sessões
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nivel'] = $usuario['nivel'];
            $_SESSION['status'] = $usuario['status'];

            //mandando pra outra pragina
            if(($_SESSION['nivel'] == 'cap') && (($_SESSION['status']) == 'ativo'))
            {
                    header("location: home_cap.php");
                    
            } else if (($_SESSION["nivel"] == "adm") && ($_SESSION['status'] == 'ativo'))
            {
                header("location: home_adm.php");
   
            }
//        } else { echo'Falha ao logar! usuario ou senha incorretos, ou usuário não esta ativo'; }
        }            
    }
    
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/style-login.css">
    <link rel="shortcut icon" href="assets/image/fivicon.png" type="image/x-icon">
    <title>Login</title>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <main> <!-- Código Principal -->
        <div id="container">
            <div id="logar">

                <div id="title"> <!-- Cabeçario -->
                    <h1>Login</h1>
                    <p>Bem-vindo à Saga! efetue seu login preenchndo os campos abaixo.</p>
                </div>
                <!-- <hr> -->
                <div id="box">
                    <form action="" method="post">

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="User" name="usuario" required>
                                <label for="floatingInput">Usuário</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="password" name="senha" required>
                                <label for="floatingPassword">Senha</label>
                            </div>
                        
                            <div id="entrar">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-lg">Logar</button>
                                    
                                </div>

                            </div>

                    </form>
                    
                    <div class="aviso">
                        <p>Em caso de dificuldade, entre em contato com os Administradores.</p>
                        
                    </div>

                </div>

            </div>

        </div>

    </main>

</body>
</html>