<?php
include("extra/protect-cap.php");

include("extra/connection.php");

if (!isset($_SESSION))
{
    session_start();
}

$matricula = $_POST['matricula'];
$turma = $_POST['turma'];
$nome = $_POST['nome'];
$cod = $_SESSION["id"];

$sql = "SELECT * FROM equipes where usuarios_id='$cod'";
$res = mysqli_query($id, $sql);

$linha = mysqli_fetch_array($res);
$cod = $linha["id"];

$sql = "INSERT INTO inscritos (matricula,nome,turma,equipes_id) VALUES ('$matricula','$nome','$turma','$cod')";

$res2 = mysqli_query($id, $sql);

if ($res2) { ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="../assets/image/fivicon.png" type="image/x-icon">
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
        <p style="color:lightslategray;"><small><i>Inscrito(a) cadastrado(a) com sucesso, caso haja algum problema contate um adiministrador</i></small></p>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "../form_cad_inscrito.php"; 
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