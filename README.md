## Readme

Esta aplicación es parte del Máster de Ciberseguridad del Campus Ciberseguridad.

Posee multitud de fallos a propósito para el aprendizaje de vulnerabilidades web y no está pensada para su puesta en
producción.

### Descargo

Cualquier uso no educativo de esta aplicación asume que el usuario o usuaria
reconoce los riesgos inherentes del uso de material educativo.

### Imagen docker

`cd docker`

`docker build -t masterlab:latest`

### Arrancar el lab

`docker compose up -d` o `docker-compose up -d`

### Scripts auxiliares:

El script `scripts/clean_database.sh` reinicia la base de datos de la
aplicación. Sirve para limpiar los datos de esta y reiniciarlos a origen.

El script `scripts/fix_imgs_permissions.sh` cambia el propietario de la carpeta "imgs" dentro del contenedor
del servicio `ml_1`. Esto solo es necesario si te está dando problemas en caso
de que encuentres el RFI y no puedas subir nada.
