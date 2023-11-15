<?php 
 if (!isset($_SESSION)){
    session_start();
 }

 if (!isset($_SESSION["id"])){
    die("Você deve estar logado para chegar a está pagina. <p><a href=\"index.php\">logar</a></p>");
 }
?>