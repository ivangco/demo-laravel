Entrar al server docker
```bash
docker exec -it <contenedor activo> bash
```


# Crear Proyecto

``` bash
docker run --rm --interactive --tty   --volume <path>:/app composer create-project laravel/laravel demo 
```
# Crear Proyecto

``` bash
docker run --rm --interactive --tty   --volume <path>:/app composer create-project laravel/laravel demo 
```

# Buenas practicas

- No tocar codigo creado por artisan
- Encaso de añadir campo crear una nueva migracion 


# Componentes de artizan utilizados

- Make (para migraciones del esquema de trabajo en la base de datos)
- Eloquent (para ocm)
- tincker (para pruebas)
