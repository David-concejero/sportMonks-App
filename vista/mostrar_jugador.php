<div class="card card-body panel_informacion">
	<h3 align="center"> Jugador encontrado </h3>
	<div class="card">
		<img width="180" alt="jugador futbol" class="mx-auto" src="<?php echo $lista['data'][0]['image_path']?>" /> 
		<div class="card-body">
	      	<h4 class="card-title"><?php echo $lista["data"][0]["common_name"]?></h4>
		     <p class="card-text"><?php echo $lista["data"][0]["fullname"]?></p>
		     <form action="app/controlador/controlador_jugador.php" method="post">
		     	<input type="hidden" name="nombre_jugador" value="<?php echo $lista['data'][0]['fullname']?>">
				<button type="submit" name="boton_perfilcompleto" class="btn btn-primary btn-block boton_perfilcompleto_jugador"> Ver perfil completo </button> 
			</form>
    	</div>
  	</div>
</div>