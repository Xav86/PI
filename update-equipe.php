<?php
require 'src/connection.php';

$id_equipe = $_POST['id'];
$nome = $_POST['nome'];

$sql = "UPDATE equipes SET nome='$nome' WHERE id='$id_equipe'";

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
        <p style="color:lightslategray;"><small><i>equipe alterada com sucesso, caso haja algum problema contate um adiministrador</i></small></p>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "visualiza_equipe.php"; 
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