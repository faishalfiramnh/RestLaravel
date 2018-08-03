# RESTFULL Sample

## Install dependency
```
composer install
```

## Run Migration and Seeds the data
migrate the tables
```
php artisan migrate
```
seed the tables using seeder
```
php artisan db:seed
```

## API Endpoints

HTTP Verb | URL | Functionality
--- | --- | -- |
GET | 0.0.0.0:8000/api/item/ | Get All Items
GET | 0.0.0.0:8000/api/item/{id} | Get items by id
POST | 0.0.0.0:8000/api/item/ | Post Item
PUT | 0.0.0.0:8000/api/item/{id} | Post Item

