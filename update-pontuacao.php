<?php
include ("src/extra/protect-adm.php");

include("src/extra/connection.php");

//pegando a id das equipes
$numero_prova = $_POST['numero'];
$primeiro = $_POST['primeiro'];
$segundo = $_POST['segundo'];
$terceiro = $_POST['terceiro'];
$quarto = $_POST['quarto'];
$quinto = $_POST['quinto'];

$sql = "SELECT * FROM pontuacao WHERE id='$numero_prova'";
$res = mysqli_query($id, $sql);

$linha = mysqli_fetch_array($res);

//pegando os pontos da tabela pontuação
$cod1 = $linha["primeiro"];
$cod2 = $linha["segundo"];
$cod3 = $linha["terceiro"];
$cod4 = $linha["quarto"];
$cod5 = $linha["quinto"];

// primeiro colocado
$sql2 = "UPDATE equipes_provas SET equipes_id='$primeiro',pontuacao='$cod1' WHERE provas_id='$numero_prova' AND equipes_id='$primeiro'";

$res1 = mysqli_query($id, $sql2);
// segundo colocado
$sql2 = "UPDATE equipes_provas SET equipes_id='$segundo',pontuacao='$cod2' WHERE provas_id='$numero_prova' AND equipes_id='$segundo'";

$res2 = mysqli_query($id, $sql2);
// terceiro colocado
$sql2 = "UPDATE equipes_provas SET equipes_id='$terceiro',pontuacao='$cod3' WHERE provas_id='$numero_prova' AND equipes_id='$terceiro'";

$res3 = mysqli_query($id, $sql2);
// quarto colocado
$sql2 = "UPDATE equipes_provas SET equipes_id='$quarto',pontuacao='$cod4' WHERE provas_id='$numero_prova' AND equipes_id='$quarto'";

$res4 = mysqli_query($id, $sql2);
//quinto colocado
$sql2 = "UPDATE equipes_provas SET equipes_id='$quinto',pontuacao='$cod5' WHERE provas_id='$numero_prova' AND equipes_id='$quinto'";

$res5 = mysqli_query($id, $sql2);

if (($res1) && ($res2) && ($res3) && ($res4) && ($res5)) { ?>

<!DOCTYPE html>
<html>
<head>
    <title>Atualização bem-sucedido</title>
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
        <h1>Atualizado com sucesso</h1>
        <p style="color:lightslategray;"><small><i>pontuação atualizada com sucesso, caso haja algum problema contate um adiministrador</i></small></p>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "home_adm.php"; 
        }, 22000); 
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