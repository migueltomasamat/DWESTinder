<?php

include_once "../vendor/autoload.php";

use App\Controladores\UsuarioControlador;

$controlador = new UsuarioControlador();

$controlador->getTodosLosUsuarios();

