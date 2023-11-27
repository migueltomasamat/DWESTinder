<?php

$titulo= "DWES Tinder - Descubre la magia";
 include_once __DIR__."/../plantilla/encabezado.php";
$diapositivas=[
    [
        'titulo'=>'DWES Tinder',
        'subtitulo'=>'Tu Web de citas',
        'enlace'=>'/registro',
        'desc_enlace'=>'Regístrate',
        'imagen'=>'../resources/img/diapositiva1.jpg'
    ],[
        'titulo'=>'¿Cuánto vale el amor?',
        'subtitulo'=>'Somos tu cupido a tiempo completo',
        'enlace'=>'/',
        'desc_enlace'=>'Planes de precios',
        'imagen'=>'../resources/img/diapositiva2.jpg'
    ]
];
 include_once __DIR__."/../plantilla/slider.php";
 $encabezado="Somos los putos amos";
 $mensajes=['Somos responsables de muchas historias dignas de contar','Más del 70% de nuestros clientes confirman nuestros resultados'];

echo "<div class='container marketing'>";
$testimonios=[
    [
        'imagen'=>'../resources/img/persona1.jpg',
        'titulo'=>'Claudia',
        'parrafo'=>'Con esta vida tan acelerada queda poco tiempo para nutrir una relación romántica',
        'enlace'=>'/claudia',
        'descripcion'=>'Conoce su historia'
    ],
    [
        'imagen'=>'../resources/img/persona1.jpg',
        'titulo'=>'Claudia',
        'parrafo'=>'Con esta vida tan acelerada queda poco tiempo para nutrir una relación romántica',
        'enlace'=>'/claudia',
        'descripcion'=>'Conoce su historia'
    ],
    [
        'imagen'=>'../resources/img/persona1.jpg',
        'titulo'=>'Claudia',
        'parrafo'=>'Con esta vida tan acelerada queda poco tiempo para nutrir una relación romántica',
        'enlace'=>'/claudia',
        'descripcion'=>'Conoce su historia'
    ],
];
 include_once __DIR__."/../plantilla/testimonios.php";
 include_once __DIR__."/../plantilla/mensaje.php";
 $datos=[
     'encabezado'=>'One is the best',
     'subtitulo'=>'Two is the better',
     'mensajes'=>['Three or more is vice','but is life'],
     'imagen'=>'../resources/img/sexo.jpg'
 ];
 include_once __DIR__."/../plantilla/mensajeInverso.php";
 echo "</div><!-- /.container -->";
 include_once __DIR__."/../plantilla/pie.php";
