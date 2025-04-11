<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Party</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="src/javascript/script.js">
    <script src="src/javascript/script.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scrollreveal"></script>


    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background:none;
            
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

        .box{
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }

        a{
            
            border: 3px solid white;
            border-radius: 5px;
            padding: 10px;
        }
        
        
        a:hover{
            background-color: yellow;
        }
       

        .flex-container{

            display: flex;
            justify-content: center;
            
        }

        .container mt-5{
            background:none;
        }


        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }


        .carrossel {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            height: 400px;
            display: flex;
            flex-wrap: nowrap;
            justify-content: start;
        }

        .card {
            width: 80px;
            border-radius: .75rem;
            background-size: cover;
            cursor: pointer;
            overflow: hidden;
            border-radius: 2rem;
            margin: 0 10px;
            display: flex;
            align-items: flex-end;
            transition: .6s cubic-bezier(.28,-0.03,0,.99);
            box-shadow: 0px 10px 30px -5px rgba(0,0,0,0.8);
        }

        .card > .row {
            color: white;
            display: flex;
            flex-wrap: nowrap;
        }

        .card > .row > .icon {
            background: #223;
            color: white;
            border-radius: 50%;
            width: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 15px;
        }

        .card > .row > .description {
            display: flex;
            justify-content: center;
            flex-direction: column;
            overflow: hidden;
            height: 80px;
            width: 520px;
            opacity: 0;
            transform: translateY(30px);
            transition-delay: .3s;
            transition: all .3s ease;
        }

        .description p {
            color: #b0b0ba;
            padding-top: 5px;
        }

        .description h4 {
            text-transform: uppercase;
        }

        input {
            display: none;
        }

        input:checked + label {
            width: 600px;
        }

        input:checked + label .description {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        .card[for="c1"] {
            background-image: url('imagens/01.jpeg');
        }
        .card[for="c2"] {
            background-image: url('imagens/02.jpeg');
        }
        .card[for="c3"] {
            background-image: url('imagens/03.jpeg');
        }
        .card[for="c4"] {
            background-image: url('imagens/04.jpeg');

        }

        .container{

        display: flex;
        justify-content: center;

        }

        #nav_logo {
            font-size: 24px;
            color: white;
        }



        /*@media (max-width: 768px) {
            .navigation_header
            .mobile_menu {
                display: none; /* Esconde a navbar em telas menores que 768px 
            }
        } */

        header {
            /*width: 100%;*/
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
            .btn-default {
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

                
                /** {
            padding: 0;
            margin: 0;    
            box-sizing: border-box;
        } */

        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

        .footerBottom {
            background-color: orange;
            padding: 10px;
            text-align: center;
        }

        .footerBottom p {
            color: wheat;
        }
		

    </style>

</head>
 
<body>

        <div class="header" id="header">

                                           
            <div class="logo_header">
                <img src="imagens/logosemf.png" class="img_logo_header" alt="Logo Flash Party">
             

                    <nav id="navbar">
                        <i class="fa-solid" id="nav_logo"> Flash Party</i>
                    
                            <div class="navigation_header">
                            <a href="home.php">Home</a>
                            <a href="menu.php">Menu</a>
                            <a href="sobre.php">Sobre</a>
                            <a href="entrar.php">Entrar</a>
                            <a href="cadastro.php">Cadastro</a>                   
                            
                            </div>
                    </nav>
            </div> 
        </div>

    






<div class="carrossel">
        <div class="container">
            <input type="radio" name="slide" id="c1" checked>
            <label for="c1" class="card">
                <div class="row">
                    <div class="icon">1</div>
                    <div class="description">
                        <h4>FESTAS</h4>
                        <p>Completas com bolos, salgadinhos</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c2" >
            <label for="c2" class="card">
                <div class="row">
                    <div class="icon">2</div>
                    <div class="description">
                        <h4>Digital Technology</h4>
                        <p>Gets better every day -
                         stay tuned</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c3" >
            <label for="c3" class="card">
                <div class="row">
                    <div class="icon">3</div>
                    <div class="description">
                        <h4>Globalization</h4>
                        <p>Help people all over the world</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c4" >
            <label for="c4" class="card">
                <div class="row">
                    <div class="icon">4</div>
                    <div class="description">
                        <h4>New technologies</h4>
                        <p>Space engineering becomes
                         more and more advanced</p>
                    </div>
                </div>
            </label>
        </div>
    </div>


    <footer>          	
        <div class="footerBottom">
            <p>Tel (11) 7070-7070</p>
            <p>e-mail: flashparty@gmail.com <span class="designer">Flash Party</span></p>
        </div>
    </footer>


</body>


</html>