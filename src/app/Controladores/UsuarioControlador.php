<?php

namespace App\Controladores;

class UsuarioControlador
{
    public function getUsuario(int $id){
        echo "Los datos del usuario $id";
    }

    public function getTodosLosUsuarios(){
        echo "Estoy en todos los usuaarios";

    }

    public function modificarUsuario(int $id){
        echo "Voy a modificar el usuario $id";
    }

}