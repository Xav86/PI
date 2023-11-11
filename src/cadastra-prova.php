<?php
require 'connection.php';

$numero = $_POST['numero'];
$ponto1 = $_POST['ponto1'];
$ponto2 = $_POST['ponto2'];
$ponto3 = $_POST['ponto3'];
$padrao = $_POST['padrao'];
$nome = $_POST['nome'];
$desc = $_POST['descricao'];

$sql = "INSERT INTO pontuacao (primeiro,segundo,terceiro,ponto_padrao) values ('$ponto1','$ponto2','$ponto3','$padrao')";

$res = mysqli_query($id, $sql);

$sql = "SELECT MAX(id) from pontuacao";
$pesquisa = mysqli_query($id, $sql);
$dados = mysqli_fetch_array($pesquisa);
$cod = $dados[0];

$sql2 = "INSERT INTO provas (nome,descricao,numero_prova,pontuacao_id) values ('$nome','$desc','$numero','$cod')";

$res2 = mysqli_query($id, $sql2);

if (($res) && ($res2)) {
    echo "Cadastrado com sucesso";
} else {
    echo "Erro ao cadastrar " . mysqli_error($id);
}

?>