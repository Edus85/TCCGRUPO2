<?php

include "Contato.class.php";

$conecta = $contato = new Contato();

/* Verifica se o contato foi criado */
if(!$contato){
    echo "<script>
    alert('Erro ao criar contato')
    window.location.href = 'sair.php'
    </script>";
    /*se não, redireciona para a página de saída */
}else{
    /*se sim, pega o email e o metodo para checar contato */
    if(!empty($_POST['id'])){
        $id     = $_POST['id'];
        $nome   = $_POST['nome'];
        $snome   = $_POST['snome'];
        $nascimento   = $_POST['nascimento'];
        $email  = $_POST['email'];
        $senha  = $_POST['senha'];

        if(!empty($nome) && !empty($snome) && !empty($nascimento) && !empty($email) &&  !empty($senha)){
            $contato->atualizar($id, $nome, $snome, $nascimento, $email, $senha);
    }

    header("location: contatos.php");
}
}