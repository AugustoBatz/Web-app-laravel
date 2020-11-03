# Backend Application API REST
This application is build in Larvel and Mariadb

Features:
  - List Places
  - Find Place by id
  - Create place
### Installation

Dillinger requires Larvel, PHP & MariaDB to run.

Install the dependencies and devDependencies and start the server.

```sh
$ php php artisan migrate
$ php php artisan serve
```

### Plugins

Dillinger is currently extended with the following plugins. Instructions on how to use them in your own application are linked below.

| Plugin | Source |
| ------ | ------ |
| salmanzafar949/Laravel-Crud-Generator | [https://github.com/salmanzafar949/Laravel-Crud-Generator] |

# API REST Endpoints
## Resource
```
http://127.0.0.1:8000/api/places
```
### Request POST
```
{
    "img_source" : "url image", 
    "title": "Lago de Atitlan",
    "description": "Lago",
    "score": 5
}
```

### Response POST

```
{
    "data": {
        "img_source": "url image",
        "title": "Lago de Atitlan",
        "description": "Lago",
        "score": 5,
        "updated_at": "2020-11-03T04:13:30.000000Z",
        "created_at": "2020-11-03T04:13:30.000000Z",
        "id": 6
    }
}
```
### Request GET places

```
[
    {
        "id": 7,
        "title": "Antigua Guatemala",
        "description": "La antigua Guatemala",
        "score": 0,
        "img_source": "url image"
    },
    {
        "id": 6,
        "title": "Lago de Atitlan",
        "description": "Lago",
        "score": 5,
        "img_source": "url image"
    }
]
```

### Request GET places by id http://127.0.0.1:8000/api/places/7

```
    "title": "Antigua Guatemala",
    "description": "La antigua Guatemala",
    "score": 0,
    "img_source": "url image"
```

