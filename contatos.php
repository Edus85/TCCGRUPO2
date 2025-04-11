<?php

include 'Contato.class.php';

$contato = new Contato();

?>

<link rel="stylesheet" href="css/telaLogin.css">

<table>
    <tr>
        <th>Id </th>
        <th>Nome </th>
        <th>Snome </th>
        <th>Data de Nascimento </th>
        <th>Email </th> 
        <th>Ações </th>
    </tr>

    <?php
    $lista = $contato->getAll();

    foreach ($lista as $contato) {
    ?>
    <tr>
        <td><?php echo $contato['id']; ?></td>
        <td><?php echo $contato['nome']; ?></td>
        <td><?php echo $contato['snome']; ?></td>
        <td><?php echo $contato['nascimento']; ?></td>
        <td><?php echo $contato['email']; ?></td>
        <td>
            <a href="alterar.php?id=<?php echo $contato['email']; ?>">Editar</a>
            <a href="excluir.php?id=<?php echo $contato['id']; ?>">Excluir</a>
        </td>
        </tr>
        <?php
    }