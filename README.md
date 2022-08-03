<!-- @format -->

# Práctica Técnica "Hospital Infantil"

###### Elaborado por: Charly Yael Cetz Pech

### _Componentes_

Laravel: framework para la programación del servidor.

Xampp: para mi base de datos - utilicé mysql.

### Como Usar

##### Documentación:

De igual forma se debe tener instalado composer -> https://getcomposer.org/download/

https://laravel.com/docs/9.x/installation


#### _Paso (1)_

Importamos la base de datos llamada hospitalpt.sql que contiene las tablas para guardar toda la información de los pacientes.
Es necesario importar antes de iniciar con el proyecto. Ya importado sería el primer paso.

#### _Paso (2)_

Lo siguiente que aremos para poder visualizar la práctica debemos abrir el proyecto en un editor de códigos en mi caso en Visual
code que es la que utilizo despues abrimos la terminal y agregamos los siguientes comandos:

##### comando 1: _php artisan serve_

este comando nos dara una dirección donde podremos entrar al login.

##### comando 2: _run npm dev_

!!Importante¡¡ -> es necesario correr los 2 comandos para visualizar el login.

Entramos a la dirección que nos proporciona el comando "php artisan serve" y nos abriría una ventana en donde tendremos una sección que nos pide iniciar o registrar para este caso mi relación lo hice de uno a muchos, en donde un administrador o alguien que registre los pacientes puede tener varios pacientes, sin embargo, los pacientes solo pueden tener un administrador.

### _paso(3)_

La cuenta que deje para visualizar es:\
correo: admin2@gmail.com  
pass: adminpt22

con esta cuenta puede entrar si en dado caso se crea uno, no podrá visualizar los datos de la base de datos, ya que hice una relación en las tablas y con el, id del usuario. Al final ingresando la cuenta podrá visualizar la práctica.\


¡¡Espero sus respuestas y Comentarios!!
