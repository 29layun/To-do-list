# To-do-list
## Requerimientos
Para el uso de esta aplicacion debemos tener instalado xampp, git y un editor de codigo de nuestro agradao.
Para pasar con la instalacion debemos tener corriendo los servicios de php y mysql de xampp.

## Pasos para su instalacion
una vez teniendo los requerimientos procedemos a instalar la aplicacion con los siguientes comandos 
Abrimos la terminal de bash de git y ingresamos el siguiente comando
```
git clone https://github.com/29layun/To-do-list.git

```
una vez descargado todos los archivos nos iremos al explorador de archivos y copiaremos los siguientes archivos

```
To-do-list/backend/Controllers
To-do-list/backend/include
To-do-list/backend/Views
To-do-list/backend/index.php

```
Todos estos archivos los pegaremos en la siguiente carpeta "To-do-list" que crearemos en: 

```
c:user/xampp/htdocs/

```
Para poder utilizar correctamente la aplicacion deberemos ubicar esta linea de codigo "require_once($_SERVER['DOCUMENT_ROOT']."/To-do-list/Backend/include/config.php");" en estos archivos 

```
FormUpdate.php
index.php
delete.php
insert.php
update.php
update.php

```
Una vez ubicada la linea de codigo vamos a intercambiarla por esta linea de codigo

```
require_once($_SERVER['DOCUMENT_ROOT']."/To-do-list/include/config.php");

```
## Pasos para su instalacion de base de datos 
Para instalar la base de datos deberemos ir al apartado de phpmyadmin y le daremos importar base de datos, de esta manera selecionaremos la bd que esta en la carpeta 

```
To-do-list/data-base/

```
Esperamos que se carge correctamente y procederemos a hacer uso de la aplicacion en el navegador de nuestro agrado con el siguiente link "localhost/To-do-list/".