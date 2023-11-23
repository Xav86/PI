<?php
include("extra/protect-adm.php");

include("extra/connection.php");

$numero_prova = $_POST['numero'];
$primeiro = $_POST['primeiro'];
$segundo = $_POST['segundo'];
$terceiro = $_POST['terceiro'];
$quarto = $_POST['quarto'];
$quinto = $_POST['quinto'];

$sql = "SELECT * FROM pontuacao WHERE id='$numero_prova'";
$res = mysqli_query($id, $sql);

$linha = mysqli_fetch_array($res);

$cod1 = $linha["primeiro"];
$cod2 = $linha["segundo"];
$cod3 = $linha["terceiro"];
$cod4 = $linha["quarto"];
$cod5 = $linha["quinto"];

// primeiro colocado
$sql2 = "INSERT INTO equipes_provas (equipes_id,provas_id,pontuacao) VALUES ('$primeiro','$numero_prova','$cod1')";

$res1 = mysqli_query($id, $sql2);
// segundo colocado
$sql2 = "INSERT INTO equipes_provas (equipes_id,provas_id,pontuacao) VALUES ('$segundo','$numero_prova','$cod2')";

$res2 = mysqli_query($id, $sql2);
// terceiro colocado
$sql2 = "INSERT INTO equipes_provas (equipes_id,provas_id,pontuacao) VALUES ('$terceiro','$numero_prova','$cod3')";

$res3 = mysqli_query($id, $sql2);
// quarto colocado
$sql2 = "INSERT INTO equipes_provas (equipes_id,provas_id,pontuacao) VALUES ('$quarto','$numero_prova','$cod4')";

$res4 = mysqli_query($id, $sql2);
//quinto colocado
$sql2 = "INSERT INTO equipes_provas (equipes_id,provas_id,pontuacao) VALUES ('$quinto','$numero_prova','$cod5')";

$res5 = mysqli_query($id, $sql2);

if (($res1) && ($res2) && ($res3) && ($res4) && ($res5)) { ?>

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
        <p style="color:lightslategray;"><small><i>pontos cadastrado com sucesso, caso haja algum problema contate um adiministrador</i></small></p>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "../pontuacao.php"; 
        }, 2000); 
    </script>
</body>
</html>

<?php 
} 
else 
{
    echo "Erro ao cadastrar o registro do banco de dados X(";
}

?>