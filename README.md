# Servicio Web de Cursos

Este proyecto implementa un servicio web que proporciona una lista paginada de cursos.

## Descripción

Este servicio web permite a los usuarios obtener una lista paginada de cursos. Fue desarrollado en un entorno de Visual Studio Code utilizando PHP y se ejecutó en XAMPP para simular la obtención de datos de cursos.

## Ejecución

### Prerrequisitos

- XAMPP instalado en tu entorno.
- Visual Studio Code o cualquier otro editor de código.

### Instrucciones

1. Clona o descarga el repositorio de .
2. Copia el proyecto en la carpeta `htdocs` de XAMPP.
3. Inicia los servicios de Apache y MySQL en XAMPP.
4. Accede al servicio web a través de la URL: `http://localhost/Cursos.php`.
5. Utiliza Postman u otra herramienta similar para realizar solicitudes al servicio web con los parámetros deseados.

## Ejemplo de Uso

### Endpoint

El servicio web se encuentra en: `http://localhost/Cursos.php`.

### Parámetros

- `page`: Número de página deseado (por defecto: 1).
- `per_page`: Cantidad de cursos por página (por defecto: 10).

### Estructura de Respuesta

El servicio retornará una respuesta paginada con la siguiente estructura de datos.

{
"total": 12,
"page": 1,
"per_page": 2,
"total_pages": 7,
"data": [
{
"id": 1,
"fullname": "Introducción a la programación",
// ... otros campos
},
// ... más cursos
]
}


## Consideraciones

Este servicio web se desarrolló en un entorno de XAMPP utilizando Visual Studio Code, con el propósito de simular una obtención de datos paginados de cursos y no se encuentra integrado en un entorno específico, como Moodle.

