<?php
require 'connection.php';
$nome = $_POST['nome'];

$sql = "INSERT INTO equipes (nome) VALUES ('$nome')";

$res = mysqli_query($id, $sql);

if ($res) {
    echo "Cadastrado com sucesso";
} else {
    echo "Erro ao cadastrar " . mysqli_error($id);
}

?>
