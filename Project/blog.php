<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mi pagina web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <!--Css Externo-->
    <!--Fin Css Externo-->
    <!--Css Interno-->
    <style>

    </style>
    <!--Fin Css Interno-->

  </head>
  <body class="bg_white">
    <nav class="navbar bg_negro navbar-dark font mb-4">
      <a class="navbar-brand" href="#">
        <img src="img/logo_tech2.png" alt="" style="width:40%">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="inicio.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobre mi.html">Sobre mi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.html">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="galeria.html">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.html">Contacto</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container font2">
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/carro.jpg" alt="" width="1100" height="600">
            <div class="carousel-caption">
              <h1>Enterate de lo ultimo en tecnologia</h1>
              <p>Lo mejor del 2020</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/cel.jpg" alt="" width="1100" height="600">
            <div class="carousel-caption">
              <h1>Los mejores equipos y accesorios</h1>
              <p>Manten tu equipo actualizado</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/gamer.jpg" alt="" width="1100" height="600">
            <div class="carousel-caption">
              <h1>Lo ultimo en Esports</h1>
              <p>Amamos los videojuegos!!</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>

    <div class="container">
      <div class="jumbotron-fluid text-center font2 mt-5">
        <h2>Navega por las publicaciones más recientes, accede al archivo de posts
          o encuentra lo que más te interese</h2>
      </div>
    </div>

    <div class="container text-center mt-5 p-5">
      <div class="card-deck mt-4 text-left">
        <div class="card">
          <img class="card-img-top" src="img/4.jpg" alt="Card image">
          <div class="card-body">
            <a href="" class="stretched-link font2 text-secondary">Computadoras</a>
            <p class="card-text">Eleve su escritura a otro nivel con los nuevos teclados mecánicos Drop...</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/5.jpg" alt="Card image">
          <div class="card-body">
            <a href="" class="stretched-link font2 text-secondary">Accesorios</a>
            <p class="card-text">Rolex se pone a la cabeza en mercado de relojes</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/6.jpg" alt="Card image">
          <div class="card-body">
            <a href="" class="stretched-link font2 text-secondary">Entretenimiento</a>
            <p class="card-text">Xbox vs Playstation <br>¿Que consola es la mejor?</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/7.jpg" alt="Card image">
          <div class="card-body">
            <a href="" class="stretched-link font2 text-secondary">Computadoras</a>
            <p class="card-text">Nvidia anuncia su nueva gama de tarjetas de video</p>
          </div>
        </div>

      </div>

      <div class="card-deck mt-5 text-justify">
        <div class="card">
          <img class="card-img-top" src="img/8.jpg" alt="Card image">
          <div class="card-body ">
            <a href="" class="stretched-link font2 text-secondary">Celulares</a>
            <p class="card-text">Ventas de Apple se ven afectadas despues del anuncio de....</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/9.jpg" alt="Card image">
          <div class="card-body">
            <a href="" class="stretched-link font2 text-secondary">Musica</a>
            <p class="card-text">Porque BOSE sigue siendo la mejor opcion en audio y ....</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/10.jpg" alt="Card image">
          <div class="card-body">
            <a href="" class="stretched-link font2 text-secondary">Tecnologia</a>
            <p class="card-text">"Cyberseguridad" un tema que nos deberia importar a todo el mundo</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/11.png" alt="Card image">
          <div class="card-body ">
            <a href="" class="stretched-link font2 text-secondary">Deportes</a>
            <p class="card-text">Con estos lentes de realidad virtual ya no nesecitaras de....</p>
          </div>
        </div>

      </div>
      <div class="card-deck mt-5 text-justify">
        <div class="card">
          <img class="card-img-top" src="img/8.jpg" alt="Card image">
          <div class="card-body">
            <a href="" class="stretched-link font2 text-secondary">Celulares</a>
            <p class="card-text">Ventas de Apple se ven afectadas despues del anuncio de....</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/12.jpg" alt="Card image">
          <div class="card-body">
            <a href="" class="stretched-link font2 text-secondary">Automoviles</a>
            <p class="card-text">Como financiar el auto de tus sueños</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/13.jpg" alt="Card image">
          <div class="card-body">
            <a href="articulo.html" class="stretched-link font2 text-secondary">Apps</a>
            <p class="card-text">TikTok presenta queja contra gobierno de Trump...</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/14.jpg" alt="Card image">
          <div class="card-body">
            <a href="" class="stretched-link font2 text-secondary">Tecnologia</a>
            <p class="card-text">Centro Deportivo de alto rendimiento podria reabrir proximamente sus...</p>
          </div>
        </div>

      </div>
    </div>





    <div class="container-fluid bg_negro copyright mt-5">
      <div class="row">
        <div class="col-sm-12 text-center text-white">
          © Untitled Design:
          <a href="#">Templated</a>
          . Images
          <a href="#">Unsplash</a>
          . Video
          <a href="#">Coverr</a>

        </div>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
</html>
