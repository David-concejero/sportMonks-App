<div class="card card-body panel_informacion">
	<h3 align="center"> <?php if(isset($_POST["boton_generar_jugador"])){echo $lista["data"]["fullname"];}else{echo $lista["data"][0]["fullname"];}?> </h3>
		<div class="list-group">
  			<a class="list-group-item">Fecha de nacimiento: <?php if(isset($_POST["boton_generar_jugador"])){echo $lista["data"]["birthdate"];}else{echo $lista["data"][0]["birthdate"];}?></a>
  			<a class="list-group-item">Nacionalidad:  <?php if(isset($_POST["boton_generar_jugador"])){echo $lista["data"]["nationality"];}else{echo $lista["data"][0]["nationality"];}?></a>
  			<a class="list-group-item">Pais de nacimiento:  <?php if(isset($_POST["boton_generar_jugador"])){echo $lista["data"]["birthcountry"];}else{echo $lista["data"][0]["birthcountry"];}?></a>
  			<a class="list-group-item">Altura: <?php if(isset($_POST["boton_generar_jugador"])){echo $lista["data"]["height"];}else{echo $lista["data"][0]["height"];}?></a>
  			<a class="list-group-item">Peso: <?php if(isset($_POST["boton_generar_jugador"])){echo $lista["data"]["weight"];}else{echo $lista["data"][0]["weight"];}?></a>
  			<a class="list-group-item">Equipo actual: <?php echo $lista2["data"]["name"]?></a>
		</div>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="row">
				<div class="col-md-6">
					<button name="boton_volver_menu" class="btn btn-primary btn-block"> Volver al menú </button>
				</div>
				<div class="col-md-6">
					<button name="boton_generar_jugador" class="btn btn-success btn-block"> Buscar uno aleatorio </button>
				</div>
			</div>
		</form>
</div>