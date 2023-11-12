<?php 
require 'connection.php';

$equipe = $_POST['equipe'];
$capitao = $_POST['capitao'];

//falta coisa aqui
$sql = "UPDATE equipes SET capitao='$nome' WHERE nome='$equipe'";
//SELECT id FROM `equipes` WHERE nome='gustavo';
$res = mysqli_query($id, $sql);

if ($res) {
    echo "Cadastrado com sucesso";
} else {
    echo "Erro ao cadastrar " . mysqli_error($id);
}

?>