<?php
include("src/extra/protect-cap.php");

include("src/extra/connection.php");

$id_inscrito = $_POST['id'];
$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$turma = $_POST['turma'];

$sql = "UPDATE inscritos SET matricula='$matricula', nome='$nome', turma='$turma' WHERE id='$id_inscrito'";

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
        <p style="color:lightslategray;"><small><i>inscrito alterada com sucesso, caso haja algum problema contate um adiministrador</i></small></p>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "visualiza_inscrito.php"; 
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