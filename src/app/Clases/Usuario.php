<?php

namespace App\Clases;

class Usuario implements \JsonSerializable
{
    private ?string $email;
    private ?string $nombre;

    private ?string $apellidos;

    private array $perfil;

    public function __construct()
    {
        $this->email="";
        $this->nombre="";
        $this->apellidos="";
        $this->perfil=array();
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    public function getPerfil(): array
    {
        return $this->perfil;
    }

    public function setPerfil(string $perfil): void
    {
        $this->perfil = $perfil;
    }

    public static function crearUsuarioDesdeArray(array $datosUsuario):Usuario{
        $usuario = new Usuario();
        $usuario->setEmail($datosUsuario['email']??"sincorreo@email.com");
        $usuario->setNombre($datosUsuario['nombre']??"Jane");
        $usuario->setApellidos($datosUsuario['apellidos']??"Doe");


        return $usuario;
    }


    public function jsonSerialize(): mixed
    {
        $arraySalida = [];
        if (isset($this->email)){
            $arraySalida['email']=$this->email;
        }
        if (isset($this->nombre)){
            $arraySalida['nombre']=$this->nombre;
        }
        if (isset($this->apellidos)){
            $arraySalida['apellidos']=$this->apellidos;
        }

        return $arraySalida;
    }
}