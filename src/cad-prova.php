<?php
include("extra/protect-adm.php");

include("extra/connection.php");

$numero = $_POST['numero'];
$ponto1 = $_POST['ponto1'];
$ponto2 = $_POST['ponto2'];
$ponto3 = $_POST['ponto3'];
$ponto4 = $_POST['ponto4'];
$ponto5 = $_POST['ponto5'];
$nome = $_POST['nome'];
$desc = $_POST['descricao'];

$sql = "INSERT INTO pontuacao (primeiro,segundo,terceiro,quarto,quinto) values ('$ponto1','$ponto2','$ponto3','$ponto4','$ponto5')";

$res = mysqli_query($id, $sql);

$sql = "SELECT MAX(id) from pontuacao";
$pesquisa = mysqli_query($id, $sql);
$dados = mysqli_fetch_array($pesquisa);
$cod = $dados[0];

$sql2 = "INSERT INTO provas (nome,descricao,numero_prova,pontuacao_id) values ('$nome','$desc','$numero','$cod')";

$res2 = mysqli_query($id, $sql2);

if (($res) && ($res2)) { ?>

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
        <p style="color:lightslategray;"><small><i>prova cadastrada com sucesso, caso haja algum problema contate um adiministrador</i></small></p>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "../form_cad_prova.php"; 
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