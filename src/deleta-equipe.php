<?php
require 'connection.php';

$pk = $_GET['id'];

$sql = "UPDATE equipes SET status='desativo' WHERE id='$pk'";

$res = mysqli_query($id, $sql);

if ($res) { ?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Bem-sucedido</title>
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
        <h1>Excluido com sucesso</h1>
        <p style="color:lightslategray;"><small><i>este cadastro foi desativado, caso queira ativalo contate um adiministrador</i></small></p>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "../visualiza_equipe.php"; 
        }, 4000); 
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