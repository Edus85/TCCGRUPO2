<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Party - Sobre Nós</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: white;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header styles - keeping as is */
        .img_logo_header {
            width: 70px;
            position: left;   
        }
        
        .header,
        .navigation_header {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .header {
            background: linear-gradient(to right, rgb(255,0,0), rgb(255,165,0));
            box-shadow: 1px 1px 4px;
            height: 6em;
            justify-content: space-evenly;
            padding: 0 10%;
        }

        .navigation_header {
            gap: 2em;
            z-index: 1;
        }

        .navigation_header a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            border: 3px solid white;
            border-radius: 5px;
            padding: 10px;
        }
        
        .navigation_header a:hover {
            background-color: yellow;
        }

        #nav_logo {
            font-size: 24px;
            color: white;
        }

        /* Modern About Us Page Styles */
        main {
            flex: 1;
        }

        .about-section {
            display: flex;
            padding: 80px 10%;
            gap: 40px;
            background-color: #f9f5f0;
        }

        .about-text {
            flex: 1;
            padding-right: 20px;
        }

        .about-text h1 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 25px;
            color: #e63900;
        }

        .about-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 25px;
        }

        .about-image {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .about-card {
            padding: 40px;
            background: linear-gradient(to right, rgb(255,0,0), rgb(255,165,0));
            border-radius: 10px;
            color: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            max-width: 500px;
        }

        .about-card h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .team-section {
            padding: 60px 10%;
            text-align: center;
        }

        .team-section h2 {
            font-size: 2.5rem;
            color: #e63900;
            margin-bottom: 40px;
        }

        .team-members {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .team-member {
            flex: 1;
            min-width: 250px;
            max-width: 300px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .team-member img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .team-member h3 {
            font-size: 1.5rem;
            color: #e63900;
            margin-bottom: 10px;
        }

        .team-member p {
            color: #666;
            margin-bottom: 15px;
        }

        .cta-section {
            padding: 60px 10%;
            text-align: center;
            background: linear-gradient(to right, rgb(255,0,0), rgb(255,165,0));
            color: white;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .cta-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-button {
            display: inline-block;
            padding: 15px 30px;
            background-color: white;
            color: #e63900;
            font-weight: bold;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: yellow;
        }

        /* Footer styles - keeping as is */
        .footerBottom {
            background-color: orange;
            padding: 10px;
            text-align: center;
        }

        .footerBottom p {
            color: wheat;
        }

        /* Responsive adjustments */
        @media screen and (max-width: 768px) {
            .about-section {
                flex-direction: column;
                padding: 40px 5%;
            }

            .about-text h1 {
                font-size: 2.5rem;
            }

            .team-member {
                min-width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Header - Keeping original code -->
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
                <a href="entrar.php">Entrar</a>
                <a href="cadastro.php">Cadastro</a>                   
            </div>
        </nav>
    </div>

    <!-- Modern About Us Content -->
    <main>
        <section class="about-section">
            <div class="about-text">
                <h1>Conheça a Flash Party</h1>
                <p>A Flash Party é uma empresa que visa a facilidade e rapidez na busca por artigos e produtos destinados a realização de festas. Nosso objetivo é unir prestador e cliente através de uma plataforma intuitiva e confiável.</p>
                <p>Fundada com a missão de simplificar a organização de eventos, a Flash Party se tornou referência no mercado de festas e eventos, oferecendo uma solução completa tanto para quem busca produtos para sua festa quanto para quem deseja oferecer seus serviços.</p>
                <p>Nossa plataforma garante a confiabilidade através da verificação da responsabilidade dos prestadores de serviços, criando um ambiente seguro para todos os usuários.</p>
            </div>
            <div class="about-image">
                <div class="about-card">
                    <h2>Nossa Missão</h2>
                    <p>Facilitar a conexão entre prestadores de serviços de festas e clientes, criando um ambiente prático, rápido e confiável para a organização de eventos inesquecíveis.</p>
                </div>
            </div>
        </section>

        <section class="team-section">
            <h2>Nossa Equipe</h2>
            <div class="team-members">
                <div class="team-member">
                    <alt="Fundador">
                    <h3>Maria Silva</h3>
                    <p>Fundadora & CEO</p>
                    <p>Especialista em marketing digital com mais de 10 anos de experiência no ramo de eventos.</p>
                </div>
                <div class="team-member">
                    <alt="Co-fundador">
                    <h3>João Oliveira</h3>
                    <p>Co-fundador & CTO</p>
                    <p>Desenvolvedor com visão inovadora para criar soluções tecnológicas simples e eficientes.</p>
                </div>
                <div class="team-member">
                    <alt="Diretor">
                    <h3>Ana Santos</h3>
                    <p>Diretora de Operações</p>
                    <p>Responsável por garantir a qualidade e confiabilidade de todos os prestadores na plataforma.</p>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <h2>Comece a organizar sua festa hoje!</h2>
            <p>Cadastre-se na Flash Party e tenha acesso aos melhores prestadores de serviços para festas. Se você é um prestador, venha mostrar seus produtos e começar a fazer parte da nossa comunidade.</p>
            <a href="cadastro.php" class="cta-button">Cadastre-se agora</a>
        </section>
    </main>

    <!-- Footer - Keeping original code -->
    <footer>          	
        <div class="footerBottom">
            <p>Tel (11) 7070-7070</p>
            <p>e-mail: flashparty@gmail.com <span class="designer">Flash Party</span></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Simple scroll reveal animation
        ScrollReveal().reveal('.about-text', { 
            delay: 300,
            distance: '50px',
            origin: 'left'
        });
        ScrollReveal().reveal('.about-card', { 
            delay: 500,
            distance: '50px',
            origin: 'right'
        });
        ScrollReveal().reveal('.team-member', { 
            delay: 300,
            distance: '30px',
            origin: 'bottom',
            interval: 200
        });
    </script>
</body>
</html>