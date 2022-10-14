<?php include("dao/conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Hoteis</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <link type="image/png" sizes="16x16" rel="icon" href="imagens/icone1.png">
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <header>
    <nav id="menu_title">
        <h1 class="logo">BeM Viagens</h1>
          <ul class="nav-list">
            <li><a href="#">Home</a></li>
            <li><a href="#Conheça nossos Pacotes">Pacotes</a></li>
            <li><a href="#Serviços">Serviços</a></li>
          
            <li><a href="tela de cadastro/cadastro.html" class="right" target="_blank">Cadastrar</a></li>
            <li><a href="Tela de login/login.html" class="right" target="_blank">Login</a></li>
          </ul>
    </nav>
  </header>

  <main>

  <a name="Conheça nossos Pacotes"></a>
  <section class="pacotes">

    <h1 class="titulo-pct">Conheça nossos pacotes</h1>
                                  
    <div class="class pacotes-cards">
                              <!--Pacote 1-->
      <div class="card">
        <div class="card-tag card-tag-top">
            <p>Promoção</p>
        </div>

        <div class="card-tag card-tag-bottom">
          <p>R$ 4.500,00</p>
        </div>

          <img class="card-image" src="https://images.unsplash.com/photo-1514214246283-d427a95c5d2f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bWlhbWl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Miami">
          <div class="card-content">
            <h1>Miami - 5 noites Hotel Premium</h1>
              <ul>
                <li><i data-feather="coffee"></i> Café da manhã incluso</li>
                <li><i data-feather="wifi"></i> Wi-fi</li>
                <li><i data-feather="briefcase"></i> Pet friendly</li>
              </ul>
          </div>
        </div>

                              <!--Pacote 2-->
        <div class="card">
          <div class="card-tag card-tag-top">
            <p>Promoção</p>
          </div>

          <div class="card-tag card-tag-bottom">
            <p>R$ 5.500,00</p>
          </div>

          <img class="card-image" src="https://images.unsplash.com/photo-1597466599360-3b9775841aec?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8b3JsYW5kb3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="Orlando">
          <div class="card-content">
            <h1>Orlando - 5 noites Hotel Premium</h1>
              <ul>
                <li><i data-feather="coffee"></i> Café da manhã incluso</li>
                <li><i data-feather="wifi"></i> Wi-fi</li>
                <li><i data-feather="briefcase"></i> Pet friendly</li>
              </ul>
          </div>
        </div>

                              <!--Pacote 3-->
        <div class="card">
          <div class="card-tag card-tag-top">
            <p>Promoção</p>
          </div>

          <div class="card-tag card-tag-bottom">
            <p>R$ 5.500,00</p>
          </div>

          <img class="card-image" src="https://images.unsplash.com/photo-1619083382085-9452906b7157?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGNhbGlmb3JuaWF8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="California">
            <div class="card-content">
              <h1>California - 5 noites Hotel Premium</h1>
                <ul>
                  <li><i data-feather="coffee"></i> Café da manhã incluso</li>
                  <li><i data-feather="wifi"></i> Wi-fi</li>
                  <li><i data-feather="briefcase"></i> Pet friendly</li>
                </ul>
            </div>
        </div>

                                <!--Pacote 4-->
        <div class="card">
          <div class="card-tag card-tag-top">
            <p>Promoção</p>
          </div>

          <div class="card-tag card-tag-bottom">
            <p>R$ 5.000,00</p>
          </div>
             
          <img class="card-image" src="https://images.unsplash.com/photo-1486299267070-83823f5448dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8bG9uZHJlcyUyMGJpZyUyMGJlbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="California">
            <div class="card-content">
              <h1>Londres - 10 noites Hotel Premium</h1>
                <ul>
                  <li><i data-feather="coffee"></i> Café da manhã incluso</li>
                  <li><i data-feather="wifi"></i> Wi-fi</li>
                  <li><i data-feather="briefcase"></i> Pet friendly</li>
                </ul>
            </div>
          </div>


                                    <!--Pacote 5-->
            <div class="card">
              <div class="card-tag card-tag-top">
                <p>Promoção</p>
              </div>
    
              <div class="card-tag card-tag-bottom">
                <p>R$ 6.500,00</p>
              </div>
    
              <img class="card-image" src="https://images.unsplash.com/photo-1552751118-d3cde54807de?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8aXRhbGlhfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="California">
                <div class="class card-content">
                  <h1>Itália - 5 noites Hotel Premium</h1>
                    <ul>
                      <li><i data-feather="coffee"></i> Café da manhã incluso</li>
                      <li><i data-feather="wifi"></i> Wi-fi</li>
                      <li><i data-feather="briefcase"></i> Pet friendly</li>
                    </ul>
                </div>
              </div>


                                     <!--Pacote 6-->
              <div class="card">
                <div class="card-tag card-tag-top">
                  <p>Ultimas vagas!</p>
                </div>
    
              <div class="card-tag card-tag-bottom">
                <p>R$ 8.500,00</p>
              </div>
    
              <img class="card-image" src="https://images.unsplash.com/photo-1431274172761-fca41d930114?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cGFyaXN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="California">
                <div class="card-content">
                  <h1>França - 15 noites Hotel Premium</h1>
                    <ul>
                      <li><i data-feather="coffee"></i> Café da manhã incluso</li>
                      <li><i data-feather="wifi"></i> Wi-fi</li>
                      <li><i data-feather="briefcase"></i> Pet friendly</li>
                    </ul>
                </div>
              </div>
      </div>
    </section>

    <a name="Serviços"></a>
    <section class="servicos">
      <h1 class="servicos-title">Serviços incluido nos pacotes</h1>
      <div class="servicos-cards">
          <div class="card">
            <i data-feather="map"></i>
              <div class="cards-textos">
                <h3>Tours-guiados</h3>
                <p>Lorem ipsum dolor sit amet consecteturolorum 
                  asperiores, distinctio alias enim? Harum, nobis!</p>
              </div>
              <button>Saiba mais</button>
          </div>

          <div class="card">
            <i data-feather="camera"></i>
              <div class="cards-textos">
                <h3>Fotografias profissional</h3>
                <p>Lorem ipsum dolor sit amet consecteturolorum 
                  asperiores, distinctio alias enim? Harum, nobis!</p>
              </div>
              <button>Saiba mais</button>
          </div>

          <div class="card">
            <i data-feather="navigation"></i>
              <div class="cards-textos">
                <h3>Aluguel de veiculos</h3>
                <p>Lorem ipsum dolor sit amet consecteturolorum 
                  asperiores, distinctio alias enim? Harum, nobis!</p>
              </div>
              <button>Saiba mais</button>
          </div>
      </div>
    </section>
  </main>

  <footer>
    <p>Site desenvolvido por <strong>Bruno Lima</strong></p>
  </footer>

  <script>
    feather.replace()
  </script>

  <script src="interatividade.js"></script>

</body>
</html>