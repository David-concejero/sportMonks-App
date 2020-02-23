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
  <title> Equipo y sus jugadores </title>
  <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <style type="text/css">
    .panel_informacion{margin-top:20px;margin-bottom: 60px;}
    .equipos{
      background-color: white ; padding-top: 20px;}
    .btn-primary{
      margin-top: 10px;
    }
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row row-eq-height">
    <div class="col-4 mx-auto ">
      <div class="card card-body panel_informacion">
        <?php
          $api = new Api();
          $equipo = $_POST["nombre_equipo"];
          $lista = $api::consultarEquipoNombre($equipo);
        ?>
        <h2 align="center"> <?php echo $lista['data'][0]['name'] ?></h2>
        <img width="180" class="mx-auto foto_liga" src="<?php echo $lista['data'][0]['logo_path'] ?>" />
        <hr>
        <p> Fundado en <?php echo $lista['data'][0]['founded'] ?>, cuenta con <?php echo count($lista['data'][0]['squad']["data"]) ?> jugadores. Si quieres mas información con respecto a los jugadores pincha en ver su perfil completo.  </p>
      </div>
    </div>
  </div>
  <div class="row equipos">
    <?php
      require_once("../vista/mostrar_equipo_jugadores.php");
    ?>
  </div>
  <div class="row equipos">
    <div class='card card-body mb-12'>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <button name="boton_volver" class="btn btn-primary btn-block"> Volver al menú </button> 
        </form>
      </div>
  </div>
</div> 
</body>
</html>