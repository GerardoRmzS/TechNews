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
    <?php include 'Clases/Contenidos.php';
    if (isset($_GET['idSeccion'])) {
      $idSeccion = $_GET['idSeccion'];
    }
    else {
      $idSeccion = 1;
    }
    $seccion = New Secciones();
    ?>

    </style>
    <!--Fin Css Interno-->

  </head>
  <body class="bg_white">
    <?php include 'Clases/Menu.php'; ?>

    <div class="container">
      <div class="row">
        <div class="col-sm-6 p-0">
          <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/1.jpg" alt="" height="450px">
              </div>
              <div class="carousel-item">
                <img src="img/2.jpg" alt="" height="450px">
              </div>
              <div class="carousel-item">
                <img src="img/3.png" alt="" height="450px">
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 bg_negro text-white">
          <div class="jumbotron-fluid text-center font mt-5 pt-5">
            <br>
            <h4>Bienvenido a TechNews</h4>
            <p>El mejor blog de tecnologia de la UNIAT</p>
            <br>
            <br>
            <br>
            <h6>Descubre lo ultimo en tecnologia</h6>
            <a class="btn btn-outline-light mt-2" href="blog.html">Explorar</a>
          </div>

        </div>

      </div>

    </div>

    <div class="container text-center mt-4 p-5">
      <h3>LO ULTIMO</h3>
      <div class="row">
          <?php echo $seccion->getContenidos($idSeccion); ?>
      </div>
    </div>

    <div class="container text-center mt-3 p-5">
      <h3>TRENDING</h3>
      <div class="card-deck mt-4 text-justify">
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
