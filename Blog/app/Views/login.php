<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Mi pagina web</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <link rel="stylesheet" href="/css/estilo.css">
  <!--Css Externo-->
  <!--Fin Css Externo-->
  <!--Css Interno-->
  <style>

  </style>
  <!--Fin Css Interno-->

</head>

<body>

  <form class="formulario" action="/Home/login" method="POST">
    <h1>Login</h1>
    <div class="contenedor">
      <div class="input-contenedor">
        <i class="fas fa-envelope icon"></i>
        <input type="text" name="email" placeholder="Correo">

      </div>
      <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <input type="password" name="password" placeholder="Contraseña">

      </div>
      <div>
        <input type="checkbox" name="remember">
        <label for="remember">Mantener sesion</label>
      </div>

      <button class="button">Iniciar Sesion</button>
      <p>No tienes cuenta?<a class="link" href="/Home/register">Registrate</a></p>

    </div>

  </form>

  <!--Boostrap and Javascript-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!--Custom Scripts-->
</body>

</html>
