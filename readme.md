# Sepomex

Libreria de laravel para obtención de direcciones mexicanas

## Instalación

Descarga el paquete del repositorio

Crea una carpeta en la raiz del proyecto llamada: ```packages``` y mueve el repositorio a esta carpeta

Ingresa al archivo ```composer.json``` y debajo del objeto ```require-dev``` escribe lo siguiente:

```json
  "repositories": [
{
"type": "path",
"url": "./packages/Sepomex"
}
],
```

Ahora ejecuta el siguiente comando:

```bash
composer update
```

En el archivo ```database/seeders/DatabaseSeeder.php``` agrega el siguiente metodo:

```php
 $this->call(\Alkemy\Sepomex\Database\Seeders\ZipcodeSeeder::class);
```

> Esto es debido a que laravel no cuenta con soporte para poblar la base de datos desde una libreria externa y necesita ser aprobado por el desarrollador.

Por último ejecuta las migraciones ```php artisan migrate --seed```

## Usage/Examples

La libreria cuenta con dos controladores

- FindAddressByCriteriaController
- GetAddressesByCriteriaController

Ambos tienen la misma funcionalidad, sin embargo uno busca de manera individual y el otro devuelve una colección de
datos respectivamente paginados.

> Por el momento solo se pueden hacer búsquedas por ````zipcode````

De igual manera si necesitas hacer búsquedas personalizadas o manipular información. Puedes hacer uso del
modelo ```Zipcode```
