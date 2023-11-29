<?php

namespace App\Modelos;

use App\Clases\Usuario;
use \PDO;


class UsuarioModelo
{
    private PDO $conexion;
    public static function guardarUsuarioBD(Usuario $user){
        $conexion = new \PDO('mysql:dbname=tinder;host=mysql','pringao','passwordpringao');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO usuario VALUES(?,?,?)";

        $sentenciaPreparada = $conexion->prepare($sql);

        $sentenciaPreparada->bindValue(1,$user->getEmail());
        $sentenciaPreparada->bindValue(2,$user->getNombre());
        $sentenciaPreparada->bindValue(3,$user->getApellidos());

        $datos=$sentenciaPreparada->execute();





    }

}