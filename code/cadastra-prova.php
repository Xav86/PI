<?php
require 'connection.php';

$numero = $_POST['numero'];
$ponto1 = $_POST['ponto1'];
$ponto2 = $_POST['ponto2'];
$ponto3 = $_POST['ponto3'];
$ponto4 = $_POST['ponto4'];
$ponto5 = $_POST['ponto5'];
$nome = $_POST['nome'];
$desc = $_POST['descricao'];

$sql = "INSERT INTO provas (numero,nome,descricao) values ('$numero','$nome','$desc')";

$res = mysqli_query($id, $sql);

$sql = "SELECT MAX(id_prova) from provas";
$pesquisa = mysqli_query($id, $sql);
$dados = mysqli_fetch_array($pesquisa);
$cod = $dados[0];

$sql2 = "INSERT INTO pontos (cod_prova,ponto1,ponto2,ponto3,ponto4,ponto5) values ($cod,'$ponto1','$ponto2','$ponto3','$ponto4','$ponto5')";

$res2 = mysqli_query($id, $sql2);

if (($res) && ($res2)) {
    echo "Cadastrado com sucesso";
} else {
    echo "Erro ao cadastrar " . mysqli_error($id);
}

?>