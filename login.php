<?php
session_start();

require 'Contato.class.php';

$conecta = $contato = new Contato();

if (!$conecta) {
    echo "Erro ao conectar o Banco de Dados";
} else {
    if (isset($_POST['btnEntrar'])) {
        $nome       = $_POST['nome'] ??'';
        $snome      = $_POST['snome']??'';
        $nascimento = $_POST['nascimento']??'';
        $email      = $_POST['email']??'';
        $senha      = $_POST['senha']??'';

        $user = $contato->chkUser($email);

        if ($user) {
            // se o usuario e senha estiverem corretos
            $user = $contato->chkUserPass($email, $senha);
            if (!empty($user)) {
                $_SESSION['nome'] = $user['nome'];
                header("location:pagina2.php");
            } else {
                echo "<script>
                    alert('Usuario ou senha incorretos')
                    </script>";
                exit;
            }
        } else {
            echo "<script>
                alert('Usuario não encontrado')
                </script>";
        }

    } else {
        if (isset($_POST['btnCadastrar'])) {
            $user = $contato->chkUser($email);
            if ($user) {
                echo "Email já cadastrado";
            } else {
                $contato->insertUser($nome, $snome, $nascimento, $email, $senha);
            }

        }
    }
}

//------------------------------------------------------------------------------------------------------------

$conecta2 = $fornecedor = new Fornecedor();

if (!$conecta2) {
    echo "Erro ao conectar o Banco de Dados";
} else {

    $pj = $_POST['pj']??'';
    $cnpj = $_POST['cnpj']??'';
    $tel = $_POST['tel']??'';
    $ende = $_POST['ende']??'';
    $categoria = $_POST['categoria']??'';
    $email2 = $_POST['email2']??'';
    $senha2 = $_POST['senha2']??'';

    //print_r($_POST);
//exit;
    

    if (isset($_POST['btnEntrar'])) {

        $user = $fornecedor->chkUser($email2);
        if ($user) {
            // se o usuario e senha estiverem corretos
            $user = $fornecedor->chkUserPass($email2, $senha2);
            if (!empty($user)) {
                $_SESSION['pj'] = $user['pj'];
                header("location:pagina2.php");
            } else {
                echo "<script>
                    alert('Usuario ou senha incorretos')
                    </script>";
                exit;
            }
        } else {
            echo "<script>
                alert('Usuario não encontrado')
                </script>";
        }

    } else {
        if (isset($_POST['btnCadastrar'])) {
            $user = $fornecedor->chkUser($email2);
            if ($user) {
                echo "Email já cadastrado";
            } else {
                $fornecedor->insertUser($pj, $cnpj, $tel, $ende, $categoria, $email2, $senha2);
            }

        }
    }
}
