# API del proyecto

## Base URL

Todas las rutas de la API están prefijadas con `/api`.

## Rutas disponibles

### Categorías

#### `GET /api/categories`

Devuelve la lista completa de categorías.

Respuesta exitosa:

```json
[
  {
    "id": 1,
    "name": "Laptops",
    "description": "Equipos portátiles",
    "created_at": "2026-06-27T15:40:06.000000Z",
    "updated_at": "2026-06-27T15:40:06.000000Z"
  }
]
```

Notas:

- Esta feature solo expone lectura por ahora.
- Existe `StoreCategoryRequest`, pero no hay ruta `POST /api/categories` registrada todavía.

### Productos

#### `GET /api/products`

Lista todos los productos.

Respuesta exitosa:

```json
[
  {
    "id": 1,
    "name": "Laptop Pro",
    "description": "Equipo de alto rendimiento",
    "price": "1499.99",
    "stock": 10,
    "category": "Laptops",
    "created_at": "2026-06-27T15:40:48.000000Z",
    "updated_at": "2026-06-27T15:40:48.000000Z"
  }
]
```

#### `POST /api/products`

Crea un producto.

Body JSON:

```json
{
  "name": "Laptop Pro",
  "description": "Equipo de alto rendimiento",
  "price": 1499.99,
  "stock": 10,
  "category_id": 1
}
```

Reglas de validación:

- `name`: requerido, string, máximo 255 caracteres.
- `description`: opcional, string.
- `price`: requerido, numérico, mínimo 0.
- `stock`: opcional, entero, mínimo 0.
- `category_id`: requerido, debe existir en `categories.id`.

#### `GET /api/products/{id}`

Devuelve un producto por ID.

#### `PUT /api/products/{id}`

Actualiza un producto existente.

Body JSON:

```json
{
  "name": "Laptop Pro Max",
  "description": "Versión actualizada",
  "price": 1599.99,
  "stock": 8,
  "category_id": 1
}
```

#### `DELETE /api/products/{id}`

Elimina un producto.

Respuesta exitosa:

- `204 No Content`

## Estructura del backend

- `app/Features/Category`: feature de categorías.
- `app/Features/Product`: feature de productos.
- `routes/api.php`: rutas de la API.
- `bootstrap/app.php`: carga `routes/api.php` y `routes/web.php`.

## Comandos para levantar el backend

### Instalación inicial

```bash
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate
```

### Ejecutar el backend

```bash
php artisan serve
```

### Ejecutar frontend de apoyo

```bash
npm install
npm run dev
```

### Comandos útiles

```bash
php artisan route:list
php artisan route:list --path=categories
php artisan optimize:clear
php artisan test
```

## Validación rápida

- `GET http://127.0.0.1:8000/api/categories`
- `GET http://127.0.0.1:8000/api/products`
