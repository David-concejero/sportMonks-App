<?php
    // Solo genero los 7 primeros jugadores, para no ralentizar mucho la app.
    // se pueden sacar todos los jugadores, lo unico que hay que modificar es el valor maximo
    // por la longitud del array "squad" => count($lista['data'][0]['squad']["data"]
    for ($i=0; $i < 7; $i++){
        $lista_jugador = $api::consultarJugadorId($lista['data'][0]['squad']["data"][$i]["player_id"]);?>
        <div class='col-4 mx-auto'>
            <div class='card card-body mb-2'>
                <p class="text-center"><?php echo $lista_jugador["data"]["fullname"]?> </p>
                <img width="180" class="mx-auto" src="<?php echo $lista_jugador['data']['image_path'] ?>"/>
                <form action="/app/controlador/controlador_jugador.php" method="post">
                    <input type="hidden" name="nombre_jugador" value="<?php echo $lista_jugador["data"]["fullname"]?>">
                    <button type="submit" name="boton_perfilcompleto" class="btn btn-primary btn-block"> Ver perfil completo </button>
                </form> 
            </div>
        </div>
    <?php
    }
?>