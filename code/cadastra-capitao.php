<?php 
require 'connection.php';
$nome = $_POST['nome'];
$equipe = $_POST['equipe'];

$sql = "UPDATE equipes SET capitao='$nome' WHERE nome='$equipe'";

$res = mysqli_query($id, $sql);

if ($res) {
    echo "Cadastrado com sucesso";
} else {
    echo "Erro ao cadastrar " . mysqli_error($id);
}

?>