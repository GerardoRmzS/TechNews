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

  <form class="formulario" action="attempt_register" method="POST">
    <h1>Registrate</h1>
    <div class="contenedor">
      <div class="input-contenedor">
        <i class="fas fa-user icon"></i>
        <input type="text" name="username" placeholder="Usuario">

      </div>
      <div class="input-contenedor">
        <i class="fas fa-envelope icon"></i>
        <input type="text" name="email" placeholder="Email">

      </div>
      <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <input type="password" name="pass" placeholder="Contraseña">

      </div>
      <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <input type="password" name="pass_confirm" placeholder="Confirmar Contraseña">

      </div>
      <button class="button">Registrarse</button>
      <p>Al registrarte, aceptas nuestras Condiciones de uso y Politica de privacidad.</p>
      <p>Ya tienes cuenta?<a class="link" href="/Home/index">Login</a></p>

    </div>

  </form>

  <!--Boostrap and Javascript-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!--Custom Scripts-->
</body>

</html>
