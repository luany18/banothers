<?php 
include('config.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banother´s</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
  
    <!--menu-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href=""><img src="logo.png" alt="" class="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#Sobre">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Produtos">Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Cadastro">Cadastro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Contato">Contato</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



      <!--header-->
      <header>
        <div class="title">
            <div class="contanier1">
                <h1>Banother´s</h1>
                <p>A melhor doceria da regiao</p>
            </div>
        </div>
      </header>

      <!--sobre-->
      <div class="sobre">
        <div class="contanier">
            
        </div>
        <div class="container">
            <div class="row">
              <h2 id="Sobre">Sobre Nós</h2>
              <div class="banner">
                <img src="imagens/WhatsApp Image 2023-11-08 at 11.55.07.jpeg" alt="">

                <div class="text">
                  
                    <p> Tudo começou em 2022 quando a família Zambelli foi em uma cafeteria conhecida. Lá eles experimentaram pela primeira vez a banoffee, uma torta deliciosa de banana, doce de leite, chantilly e canela. Foi então que o irmão mais novo(Igor) resolveu reproduzir a mesma receita, na qual foi um sucesso!
                      No ano seguinte tiveram uma perda de um membro da familia e no meio dessa dificuldade encontraram uma união. Sendo assim começaram a reproduzir a receita da banoffee feita pelo irmão mais novo, porém em uma versão menor feita em potinhos. A idéia foi um sucesso, a apresentação era bonita e prática.
                      A partir dai o irmão do meio, assumiu a parte administrativa e a responsabilidade de vender na rua, junto com o mais novo, enquanto as demais funções foram divididas entre os outros membros da família.
                      A família Zambelli são a Sueli(mãe), William (irmão mais velho), Joji e Luany (irmãos do meio), e Igor(irmão mais novo)
                      O nome Banother´s vem de (Banofefe+Brother´s), pretendem abrir uma cafeteria e doceria no futuro.
                    </p>
                </div>
                
              </div>
                    

            </div>
        </div>
      </div>


      <!--nossos produtos-->
      <div class="produtos">
        <div class="Container text-center">
            <h2 id="Produtos">Nossos produtos</h2>
        </div>
        <div class="container-produtos">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="imagens/WhatsApp Image 2023-09-17 at 18.30.47 (1).jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Banoffee tamanho familía</p>
                        </div>
                      </div>
                </div>               

                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="imagens/WhatsApp Image 2023-09-17 at 18.30.46 (1).jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Torta de Limão</p>
                        </div>
                      </div>
                </div>

                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="imagens/WhatsApp Image 2023-09-17 at 18.30.46.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Banoffee</p>
                        </div>
                      </div>
                </div>


            </div>
            
        </div>
        


        <!--Cadastro-->
     <div class="cadastro">
     <section>
        <h2 id="Cadastro">Cadastro</h2>
        <!--<form action="https://api.staticforms.xyz/submit" method="post">-->
          <form action="form.php" method= "post">
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Digite seu nome">
            <label>Email</label>
            <input type="email" name="email" placeholder="Digite seu email">
            

            <input type="hidden" name="accessKey" value="0f941d1d-3c38-4647-b7d5-4c77a59cb4dc">
<!--<input type="hidden" name="redirectTo" value="http://127.0.0.1:5500/obrigado.html">-->
          
            <button type="submit">Enviar</button>
       
        </form>
        
     </section>
     </div>


     <!--contato-->
     <footer class="section-p1">
        <div class="col">
            <img class="logo1" src="logo.png" alt="logo">
            <h4 id="Contato">Contato</h4>
            <p><strong>Endereço:</strong> Avenida Alberto Santos Dumont, 220 - Vila Osasco</p>
            <p><strong>Telefone:</strong> +55 (11) 94897-1125 / +55 (11) 0000-0000</p>
            <p><strong>Horário:</strong> 14:00 - 22:00, Seg - Sab</p>
            <div class="follow">
                <h4>Nos siga:</h4>
                <div class="icon">
                  <span class="icons">
                    <a href="https://www.instagram.com/banothers/"><ion-icon name="logo-instagram"></ion-icon></a>
                  <a href=""> <ion-icon name="logo-twitter"></ion-icon></a>
                  <a href="https://api.whatsapp.com/send/?phone=5511948971125"><ion-icon name="logo-whatsapp"></ion-icon></a>
                  <a href=""> <ion-icon name="logo-pinterest"></ion-icon></a>
                  <a href=""><ion-icon name="logo-youtube"></ion-icon></a>
                  </span>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>Formas de entrega</h4>
            <a href="#">Delivery</a>
            <a href="#">Delivery Information</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col-install">
            <h4>Formas de pagamento</h4>
            <div class="row">
                <img src="imagens/cartao.jpeg" alt="">
            </div>
        </div>

        <div class="copyright">
            <p>©️ 2023, BANOTHER´S - Todos os Direitos Reservados</p>
        </div>
    </footer>
        

   
  
      


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>