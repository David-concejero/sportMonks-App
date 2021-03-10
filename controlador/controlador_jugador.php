<?php
require_once("../modelo/Api.php");
if(isset($_POST["boton_volver_menu"])){
  header("location: /app/index.php");
  exit; // así no carga el resto de la página y no ralentiza la salida.
}?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Perfil Jugador </title>
  <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <style type="text/css">
    .panel_informacion,.foto_futbolista,.foto_club{margin-top:40px;}
  </style>
</head>
<body>
<div class="container">
      <div class="row">
        <div class="col-md-4">
          <?php
            // la diferencia entre buscar por nombre y por ID es indicarle el índice del array.
            $api = new Api();
            if(isset($_POST["boton_generar_jugador"])){
              $numero_aleatorio = rand(1,450);
              $lista = $api::consultarJugadorId($numero_aleatorio);
              $imagen_futbolista = $lista["data"]["image_path"];
              $id_equipo = $lista["data"]["team_id"];
              $lista2 = $api::consultarEquipoId($id_equipo);
              $imagen_club = $lista2["data"]["logo_path"];
            }
            else{
              $jugador = $_POST["nombre_jugador"];
              $lista = $api::consultarJugadorNombre($jugador);
              $imagen_futbolista = $lista["data"][0]["image_path"];
              $id_equipo = $lista["data"][0]["team_id"];
              $lista2 = $api::consultarEquipoId($id_equipo);
              $imagen_club = $lista2["data"]["logo_path"];
            }
          ?>
          <img width="180" class="mx-auto foto_futbolista" src="<?php echo $imagen_futbolista ?>" /> 
          <img width="180" class="mx-auto foto_club" src="<?php echo $imagen_club ?>" /> 
        </div>
    <div class="col-md-8">
    	<?php
    	ini_set('display_errors', 1);
		  ini_set('display_startup_errors', 1);
		  error_reporting(E_ALL);
      require_once("../vista/mostrar_perfilCompleto.php"); ?>
    </div>
</div>
</div>
</body>
</html>
