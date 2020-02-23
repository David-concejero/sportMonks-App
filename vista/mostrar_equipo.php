<div class="card card-body panel_informacion">
	<h3 align="center"> Equipo encontrado </h3>
	<div class="card">
		<img width="180" alt="equipo futbol" class="mx-auto" src="<?php echo $lista['data'][0]['logo_path']?>" /> 
		<div class="card-body">
	      	<h4 class="card-title">Equipo: <?php echo $lista["data"][0]["name"]?></h4>
		     <p class="card-text">Jugadores: <?php echo count($lista["data"][0]["squad"]["data"])?></p>
		     <form action="app/controlador/controlador_equipo.php" method="post">
		     	<input type="hidden" name="nombre_equipo" value="<?php echo $lista['data'][0]['name']?>">
				<button type="submit" name="boton_perfilcompleto" class="btn btn-primary btn-block boton_perfilcompleto_equipo"> Ver perfil completo </button> 
			</form>
    	</div>
  	</div>
</div>