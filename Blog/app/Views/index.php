<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Mi pagina web</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/estilo2.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Farro:wght@700&display=swap" rel="stylesheet">

  <!--Css Externo-->
  <!--Fin Css Externo-->
  <!--Css Interno-->
  <style>

  </style>
  <!--Fin Css Interno-->

</head>

<body class="bg_negro">

  <nav class="navbar navbar-expand-sm navbar-dark justify-content-end">
    <a class="navbar-brand" href="#">
      <img src="/img/logo.png" alt="" style="width:10%">
      ProLeague
    </a>
    <div class="collapse navbar-collapse flex-grow-0 ml-auto mr-1" id="navbarSupportedContent">
        <ul class="navbar-nav text-right">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/Home/Galery">Galeria</a>
            </li>
            <?php if(isset($username)): echo '
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Bienvenido
            '.$username.'
            </a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Perfil</a>
            <a class="dropdown-item" href="Home/log_out">Logout</a>
            </div>
            </li>
            ' ;
            else: echo '<li class="nav-item active">
            <a class="nav-link" href="/login">Login</a>
            </li>'; endif;?>
        </ul>
    </div>
</nav>

<div class="container-fluid bg-1">
  <div class="row">
    <div class="col-sm-6 p-0">
      <div class="centrado">
        <h1>Juega como un profesional</h1>
        <p>Contrata a tu coach de League of legends</p>
        <br>
        <a href="#" class="btn btn-info" role="button">Encuentra a tu coach</a>
      </div>
    </div>
  </div>
</div>

  <div class="container text-white mt-5">
    <div class="jumbotron-fluid text-justify font3">
      <h3>Ofrecemos una variedad de entrenadores con muy amplia comprension de League of Legends.
        Compre ahora lecciones de entrenamiento y conviertase en un jugador profesional</h3>
    </div>
  </div>


  <div class="container text-white mt-5 p-5">
    <h3>Coaches League of Legends verificados</h3>
    <p>Explora nuestros ultimos Coaches verificados</p>
    <div class="card-deck mt-4 text-left text-dark">
      <div class="card">
        <img class="card-img-top" src="/img/1.jpg" alt="Card image">
        <div class="card-body">
          <p class="card-text font4">Seiya</p>
          <a href="/PaypalController" class="btn btn-primary">Ver</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="/img/2.jpg" alt="Card image">
        <div class="card-body">
          <p class="card-text font4">Josedeodo</p>
          <a href="#" class="btn btn-primary">Ver</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="/img/3.jpg" alt="Card image">
        <div class="card-body">
          <p class="card-text font4">Tyler1</p>
          <a href="#" class="btn btn-primary">Ver</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="/img/4.jpg" alt="Card image">
        <div class="card-body">
          <p class="card-text font4">Sneaky</p>
          <a href="#" class="btn btn-primary">Ver</a>
        </div>
      </div>

    </div>

    <div class="card-deck mt-5 text-justify text-dark">
      <div class="card">
        <img class="card-img-top" src="/img/5.jpg" alt="Card image">
        <div class="card-body ">
          <p class="card-text font4">Ibai</p>
          <a href="#" class="btn btn-primary">Ver</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="/img/6.jpg" alt="Card image">
        <div class="card-body">
          <p class="card-text font4">Reven</p>
          <a href="#" class="btn btn-primary">Ver</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="/img/7.jpg" alt="Card image">
        <div class="card-body">
          <p class="card-text font4">Rekkles</p>
          <a href="#" class="btn btn-primary">Ver</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="/img/8.jpg" alt="Card image">
        <div class="card-body ">
          <p class="card-text font4">Faker</p>
          <a href="#" class="btn btn-primary">Ver</a>
        </div>
      </div>

    </div>
  </div>

  <footer class="bg_negro text-center text-lg-start mt-5">
    <!-- Copyright -->
    <div class="text-center p-3 text-white">
      © Untitled Design:
      <a href="#">Templated</a>
      . Images
      <a href="#">Unsplash</a>
      . Video
      <a href="#">Coverr</a>
    </div>
    <!-- Copyright -->
  </footer>

  <!--Boostrap and Javascript-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!--Custom Scripts-->


</body>

</html>
