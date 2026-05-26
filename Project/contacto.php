<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mi Pagina web</title>
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

    <div class="container text-center mt-5">
      <img src="img/logo_tech2.png" alt="" style="width:40%">

    </div>

    <div class="container mt-5">
      <h2>Contactanos</h2>
      <p>Por favor asegurese de llenar todos los <code>recuadros </code>antes de enviar:</p>
      <form action="/action_page.php" class="was-validated">
        <div class="form-group">
          <label for="uname">Nombre completo:</label>
          <input type="text" class="form-control" id="uname" placeholder="" name="uname" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="pwd">Correo electronico:</label>
          <input type="password" class="form-control" id="pwd" placeholder="" name="pswd" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="pwd">Asunto:</label>
          <input type="password" class="form-control" id="pwd" placeholder="" name="pswd" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="pwd">Mensaje</label>
          <textarea class="form-control" id="pwd" rows="6"></textarea>
        </div>
        <a class="btn btn-primary" href="">Enviar</a>
    </form>
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
