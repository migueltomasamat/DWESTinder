<?php

$titulo = "DWES Tinder";
$enlaces = [
    [
        'enlace'=>'/',
        'descripcion'=>'Home',
        'actual'=>true
        ],
    [
        'enlace'=>'/perfil',
        'descripcion'=>'Perfil'
    ],
    [
        'enlace'=>'/precios',
        'descripcion'=>'Precios'
    ]
];
 include_once __DIR__."/../plantilla/encabezado.php";

 $diapositivas=[
   [
       'titulo'=>'DWES Tinder',
       'subtitulo'=>'Web de citas',
       'enlace'=>'/registro',
       'desc_enlace'=>'Regístrate',
       'imagen'=>'../resources/img/diapositiva1.jpg'
   ],
     [
         'titulo'=>'¿Cuánto vale el amor?',
         'subtitulo'=>'Somos tu cupido a tiempo completo',
         'enlace'=>'/precios',
         'desc_enlace'=>'Planes de precios',
         'imagen'=>'../resources/img/diapositiva2.jpg'
     ]
 ];
 include_once __DIR__."/../plantilla/slider.php";

 $datosMensaje = [
     'encabezado'=>'Somos los p**** amos',
     'mensajes'=>['Somos responsables de tu historia de amor','Nuestros clientes chuscan'],
     'imagen'=>'../resources/img/exito.jpg'
 ];
 include_once __DIR__."/../plantilla/mensaje.php";

 include_once __DIR__."/../plantilla/pie.php";