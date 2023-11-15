<?php 
include("extra/protect.php");

include("extra/connection.php");

$equipe = $_POST['equipe'];
$capitao = $_POST['capitao'];

//pega id do capitão
$sql = "SELECT * FROM usuarios WHERE nome='$capitao'";

$res = mysqli_query($id, $sql);
$linha = mysqli_fetch_array($res);
$cod = $linha['id'];
//atualiza equipes com o id do usuario
$sql2 = "UPDATE equipes set usuarios_id='$cod' where nome='$equipe'";

$res2 = mysqli_query($id, $sql2);

if (($res) && ($res2)) { ?>

<!DOCTYPE html>
<html>
<head>
    <title>Vinculo bem-sucedido</title>
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
        <h1>Vinculado com sucesso</h1>
        <p style="color:lightslategray;"><small><i>este usuario foi vinculado a uma equipe, caso caso ocorra algum problema contate os desenvolvedores</i></small></p>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "../form_cad_capitao.php"; 
        }, 2000); 
    </script>
</body>
</html>
<?php 
    } 
    else 
    {
        echo "Erro ao vincular o capitão do banco de dados";
    }

?>