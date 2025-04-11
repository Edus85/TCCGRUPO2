<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Party</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="css/cadastro2.css">
    <script src="src/javascript/script.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

</head>   

<body>
    <div class="header" id="header">                                        
        <div class="logo_header">
            <img src="imagens/logosemf.png" class="img_logo_header" alt="Logo Flash Party">
        </div>  

        <nav id="navbar">
            <i class="fa-solid" id="nav_logo"> Flash Party</i>
            <div class="navigation_header">
                <a href="home.php">Home</a>
                <a href="menu.php">Menu</a>
                <a href="sobre.php">Sobre</a>
                <a href="login.php">Entrar</a>
                <a href="cadastro.php">Cadastro</a>                               
            </div>
        </nav>
    </div>

    <div class="form-container">
        <div class="cadastro-card">
            <h1 class="cadastro-title">Cadastro Pessoa</h1>
            <h1 class="cadastro-subtitle">Fisica</h1>
                <div class="title-underline"></div>

                <form action="login.php" method="post">

                    <div class="input-group">
                    <input type="text"      class="form-control"        name="nome"           required placeholder="Informe seu nome">
                    </div>

                    <div class="input-group">
                    <input type="text"      class="form-control"            name="snome"           required placeholder="Informe seu sobrenome">
                    </div>

                    <div class="input-group">
                    <input type="text"      class="form-control"            name="nascimento"           required placeholder="Informe sua data de nascimento">
                    </div>

                    <div class="input-group">
                    <input type="text"      class="form-control"            name="email"           required placeholder="Informe seu email">
                    </div>

                    <div class="input-group">
                    <input type="password"      class="form-control"        name="senha"           required placeholder="Informe sua senha">
                    </div>


                            <!--<h1>Cadastro Pessoa Fisica</h1>
                            <input type="text"      name="nome"     required placeholder="Informe seu nome">
                            <input type="text"      name="snome"    required placeholder="Informe seu sobrenome" >
                            <input type="text"      name="nascimento"required placeholder="Informe sua data de nascimento">
                            <input type="text"      name="email"    required placeholder="Informe seu email">
                            <input type="password"  name="senha"    required placeholder="Informe sua senha"> -->

                            <!--<button name = "btnEntrar"      class="entrar">     Entrar      </button> -->
                            <button name = "btnCadastrar"   class="submit-button">  Cadastrar   </button>
                        </div>
                    </form>

</body>

<script>
    const passwordIcons = document.querySelectorAll('.password-icon');
    passwordIcons.forEach(icon => {
        icon.addEventListener('click', function () {
            const input = this.parentElement.querySelector('.form-control');
            input.type = input.type === 'password' ? 'text' : 'password';
            this.classList.toggle('fa-eye');
        })
    })
</script>

</html>