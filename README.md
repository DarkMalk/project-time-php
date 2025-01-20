# App del tiempo en Chile, Santiago sencilla

Esta pagina web con PHP sin frameworks esta pensada para aprender y practicar PHP, realizando una llamada a una API externa.

- [Enlace al playground de la API en RapidAPI.](https://rapidapi.com/weatherapi/api/weatherapi-com/playground/apiendpoint_bef542ef-a177-4633-aacc-ee9703945037)

# Como empezar iniciar servicio

Clonar repositorio de github.

```bash
git clone https://github.com/DarkMalk/project-time-php.git
```

Ingresar a la carpeta del proyecto clonado.

```bash
cd project-time-php
```

Debemos ingresar la API_KEY que nos entrega [RapidAPI](https://rapidapi.com/weatherapi/api/weatherapi-com/playground/apiendpoint_bef542ef-a177-4633-aacc-ee9703945037), esto puede variar dependiendo del sistema operativo en el cual te encuentres.

**MacOS y/o Linux**

```bash
export API_KEY="KEY"
```

**Windows**

```bash
set API_KEY=KEY
```

Ya teniendo la variable de entorno configurada podemos levantar el servidor de desarrollo con `PHP` indicándole `IP:PUERTO`.

```bash
php -S localhost:8000
```
