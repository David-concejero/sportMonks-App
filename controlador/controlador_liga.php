<?php 
require_once("../modelo/Api.php");
if(isset($_POST["boton_volver"])){
  header("location: /app/index.php");
  exit; // así no carga el resto de la página y no ralentiza la salida.
}?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Todas las ligas </title>
  <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <style type="text/css">
    .panel_informacion{margin-top:20px;margin-bottom: 60px;}
    .ligas{
      background-color: white ;padding-top: 20px;
    }
    svg{
      position: absolute;
      bottom: 0;
      right: 0;
      width: 20%;
      height: 20%;
    }
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row row-eq-height">
    <div class="col-4 mx-auto ">
      <div class="card card-body panel_informacion">
        <img width="180" class="mx-auto foto_liga" src="/app/vista/imagenes/liga.png" />
      </div>
    </div>
    <div class="col-10 mx-auto ">
      <h4> Estas son todas las ligas que el <a href="https://sportmonks.com/football-api"> plan gratuito </a> soporta, si quieres buscar equipos por nombre asegurate de que estan en dichas ligas. <a href="https://en.wikipedia.org/wiki/Danish_Superliga#Current_teams_(2019%E2%80%9320)"> Este es un Ejemplo (periodo 2017~2020). </a> </h4>
    </div>
  </div>
  <div class="row ligas">
    <?php
    ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
      $api = new Api();
      $lista = $api::consultarLiga();
      require_once("../vista/mostrar_ligas.php");
    ?>
  </div>
  <div class="row ligas">
    <div class='card card-body mb-12'>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <button name="boton_volver" class="btn btn-primary btn-block"> Volver al menú </button> 
        </form>
      </div>
  </div>
</div> 
</body>
</html>