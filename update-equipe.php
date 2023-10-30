<?php
require 'code/connection.php';

$id_equipe = $_POST['id'];
$nome = $_POST['nome'];

$sql = "UPDATE equipes SET nome='$nome' WHERE id_equipe='$id_equipe'";

$res = mysqli_query($id,$sql);

if ($res)
{
    echo "Alterado com sucesso";

} else {
    echo "Erro ao cadastrar".mysqli_error($id);

}