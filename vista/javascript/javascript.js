$(function(){
	// index.php, icono de carga. Oculta el texto actual (error o jugador) al
	// realizar una petición. Esto dura hasta que se recarga la página
	var texto_carga = $("<h3 class='text-center'> Procesando petición.. </h3>");
	var etiqueta_carga = $("<div class='d-flex justify-content-center'> <div class='spinner-border justify-content-center' style='width: 3rem; height: 3rem;' role='status'> <span class='sr-only'>Loading...</span> </div> </div>");

		$(".opciones_app").click(function(){ //panel_carga_datos_info
		$(".panel_informacion").css("display","none");
		$(".panel_carga_datos_info").css("display","block");
		$(".panel_carga_datos_info").css("background-color","#A9A9A9");
		$(".panel_carga_datos_info").append(texto_carga);
		$(".panel_carga_datos_info").append(etiqueta_carga);
	});

	// Principalmente cambia el texto de carga y el color, dependiendo de opcion le ha dado al usuario
	// Ej, ver perfil jugador => fondo verde y "accediendo a perfil jugador.."
	$(".boton_perfilcompleto_jugador").click(function(){
		var texto_carga = $("<h3> Accediendo al perfil del jugador... </h3>");
		$(".panel_carga_datos_info").css("display","block");
		$(".panel_carga_datos_info").css("background-color","#009900");
		$(".panel_carga_datos_info").append(texto_carga);
		$(".panel_carga_datos_info").append(etiqueta_carga);
	});

	$(".boton_perfilcompleto_equipo").click(function(){
		var texto_carga = $("<h3> Accediendo al perfil del equipo... </h3>");
		$(".panel_carga_datos_info").css("display","block");
		$(".panel_carga_datos_info").css("background-color","#228B22");
		$(".panel_carga_datos_info").append(texto_carga);
		$(".panel_carga_datos_info").append(etiqueta_carga);
	});

	$(".boton_ver_liga").click(function(){
		var texto_carga = $("<h3> Accediendo a las ligas disponibles... </h3>");
		$(".panel_carga_datos_info").css("display","block");
		$(".panel_carga_datos_info").css("background-color","#228B22");
		$(".panel_carga_datos_info").append(texto_carga);
		$(".panel_carga_datos_info").append(etiqueta_carga);
	});
}); 