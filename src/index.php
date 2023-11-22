<?php

    include_once "vendor/autoload.php";
    //include_once "app/auxiliar/Router.php";
    use Carbon\Carbon;
    use App\Auxiliar\Router;
    use App\Controladores\UsuarioControlador;

    //echo "Estamos en la página principal<br>";

    $router = new Router();

    //Registrar rutas

    //$router->get('/users',['User','getUsuario']);
    /*$router->get('/users',function(){
        echo "Me han pedido un listado de usuarios";
    });*/
    //rutas de la parte visual
    $router->get('/',function (){
        include_once "vistas/home.php";
    });
    $router->get('/terminos',function (){
        require_once "vistas/terminos.php";
    });


    $router->get('/usuarios',[UsuarioControlador::class,'getTodosLosUsuarios']);
    $router->get('/usuario',[UsuarioControlador::class,'getUsuario']);
    $router->put('/usuario',[UsuarioControlador::class,'modificarUsuario']);
    $router->post('/usuario',[UsuarioControlador::class,'guardarUsuario']);
    $router->delete('/usuario',[UsuarioControlador::class,'borrarUsuario']);
    $router->get('/api/usuarios',[UsuarioControlador::class,'mostrarUsuariosAPI']);
    $router->delete('/api/usuario',[UsuarioControlador::class,'borrarUsuarioAPI']);



    $router->post('/user
    ',function(){
        echo "Me han pedido que guarde los datos de un usuario";
    });

    $router->resolver($_SERVER['REQUEST_METHOD'],$_SERVER['REQUEST_URI']);

    //var_dump($_SERVER);
