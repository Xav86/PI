<?php
if (!isset($_SESSION))
{
  session_start();
}

if (!isset($_SESSION["id"]) || ($_SESSION['nivel'] <> 'adm'))
{
  die("Você deve estar logado ou ter acesso para chegar a está pagina. <p><a href=\"index.php\">logar</a></p>");
}

?>