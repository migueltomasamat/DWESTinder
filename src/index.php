<?php

    include_once "vendor/autoload.php";
    //include_once "app/auxiliar/Router.php";
    use Carbon\Carbon;
    use App\Auxiliar\Router;

    echo "Estamos en la página principal<br>";

    $router = new Router();

    //Registrar rutas

    //$router->get('/users',['User','getUsuario']);
    $router->get('/users',function(){
        echo "Me han pedido un listado de usuarios";
    });

    $router->post('/user
    ',function(){
        echo "Me han pedido que guarde los datos de un usuario";
    });

    $router->resolver($_SERVER['REQUEST_METHOD'],$_SERVER['REQUEST_URI']);

    //var_dump($_SERVER);
