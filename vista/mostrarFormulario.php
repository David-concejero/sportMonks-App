<div class="card card-body formulario_principal">
	<img width="180" class="mx-auto" src="<?php echo $url_imagen?>" /> 
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input class="form-control" name="<?php echo $campo?>" placeholder="<?php echo $placeholder ?>">
		<div class="row">
			<div class="<?php if(strpos($objetivo, 'equipo')){echo 'col-md-6';}else{echo 'col-md-12';} ?>">
				<button name="<?php echo $nombre_boton ?>" class="btn btn-primary btn-block opciones_app"> <?php echo $objetivo ?> </button> 
			</div>
			<div class="col-md-6">
				<button style="<?php if(strpos($objetivo, 'equipo')){echo 'display: block';}else{echo 'display: none';} ?>" name="<?php echo $nombre_boton_liga ?>" class="btn btn-success btn-block opciones_app boton_ver_liga"> <?php echo $objetivo2 ?> </button> 
			</div>
		</div>
	</form>
</div>