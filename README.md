
## Como desplegar la web
#Descargar el projecto
Para empezar vamos descargar el projecto desde github como un zip. Ese zip vamos a extraerlo en el directorio /xampp/htdocs/ si usamos XAMPP, o en /var/www/html/ si estamos usando linux.

#Importar la base de datos
Despues en phpmyadmin vamos a crear la tabla oca y vamos a importar la base de datos "OcaBD.sql" que se encuentra en en carpeta database.

#Configurar el archivo ".env"
Para configurar el archivo .env vamos a coger como plantilla el archivo .env.example. Lo copiamos, cambiamos el campo "DB_HOST" por la ip donde se encuentre la base de datos. Tambien cambiamos el DB_USERNAME por nuestro usuario y el DB_PASSWORD por nuestra contraseña.

#Instalar Composer
En el directorio del projecto abrimos la consola y ejecutamos el comando "composer install".

#Terminar de configurar el archivo .env
Una vez instalado el composer, tenemos que ejecutar el comando "php artisan key:generate".


