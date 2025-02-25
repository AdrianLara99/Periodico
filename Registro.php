<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="covid boyacá" />
  <meta name="description" content="Noticias sobre el Covid-19 en Boyacá Colombia" />
  <link rel="icon" type="image/png" href="img/fav.png" />
  <link rel="stylesheet" href="css/estilos.css" />
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js" />
  <title>Iniciar Sesion</title>
</head>

<body>
  <!-- partial:index.partial.html -->
  <?php
  require_once 'procesos/conexion.php';
  $sql = "select*from ";
  $resultado = $conexion->query($sql);
  ?>

  <div class="page">
    <div class="container">
      <div class="izquierdo">
        <div class="login">Regístrate</div>
        <div class="texto-iniciar-sesion">
          Infórate sobre las noticias de coronavirus en Boyacá, <br />
          nuevos casos de contagio y avances de la pandemia.
        </div>
      </div>
      <div class="derecho">
        <svg viewBox="0 0 320 300">
          <defs>
            <linearGradient inkscape:collect="always" id="linearGradient" x1="13" y1="193.49992" x2="307" y2="193.49992" gradientUnits="userSpaceOnUse">
              <stop style="stop-color: #ff00ff;" offset="0" id="stop876" />
              <stop style="stop-color: #ff0000;" offset="1" id="stop878" />
            </linearGradient>
          </defs>
          <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
        </svg>
        <form action="procesos/loginuser.php" method="post" class="form registro">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" required>
          <label for="apellido">Apellido</label>
          <input type="text" name="apellido" id="apellido" required>
          <label for="correo">Correo</label>
          <input type="email" name="correo" id="email" required>
          <label for="pasword">Contraseña</label>
          <input type="password" name="pasword" id="pasword" required>
          <input type="submit" name="enviado" class="btn" id="submit-registro">
          <p class="boton-registrate">ya tienes cuenta? -><a href="login.php">Inicia sesion</a></p>
        </form>
      </div>
    </div>
  </div>
  <!-- partial -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
  <script src="./script.js"></script>
</body>

</html>