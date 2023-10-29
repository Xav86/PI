<?php
$dbname = "saga";

if (!($id = mysqli_connect("localhost", "root"))) {
    echo "não foi possivel estabelecer uma conexão com o banco";
    exit;

}
if (!($con = mysqli_select_db($id, $dbname))) {
    echo "Não foi possivel estabelecer uma conexão com o gerenciador2.";
    exit;

}

?>