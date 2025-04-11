<?php

include "Contato.class.php";

$contato = new Contato();

if(!empty(($_GET['id']))){

    $id = $_GET['id'];
    $del = $contato->deletar($id);
}
    /*if($del){
    echo "Contato deletado com sucesso";
    }else{
    echo "Erro ao deletar contato";
    }
    */

    header("location:contatos.php");

