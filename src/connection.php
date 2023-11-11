
<?php

$usuario = 'root';
$senha = '';
$db = 'saga';
$host = 'localhost';

$id = new mysqli($host, $usuario, $senha, $db);


if($id->error)
{
    die("Erro ao conectar ao banco de dados".$mysqli->error);
}


?>