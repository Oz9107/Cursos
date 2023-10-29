<?php

// Array simulado de cursos (puedes modificar o conectar a una base de datos)
$cursos = array(
    array(
        'id' => 1,
        'fullname' => 'Introducción a la programación',
        'shortname' => 'Prog-101',
        'summary' => 'Curso introductorio a la programación en Python',
        'startdate' => '2022-02-01',
        'enddate' => '2022-05-31',
        'category' => 'Informática'
    ),
    array(
        'id' => 2,
        'fullname' => 'Programación en C++',
        'shortname' => 'C++-101',
        'summary' => 'Curso de programación en C++ para principiantes',
        'startdate' => '2022-03-15',
        'enddate' => '2022-06-30',
        'category' => 'Informática'
    ),
    // Agregar más cursos según sea necesario
);

// Obtener parámetros de la URL (simulados para este ejemplo)
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$per_page = isset($_GET['per_page']) ? $_GET['per_page'] : 10;

// Lógica de paginación
$start = ($page - 1) * $per_page;
$paginated_courses = array_slice($cursos, $start, $per_page);

// Formar la respuesta paginada
$response = array(
    'total' => count($cursos),
    'page' => $page,
    'per_page' => $per_page,
    'total_pages' => ceil(count($cursos) / $per_page),
    'data' => $paginated_courses
);

// Devolver la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);