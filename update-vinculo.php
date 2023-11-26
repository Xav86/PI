<?php
include("src/extra/protect-adm.php");

include("src/extra/connection.php");

$id_equipe = $_POST['id'];
$equipe = $_POST['equipe'];
$capitao = $_POST['capitao'];

$sql = "SELECT * FROM equipes WHERE id='$id_equipe'";
$res = mysqli_query($id,$sql);
$linha = mysqli_fetch_array($res);
$cod = $linha['usuarios_id'];

$sql = "SELECT * FROM usuarios WHERE nome='$capitao'";
$res2 = mysqli_query($id,$sql);
$linha2 = mysqli_fetch_array($res2);
$cod2 = $linha2['id'];

$sql = "UPDATE equipes SET usuarios_id='$cod2' WHERE id='$id_equipe'";

$res2 = mysqli_query($id,$sql);

if (($res) && ($res2)) { ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="assets/image/fivicon.png" type="image/x-icon">
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
        <p style="color:lightslategray;"><small><i>vinculo alterada com sucesso, caso haja algum problema contate um adiministrador</i></small></p>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "visualiza_vinculo.php"; 
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