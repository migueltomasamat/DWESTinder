<?php

namespace App\Clases;

class Usuario
{
    private string $email;
    private string $nombre;

    private string $apellidos;

    private string $perfil;

    public function __construct()
    {
        $this->perfil=array();
    }

}