<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Menu Principal</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="vista/javascript/javascript.js"></script>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <style type="text/css">
  .mensaje_error{color:black; }
  .card{border: none;}
  .panel_carga_datos_info{display: none; margin-bottom: 10px;font-size: 14px}
  .panel_error{background-color: #DC143C; font-size: 20px}
</style>
</head>
<body>
<div class="container-fluid p-4">
  <div class="row row-eq-height">
    <div class="col-md-5">
    	<?php 
        // Buscar jugadores      
      	$url_imagen = "/app/vista/imagenes/iconoFutbolista.png";
      	$campo = "campo_nombre_jugador";
      	$placeholder = "Escribe el nombre completo de un jugador, Ej Cristiano Ronaldo";
      	$nombre_boton = "boton_enviar_jugador";
      	$objetivo = "Buscar jugadores";
      	require("vista/mostrarFormulario.php");
    	?>
      <br>
      <?php 
        // Buscar Equipos      
        $url_imagen = "/app/vista/imagenes/equipo.png";
        $campo = "campo_nombre_equipo";
        $placeholder = "Escribe el nombre completo de un equipo, consulta ligas ";
        $nombre_boton = "boton_enviar_equipo";
        $objetivo = "Buscar equipos";
        // ver liga
          $objetivo2 = "Ver ligas";
          $enlace_liga = "controlador/controlador_liga.php";
          $nombre_boton_liga = "boton_ver_liga";
          require("vista/mostrarFormulario.php");
      ?>
      <br>
      <br>
    </div>
    <div class="col-md-7 panel_mostrar_informacion">
      <div class="col-md-10 panel_carga_datos">
        <div class="card card-body panel_carga_datos_info">
        </div>
      </div>
    <?php
        // jugador
      	if(isset($_POST["boton_enviar_jugador"])){
          require_once("modelo/Api.php");
          $api = new Api();
          $jugador = $_POST["campo_nombre_jugador"];
          $lista = $api::consultarJugadorNombre($jugador);

  			if(is_array($lista) && !empty($lista["data"][0]["fullname"])){
  				require_once("vista/mostrar_jugador.php");
  			}
  			else{
            // Muestra los errores, campo vacío o no se encuentra jugador
            $texto_error = "Te recomiendo comprobar que todos los datos que has introducido estan correctamente escritos, que no has dejado el formulario en blanco y que has escrito el nombre completo del jugador. ";
            $consejo_error = "PD: Puede que no encuentre algunos nombres de jugadores poco conocidos, prueba a introducir algunos mas famosos como Joaquín Sánchez Rodríguez o Gerard Piqué.";
  					if(strpos($lista,"HTTP")){ // http => error 404, ver Api.php para mas info
  						$clave_error = "El campo del jugador esta vacío";
  						require_once("vista/mostrar_error.php");	
  					}
  					if(empty($lista["data"][0]["fullname"])){
  						$clave_error = "Ese jugador no ha sido encontrado";
  						require_once("vista/mostrar_error.php");	
  					}	
  				}
		    }
        // equipo
        if(isset($_POST["boton_enviar_equipo"])){
          require_once("modelo/Api.php");
          $api = new Api();
          $equipo = $_POST["campo_nombre_equipo"];
          $lista = $api::consultarEquipoNombre($equipo);
        if(is_array($lista) && !empty($lista["data"][0]["name"])){
          require_once("vista/mostrar_equipo.php");
        }
        else{
            // Muestra los errores, campo vacío o no se encuentra equipo
            $texto_error = "Te recomiendo comprobar que el equipo que has puesto se corresponde con las ligas disponibles. En caso de dudas, visita el apartado de ligas";
            $consejo_error = "PD: En el plan gratuito no estan recogidos todos los equipos. Te recomiendo probar con varios de distintas ligas, como por ejemplo: AaB, HOB o Hearts";
            if(strpos($lista,"HTTP")){
              $clave_error = "El campo del equipo esta vacío";
              require_once("vista/mostrar_error.php");  
            }
            if(empty($lista["data"][0]["fullname"])){
              $clave_error = "Ese equipo no ha sido encontrado";
              require_once("vista/mostrar_error.php");  
            } 
          }
        }
		    elseif(isset($_POST["boton_ver_liga"])){
          header("location: controlador/controlador_liga.php");
        }
        ?>
    </div>
</div> 
</div>
</body>
</html>