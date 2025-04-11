<!DOCTYPE html>
<html lang="pt-br">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Party</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="src/javascript/script.js">
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

<style>

/*
#nav_logo {
    font-size: 24px;
    color: white;
}

.header,
.navigation_header{
            
    display: flex;
    flex-direction: row;
    align-items: center;
            
}

.header{
background: linear-gradient(to right, rgb(255,0,0), rgb(255,165,0));
box-shadow: 1px 1px 4px;
height: 6em;
justify-content: space-evenly;
padding: 0 10%;
}

.navigation_header{
            
gap: 2em;
z-index: 1;
}

.navigation_header a{ /*  COR DA LETRA DOS BOTOES 
             
text-decoration: none;
color:#fff;
font-weight: bold;

}

#nav_logo {
    font-size: 24px;
    color: white;
}

.container{

display: flex;
justify-content: center;

}

#form_header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

#form_title {
    font-weight: 500;
    color: #272727;
    position: relative;
}

#form_title::after {
    content: '';
    position: absolute;
    width: 100px;
    height: 3px;
    border-radius: 30px;
    background-color: red;
    left: 0;
    bottom: 0;
}

#form {
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    gap: 50px;
    height: 100%;
}

#input_container {
    display: grid;
    gap: 24px;
}

.form-label {
    font-size: 12px;
    color: #404044;
    font-weight: 500;
}

#form_title {
    font-weight: 500;
    color: #272727;
    position: relative;
}

#form_title::after {
    content: '';
    position: absolute;
    width: 100px;
    height: 3px;
    border-radius: 30px;
    background-color: red;
    left: 0;
    bottom: 0;
}

#form {
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    gap: 50px;
    height: 100%;
}

#input_container {
    display: grid;
    gap: 24px;
}

.form-label {
    font-size: 12px;
    color: #404044;
    font-weight: 500;
}

.input-field {
    display: flex;
    align-items: center;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 10px 15px -3px rgba(0, 0, 0, 0.1);
}

.input-field i {
    display: flex;
    align-items: center;
    width: 30px;
    height: 20px;
    color: #404044;
}

.form-control {
    padding: 10px;
    width: 100%;
    border: none;
    border-radius: 8px;
}

.input-field .password-icon:hover {
    cursor: pointer;
    color: #676770;
}

.form-control:focus {
    outline: none;
}

.input-box .input-field:focus-within {
    outline: 2px solid orange;
}

input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0 1000px red inset !important;
    color: #000;
}

.radio-container {
    grid-column: span 2;
}

#gender_inputs {
    display: flex;
    gap: 20px;
}

.radio-box {
    display: flex;
    gap: 4px;
    align-items: center;
}

.form-control[type="radio"] {
    accent-color: red;
}

.container{
    height: 100vh;
    width: 100vw;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

.box{
    width: 400px;
    height: 700px;
    background-color: orange;
    padding: 15px;
    box-sizing: border-box;
}

h1{
    text-align: center;
}

input{
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: none;
    background-color: lightgray;
    margin-top: 5px;
    box-sizing: border-box;
}

button{
    width: 100%;
    color: aquamarine;
    border: 1px solid;
    margin-top: 10px;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
}

.entrar{
    background-color: green;
}

.criar{
    background-color: red;
}

.entrar:hover{
    background-color: lightgreen;
    border: 1px solid green;
}

.criar:hover{
    background-color: #fa8072;
    border: 1px solid red;
}

table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    margin-top: 20px;
    font-family: Arial, sans-serif;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 4px 10px;

}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

th {
    background-color: #4CAF50;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}

td a {
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 5px;
    margin-right: 5px;
}

td a[href*="editar"] {
    background-color: #029115;
    color: white;
}

td a[href*="excluir"] {
    background-color: #ff3333;
    color: white;
}

td a:hover {
    opacity: 0.8;
}

body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .header {
            background: linear-gradient(to right, rgb(255,0,0), rgb(255,165,0));
            box-shadow: 1px 1px 4px;
            height: 6em;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 10%;
        }

        .logo-section {
            display: flex;
            align-items: center;
        }

        .img_logo_header {
            width: 70px;
            height: auto;
            margin-right: 10px;
        }

        .flash-party-text {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .navigation_header {
            display: flex;
            gap: 2em;
        }

        .navigation_header a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            border: 3px solid white;
            border-radius: 5px;
            padding: 10px;
            transition: background-color 0.3s;
        }

        .navigation_header a:hover {
            background-color: yellow;
            color: black;
        }

        /* Form container styling 
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh;
            padding: 20px;
        }

        .cadastro-card {
            background-color: white;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .cadastro-title {
            color: #333;
            text-align: center;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .cadastro-subtitle {
            color: #333;
            text-align: center;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .title-underline {
            width: 80px;
            height: 4px;
            background-color: #ff3300;
            margin: 0 auto 25px;
            border-radius: 2px;
        }

        .input-group {
            position: relative;
            margin-bottom: 15px;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px 12px 40px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            color: #555;
            background-color: white;
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 13px;
            color: #888;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 13px;
            color: #888;
            cursor: pointer;
        }

        .submit-button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background: linear-gradient(to right, #ff3300, #ff9500);
            color: white;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            transition: opacity 0.3s;
            margin-top: 10px;
        }

        .submit-button:hover {
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            .navigation_header {
                display: none;
            }
            
            .cadastro-card {
                width: 90%;
            }
        }
*/

/*------------------------------------------------------------------------------------------------------- */

.form-control[type="radio"] {
    accent-color: red;
}


.form-control:focus {
    outline: none;
}

.cadastro-subtitle {
            color: #333;
            text-align: center;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 25px;
        }


.cadastro-title {
            color: #333;
            text-align: center;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 5px;
        }


.submit-button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background: linear-gradient(to right, #ff3300, #ff9500);
            color: white;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            transition: opacity 0.3s;
            margin-top: 10px;
        }

        .submit-button:hover {
            opacity: 0.9;
        }

.input-group {
position: relative;
margin-bottom: 15px;
}

.title-underline {
width: 80px;
height: 4px;
background-color: #ff3300;
margin: 0 auto 25px;
border-radius: 2px;
}


.cadastro-card {
background-color: white;
border-radius: 10px;
width: 100%;
max-width: 400px;
padding: 30px;
box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
}

.cadastro-card {
width: 90%;
}

.form-container {
display: flex;
justify-content: center;
align-items: center;
min-height: 90vh;
padding: 20px;
}



.input-field .password-icon:hover {
    cursor: pointer;
    color: #676770;
}


.form-control {
            width: 100%;
            padding: 12px 15px 12px 40px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            color: #555;
            background-color: white;
        }



body{
            font-family: Arial, Helvetica, sans-serif;
            background:none;
            
        }

        .img_logo_header{
            width: 70px;
            position:left;   
        }

       

        .img_logo_header{
            width: 70px;
            position:left;   
        }

        
        .header,
        .navigation_header{
            
            display: flex;
            flex-direction: row;
            align-items: center;
            
        }

        .header{
            background: linear-gradient(to right, rgb(255,0,0), rgb(255,165,0));
            box-shadow: 1px 1px 4px;
            height: 6em;
            justify-content: space-evenly;
            padding: 0 10%;
        }

        .navigation_header{
            
            gap: 2em;
            z-index: 1;
        }

        .navigation_header a{ /*  COR DA LETRA DOS BOTOES */
             
            text-decoration: none;
            color:#fff;
            font-weight: bold;

        }

       
        .btn_icon_header{
            background-color: transparent;
            border: none;
            color: black;
            cursor: pointer;
            display: none;

        }    


        a{
            
            border: 3px solid white;
            border-radius: 5px;
            padding: 10px;
        }
        
        
        a:hover{
            background-color: yellow;
        }

        
.container{

display: flex;
justify-content: center;

}

#nav_logo {
    font-size: 24px;
    color: white;
}


header {
    width: 100%;
    padding: 28px 8%;
    position: sticky;
    top: 0;
    background-color: var(--color-primary-1);
    z-index: 3;
}

#navbar {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

#nav_logo {
    font-size: 24px;
    color: none;
}

#nav_list {
    display: flex;
    list-style: none;
    gap: 48px;
}

.nav-item a {
    text-decoration: none;
    color: #1d1d1dad;
    font-weight: 600;
}

.nav-item.active a {
    color: var(--color-neutral-1);
    border-bottom: 3px solid var(--color-primary-4);
}

#mobile_btn {
    display: none;
}

#mobile_menu {
    display: none;
    left: 85%
}

@media screen and (max-width: 1170px) {
    #nav_list,
    #navbar .btn-default {
        display: none;
    } 

    #mobile_btn {
        display: block;
        border: none;
        background-color: transparent;
        font-size: 1.5rem;
        cursor: pointer;
    }

    #mobile_menu.active {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #mobile_nav_list {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin: 12px 0px;
    }

    #mobile_nav_list .nav-item {
        list-style: none;
        text-align: center;
    } 
}

.caixa{
    background-color: rgba(18, 18, 19, 0.55);
    position: fixed;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 15px;
    border-radius: 15px;
    width: 20%;
    color: #fff;
    }


    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');



.body_box {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: white;
}

.btn-default {
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    padding: 8px 12px;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 500;
    color: orange;
    cursor: pointer;
    gap: 8px;
    height: fit-content;
    box-shadow: 0px 10px 15px -3px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease;
}

.btn-default:hover {
    background-color: red;
}

#form_box {
    display: flex;
    flex-direction: column;
    gap: 32px;
    height: 300%;
    background-color: orange;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 10px 15px -3px rgba(0, 0, 0, 0.1);    
}

#form_header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

#form_title {
    font-weight: 500;
    color: #272727;
    position: relative;
}

#form_title::after {
    content: '';
    position: absolute;
    width: 100px;
    height: 3px;
    border-radius: 30px;
    background-color: red;
    left: 0;
    bottom: 0;
}

#form {
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    gap: 50px;
    height: 100%;
}

#input_container {
    display: grid;
    gap: 24px;
}

.form-label {
    font-size: 12px;
    color: #404044;
    font-weight: 500;
}

.input-field {
    display: flex;
    align-items: center;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 10px 15px -3px rgba(0, 0, 0, 0.1);
}

.input-field i {
    display: flex;
    align-items: center;
    width: 30px;
    height: 20px;
    color: #404044;
}


.input-field .password-icon:hover {
    cursor: pointer;
    color: #676770;
}


.input-box .input-field:focus-within {
    outline: 2px solid orange;
}

input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0 1000px red inset !important;
    color: #000;
}

.radio-container {
    grid-column: span 2;
}

#gender_inputs {
    display: flex;
    gap: 20px;
}

.radio-box {
    display: flex;
    gap: 4px;
    align-items: center;
}



.container{
    height: 100vh;
    width: 100vw;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

.box{
    width: 400px;
    height: 700px;
    background-color: orange;
    padding: 15px;
    box-sizing: border-box;
}

h1{
    text-align: center;
}

input{
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: none;
    background-color: lightgray;
    margin-top: 5px;
    box-sizing: border-box;
}

button{
    width: 100%;
    color: aquamarine;
    border: 1px solid;
    margin-top: 10px;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
}

.entrar{
    background-color: green;
}

.criar{
    background-color: red;
}

.entrar:hover{
    background-color: lightgreen;
    border: 1px solid green;
}

.criar:hover{
    background-color: #fa8072;
    border: 1px solid red;
}

table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    margin-top: 20px;
    font-family: Arial, sans-serif;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 4px 10px;

}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

th {
    background-color: #4CAF50;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}

td a {
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 5px;
    margin-right: 5px;
}

td a[href*="editar"] {
    background-color: #029115;
    color: white;
}

td a[href*="excluir"] {
    background-color: #ff3333;
    color: white;
}

td a:hover {
    opacity: 0.8;
}



</style>

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

