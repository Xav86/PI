<?php 
 if (!isset($_SESSION))
 {
    session_start();
 }

 if (!isset($_SESSION["id"]) || ($_SESSION['nivel'] <> 'cap'))
 {
   die("Você deve estar logado ou ter acesso para chegar a está pagina. <p><a href=\"login.php\">logar</a></p>");
 }
 
?>