<?php
session_start();

if(isset($_SESSION['nome'])){
    echo "Ola ". $_SESSION['nome'];
}else{
    echo "Você não esta logado";
}
echo "<br><a href='pagina1.php'> Voltar para pagina anterior </a>";

echo "<br><a href='sair.php'> Sair </a>";

?>