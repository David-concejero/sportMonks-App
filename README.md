# Presentación proyecto

Esta trabajo se ha desarrollado con el objetivo de utilizar una api para desarrollar una aplicación web. La aplicación usa la api de [sportmonks ](https://www.sportmonks.com/), una página enfocada en ofrecer datos relacionados con el mundo del futbol. Tiene dos planes, uno gratuito donde vinen una serie de equipos de ligas poco conocidas a modo de demo y otro plan de pago. Este proyecto se ha desarrollado con la versión gratuita.

Además se ha construido una pequeña interfaz de usuario utilizando php y boostrap.

![Imagen del proyecto](https://imgur.com/t6N5lx3)

# Requisitos uso de proyecto

* Instalar la infraestructura LAMP

* Registrarte en la página de [sportmonks](https://www.sportmonks.com/docs/football/2.0/prologue/a/introduction/94) para obtener tu **apikey**. Una vez obtenida, debes modificar la variable $apiKey en "modelo/Api.php"

* Renombrar tu directorio de proyecto a "app" para evitar problemas relacionados con la ruta del proyecto.

## ¿Que permite la aplicación?

Mediante el uso de la api gratuita podemos tener acceso a tres opciones:

* **Busqueda de Jugadores:** Permite buscar a un jugador por su nombre completo y acceder a su ficha técnica. Una vez dentro de la ficha técnica puedes buscar otro jugador de forma aleatoria.

* **Buscar Equipos:** Permite buscar por el nombre a equipos, una vez mostrado el equipo, permite saber que jugadores estan asociados a él. **Atención:** sportmonks ofrece difentes tipos de suscripcion para el uso de su api, en mi caso, he usado la version gratuita que nos permite acceder y buscar equipos de la liga inglesa y danesas. Los demás equipos no serán mostrados (si teneis una suscripción adecuada a dicha página la aplicación funcionará perfectamente, [mas info](https://www.sportmonks.com/products/soccer))

* **Buscar ligas:** Permite buscar todas las ligas disponibles según tu nivel de suscripción, en mi caso usando el plan gratuito, puedes acceder a 2 ligas inglesas y 2 danesas.

Puede que no aparezcan algunos jugadores, pero teneis que tener en cuenta que la api va cambiando con el paso del tiempo y puede que, lo que a dia de hoy permiten realizar con el plan gratuito, mañana lo pueden cambiar y pasarlo al plan de pago.
