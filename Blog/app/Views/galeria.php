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

<body class="bg-1">

  <nav class="navbar navbar-expand-sm navbar-dark justify-content-end bg_negro">
    <a class="navbar-brand" href="#">
      <img src="/img/logo.png" alt="" style="width:10%">
      ProLeague
    </a>
    <div class="collapse navbar-collapse flex-grow-0 ml-auto mr-1" id="navbarSupportedContent">
        <ul class="navbar-nav text-right">
            <li class="nav-item active">
                <a class="nav-link" href="index">Inicio</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Galeria</a>
            </li>
            <?php if(isset($username)): echo '
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Bienvenido
            '.$username.'
            </a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Perfil</a>
            <a class="dropdown-item" href="log_out">Logout</a>
            </div>
            </li>
            ' ;
            else: echo '<li class="nav-item active">
            <a class="nav-link" href="login">Login</a>
            </li>'; endif;?>
        </ul>
    </div>
</nav>

<section id="galeria" class="container">
  <div class="row">
    <?php foreach ($datos as $key):?>
    <div class="col-lg-4">
      <img src="<?= $key->img ?>" alt="">
    </div>
    <?php endforeach; ?>
  </div>
</section>


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


</body>

</html>
