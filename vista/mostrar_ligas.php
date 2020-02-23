<?php
    for ($i=0; $i < count($lista["data"]); $i++){
    	$lista_pais = $api::consultarPais($lista["data"][$i]["country_id"]); ?>
        <div class='col-4 mx-auto'>
            <div class='card card-body mb-2'>
            <p class="text-center"><?php echo $lista["data"][$i]["name"]?>
            	(<?php echo $lista_pais["data"]["name"]?>) 
            </p>
            <img width="180" class="mx-auto" src="<?php echo $lista['data'][$i]['logo_path'] ?>"/>
            <?php echo $lista_pais["data"]["extra"]["flag"]?>
            </div> 
        </div>
        <?php
    }
?>