<?php
include("src/extra/protect-adm.php");

include("src/extra/connection.php");

$id_usuario = $_POST['id'];
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];

$sql = "UPDATE usuarios SET nome='$nome', usuario='$usuario', senha='$senha', nivel='$nivel' WHERE id='$id_usuario'";

$res = mysqli_query($id,$sql);

if ($res) { ?>

<!DOCTYPE html>
<html>
<head>
    <title>Alteração bem-sucedido</title>
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
        <h1>Alterado com sucesso</h1>
        <p style="color:lightslategray;"><small><i>usuario alterada com sucesso, caso haja algum problema contate um adiministrador</i></small></p>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "visualiza_usuario.php"; 
        }, 2000); 
    </script>
</body>
</html>

<?php 
} 
else 
{
    echo "Erro ao atualizar o registro do banco de dados";
}
?>