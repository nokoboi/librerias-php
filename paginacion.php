<?php

require_once 'vendor/autoload.php';

$conexion = new mysqli('localhost','root','','cinebd');
$consulta = $conexion->query("SELECT count(id) as 'total' FROM pelicula");
$numero_peliculas = $consulta->fetch_object()->total;

// echo $numero_peliculas;
$peliculas_por_pagina = 10;

$pagination = new Zebra_Pagination() ;
$pagination->records($numero_peliculas) ;
$pagination->records_per_page($peliculas_por_pagina);

$page = $pagination->get_page();
$desde = ($page -1) * $peliculas_por_pagina;

$peliculas = $conexion->query("SELECT * FROM pelicula LIMIT $desde, $peliculas_por_pagina");

// Importamos los estilos de zebra
echo "<link rel='stylesheet' href='css/zebra_pagination.css'>";

// Mostrar resultados
while($pelicula = $peliculas->fetch_object()){
    echo "<h2>$pelicula->titulo</h2>";
    echo "<p>$pelicula->precio</p>";
}

$pagination->render();