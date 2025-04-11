<!DOCTYPE html>
<html lang="pt-br">

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

    <head>

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



                 </div>
                  
                 </div>

    
</head>



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


<body>

<div class="form-container">
        <div class="cadastro-card">
            <h1 class="cadastro-title">Cadastro Pessoa</h1>
            <h1 class="cadastro-subtitle">Juridica</h1>
            <div class="title-underline"></div>



                <form action="login.php" method="post">
    

                    <div class="input-group">
                    <input type="text"      class="form-control"        name="pj"           required placeholder="Informe a Razão Social">
                    </div>

                    <div class="input-group">
                    <input type="text"      class="form-control"        name="cnpj"         required placeholder="Informe o CNPJ">
                    </div>

                    <div class="input-group">
                    <input type="text"      class="form-control"        name="tel"          required placeholder="Informe seu telefone">
                    </div>

                    <div class="input-group">
                    <input type="text"      class="form-control"        name="ende"         required placeholder="Informe seu endereço">
                    </div>

                    <div class="input-group">
                    <input type="text"      class="form-control"        name="categoria"    required placeholder="Informe a categoria">
                    </div>

                    <div class="input-group">
                    <input type="text"      class="form-control"        name="email2"        required placeholder="Informe seu email">
                    </div>

                    <div class="input-group">
                    <input type="password"  class="form-control"        name="senha2"        required placeholder="Informe sua senha">
                    </div>


                    <!--<button name = "btnEntrar"      class="entrar">     Entrar      </button> -->
                    <button name = "btnCadastrar"   class="submit-button">  Cadastrar   </button>


                

                </form>


</body>



</html>

