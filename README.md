# Bienvenidos a la página principal de la aplicación

## Requisitos previos

Para poder usar la aplicación vas a tener que registrarte en la página [sportmonks](https://www.sportmonks.com/docs/football/2.0/prologue/a/introduction/94) para obtener tu **apikey**. Una vez obtenida, debes modificar la variable $apiKey en "modelo/Api.php"

Una vez obtenida, te recomiendo renombrar el directorio de la aplicación a únicamente "app". Si no lo haces, te van a surgir errores relacionados con la ruta.

## Usabilidad aplicación

Como he mencionado antes, hago uso de la api sportmonks para ofrecer tres opciones diferentes:

- **Buscar jugadores:** Permite buscar a un jugador por su nombre completo y acceder a su ficha técnica. Una vez dentro de la ficha técnica puedes buscar otro jugador de forma aleatoria.

- **Buscar Equipos:** Permite buscar por el nombre a equipos, una vez mostrado el equipo, permite saber que jugadores estan asociados a él. **Atención:** sportmonks ofrece difentes tipos de suscripcion para el uso de su api, en mi caso, he usado la version gratuita que nos permite acceder y buscar equipos de la liga inglesa y danesas. Los demás equipos no serán mostrados (si teneis una suscripción adecuada a dicha página la aplicación funcionará perfectamente, [mas info](https://www.sportmonks.com/products/soccer))

- **Buscar ligas:** Permite buscar todas las ligas disponibles según tu nivel de suscripción, en mi caso usando el plan gratuito, puedes acceder a 2 ligas inglesas y 2 danesas.
