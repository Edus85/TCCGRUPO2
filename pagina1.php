<?php
session_start();
$_SESSION['nome'] = "nome";

header("location:pagina2.php");
exit;

?>