<?php
require 'connection.php';

$pk = $_GET['id_equipe'];

$sql = "UPDATE equipes SET statu='desativo' WHERE id_equipe='$pk'";

$res = mysqli_query($id, $sql);

if ($res) {
    echo "Registro excluido com sucesso";
} else {
    echo "Erro ao excluir o registro do banco de dados";
}
?>