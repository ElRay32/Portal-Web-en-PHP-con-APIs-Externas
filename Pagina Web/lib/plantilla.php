<?php


class Plantilla {

    static $instancia = null;
    public static function aplicar(){
        if (self::$instancia == null) {
            self::$instancia = new Plantilla();
        }
        return self::$instancia;
    }

 function __construct()
    {
        $pagina_actual = (defined('pagina_actual') ? pagina_actual : "inicio");


        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mi Portal Dinámico</title>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">MiPortal</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">Acerca de</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">APIs</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="gender.php">Género</a></li>
            <li><a class="dropdown-item" href="age.php">Edad</a></li>
            <li><a class="dropdown-item" href="universities.php">Universidades</a></li>
            <li><a class="dropdown-item" href="weather.php">Clima</a></li>
            <li><a class="dropdown-item" href="pokemon.php">Pokémon</a></li>
            <li><a class="dropdown-item" href="news.php">Noticias</a></li>
            <li><a class="dropdown-item" href="currency.php">Monedas</a></li>
            <li><a class="dropdown-item" href="images.php">Imágenes</a></li>
            <li><a class="dropdown-item" href="country.php">País</a></li>
            <li><a class="dropdown-item" href="joke.php">Chistes</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container py-4">
               <?php
        }
function __destruct(){
        ?>
</div><!-- /.container -->
<footer class="bg-light text-center py-3">
  &copy; <?= date('Y') ?> Tu Nombre Completo
</footer>
<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
        <?php

    }
}


?>
