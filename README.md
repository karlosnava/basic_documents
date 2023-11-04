
## Introducción

Este es un sistema que permite crear, listar editar, actualizar y elimiar documentos (basados en texto) utilizando PHP bajo la arquitectura MVC y arquitectura multicapa del framework Laravel.
## Características

- Login de usuario
- Logout de usuario
- Grilla de datos de los documentos
- Búsqueda de documentos
- CRUD de documentos
- CRUD tipos de documentos **_(extra)_**
- CRUD procesos **_(extra)_**
- Listado y búsqueda reactiva de documentos.

## Instalación

Clone el proyecto

```bash
  git clone https://github.com/karlosnava/basic_documents.git
```

Vaya al directorio del proyecto

```bash
  cd ./basic_documents
```

Instale dependencias composer

```bash
  composer install
```

Instale dependencias npm

```bash
  npm install
  npm run build
```


## Variables de entorno

Para correr este proyecto, Necesitará modificar algunas variables del archivo .env

Clonaremos el archivo llamado `.env.example` y lo nombraremos `.env`

`APP_NAME` es el nombre del sistema, para este caso lo llamaremos "Basic Document", debe quedar así: `APP_NAME="Basic Document"`


Ahora, en la consola escribiremos el siguiente comando:

```bash
  php artisan key:generate
```

Notará que la variable de entorno `APP_KEY` ya no está vacía.

## Base de datos
En nuestro administrador de bases de datos crearemos la base de datos del proyecto, se recomienda nombrarla `basic_documents` con cotejamiento `utf8mb4_general_ci` en caso de querer nombrarla de otra forma debe modificar la variable de entorno `DB_DATABASE`

Una vez creada la base de datos deberá correr el siguiente comando:

```bash
  php artisan migrate --seed
```
`migrate` correrá todas las migraciones/tablas necesarias para el proyecto.

`--seed` alimentará las tablas con datos de prueba (indispensable para el funcionamiento del proyecto)

## Credenciales

``` bash
Usuario: test@example.com
Contraseña: password
```


## Screenshots

![App Screenshot](https://i.ibb.co/gWV70Lv/Screenshot-2023-11-04-at-13-31-41-Iniciar-sesi-n-Basic-Documents.png)

![App Screenshot](https://i.ibb.co/MCN3tkm/Captura-de-pantalla-2023-11-04-133548.png)

![App Screenshot](https://i.ibb.co/df0P4Jx/Screenshot-2023-11-04-at-13-37-48-Crear-nuevo-documento-Basic-Documents.png)

![App Screenshot](https://i.ibb.co/PrySD0j/Captura-de-pantalla-2023-11-04-133432.png)


## Licencia
[![CC BY-NC 4.0 Deed](https://www.upo.es/cms1/export/sites/upo/biblioteca/servicios/pubdig/propiedadintelectual/tutoriales/derechos_autor/images/pic034.png)](https://creativecommons.org/licenses/by-nc/4.0/deed.es)
## Autor

- [@karlosnava](https://github.com/karlosnava)

