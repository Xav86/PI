<?php
include("src/extra/protect-adm.php");
include("src/extra/connection.php");

$id_prova = $_POST['id'];
$numero = $_POST['numero'];
$ponto1 = $_POST['ponto1'];
$ponto2 = $_POST['ponto2'];
$ponto3 = $_POST['ponto3'];
$padrao = $_POST['padrao'];
$nome = $_POST['nome'];
$desc = $_POST['descricao'];

$sql = "UPDATE provas SET numero_prova = '$numero', nome = '$nome', descricao = '$desc' WHERE id='$id_prova'";
$res = mysqli_query($id, $sql);

$sql = "SELECT pontuacao_id FROM provas WHERE id = $id_prova";
$resultado = mysqli_query($id, $sql);

if ($resultado) {
    $row = mysqli_fetch_assoc($resultado);
    $cod = $row['pontuacao_id'];

    $sql2 = "UPDATE pontuacao SET primeiro = '$ponto1', segundo = '$ponto2', terceiro = '$ponto3', ponto_padrao = '$padrao' WHERE id='$cod'";
    $res2 = mysqli_query($id, $sql2);

} else {
    echo "Erro na obtenção do ID de pontuação: " . mysqli_error($id);
}

if (($res) && ($res2)) { ?>

<!DOCTYPE html>
<html>
<head>
    <title>Atualização bem-sucedida</title>
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
        <p style="color:lightslategray;"><small><i>prova atualizada com sucesso, caso haja algum problema contate um adiministrador</i></small></p>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "visualiza_prova.php"; 
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