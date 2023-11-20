<?php
include("extra/protect-cap.php");

include("extra/connection.php");

$pk = $_GET['id'];

$sql = "UPDATE inscritos SET status='desativo' WHERE id='$pk'";

$res = mysqli_query($id, $sql);

if ($res) { ?>

<!DOCTYPE html>
<html>
<head>
    <title>exclusão bem-sucedida</title>
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
            window.location.href = "../visualiza_inscrito.php"; 
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