<?php 
include("extra/protect-adm.php");

include("extra/connection.php");
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $nivel = $_POST['nivel'];

    $sql = "INSERT INTO usuarios (nome,usuario,senha,nivel) VALUES ('$nome','$usuario','$senha','$nivel')";

    $res = mysqli_query($id, $sql);

if ($res) { ?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro bem-sucedido</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <div style="text-align: center;">
        <h1>Cadastrado com sucesso</h1>
        <p style="color:lightslategray;"><small><i>usuário cadastrado com sucesso, caso haja algum problema contate um adiministrador</i></small></p>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "../form_cad_usuario.php"; 
        }, 2000); 
    </script>
</body>
</html>

<?php 
} 
else 
{
    echo "Erro ao excluir o registro do banco de dados";
}
?>