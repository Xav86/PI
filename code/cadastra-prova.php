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

echo "$numero, $ponto1, $ponto2, $ponto3, $ponto4, $ponto5, $nome, $desc"
?>