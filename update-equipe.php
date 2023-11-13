<?php
require 'src/connection.php';

$id_equipe = $_POST['id'];
$nome = $_POST['nome'];

$sql = "UPDATE equipes SET nome='$nome' WHERE id='$id_equipe'";

$res = mysqli_query($id,$sql);

if ($res)
{
    echo "Alterado com sucesso";

} else {
    echo "Erro ao alterar".mysqli_error($id);

}

?>