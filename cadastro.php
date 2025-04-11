<!DOCTYPE html>
<html lang="pt-br">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Party</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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


                        <button id="mobile_btn">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        
                    </nav>

                    <div id="mobile_menu">
                        <ul id="mobile_nav_list">
                            <li class="nav-item">
                            <a href="#home">Home</a>
                            </li>
                        </ul>

                    <button class="btn-default">
                        Home
                    </button>  
        </div> 
   
             
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

        body{
            font-family: Arial, Helvetica, sans-serif;
            background:none;
            
        }

        .search-box{
            position: absolute; /*/que a posiçaõ fique em qualquer lugar da tela/ */
            left: 85%;
            transform: translate(-30%, -30%);
           
              
            background: #fff;
            height: 50px;
            padding: 10px;
            border-radius: 40px;

            
            display: flex;
            justify-content: space-between;
            align-items: center;
           
        }

       
        .search-text{
            background: none;
            border: 0;
            outline: 0;

            padding: 0;
            

            font-size: 20px;

            transition: 0.4s;
            width: 0;
            
           
            
        }

        .search-btn{
            width: 10px;
            height: 10px;
            border-radius:50%;

            display: flex;
            justify-content: center;
            align-items: center;

            cursor: pointer;
        }


        .search-box:hover > .search-text{
            width: 200px;
            padding-left: 20px;
        }

        .search-box:hover > .search-btn{
            background: 77,77,77;
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
            background-color: rgba(235, 192, 74, 0.6);
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



@media (max-width: 768px) {
    .navigation_header{
    /*.mobile_menu*/ 
        display: none; /* Esconde a navbar em telas menores que 768px */
    }
}

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
    background-color: rgba(233, 13, 13, 0.91);
    position: fixed;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 15px;
    border-radius: 15px;
    width: 20%;
    color: #fff;
    }

</style>

<body>

<div class="corpo">
            <form action="cadastropf.html" method="POST">
                <div class="caixa">
                    <fieldset>
                        <legend><b> Cadastro</b></legend>
                        <br><br>

                        <div class="navigation_header">
                        <a href="cadastropf.php">Pessoa Física</a>
                        <a href="cadastropj.php">Pessoa Jurídica</a>
                        </div>

                    </fieldset>
                </div>
            </form>
        </div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>      
</body>


</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Footer</title>
    <style>
		* {
    padding: 0;
    margin: 0;    
    box-sizing: border-box;
}

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
    <!-- Conteúdo principal da página -->
    <main>
        <!-- Aqui vai o conteúdo do seu site -->
    </main>
    
    <footer>          	
        <div class="footerBottom">
            <p>Tel (11) 7070-7070</p>
            <p>e-mail: flashparty@gmail.com <span class="designer">Flash Party</span></p>
        </div>
    </footer>
</body>
</html>