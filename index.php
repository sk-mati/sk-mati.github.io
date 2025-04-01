<?php
$pg = "index";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="shorcut icon" href="images/icon.png">
</head>

<body id="inicio" class="d-flex flex-column h-100">
  <header class="container">
    <?php include_once("menu.php"); ?>
  </header>
  <main class="container">
    <div class="row">
      <div class="col-12 mx-auto text-center cohete">
        <a href="proyectos.php">
          <img src="images/cohete.svg" alt="cohete">
        </a>
      </div>
      <div class="col-12 col-sm-6 my-4 mt-sm-5 offset-sm-3 text-center mb-3">
        <div class="">
          <p class="py-1">Bienvenid@ a mi sitio web sobre desarrollo en sistemas.</p>
        </div>
      </div>
      <div class="col-12 text-center">
        <a href="proyectos.html" class="btn btn-blanco">Conozca mis proyectos</a>
      </div>
    </div>
  </main>

  <?php include_once("footer.php"); ?>
</body>

</html>