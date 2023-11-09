<?php

namespace App\Auxiliar;

class Router
{
    private array $rutas;

    public function get(string $ruta,callable|array $accion):Router
    {
        $this->rutas['GET'][$ruta]=$accion;
        return $this;
    }
    public function post(string $ruta,callable|array $accion):Router
    {
        $this->rutas['POST'][$ruta]=$accion;
        return $this;
    }
    public function put(string $ruta,callable|array $accion):Router
    {
        $this->rutas['PUT'][$ruta]=$accion;
        return $this;
    }
    public function patch(string $ruta,callable|array $accion):Router
    {
        $this->rutas['PATCH'][$ruta]=$accion;
        return $this;
    }
    public function delete(string $ruta,callable|array $accion):Router
    {
        $this->rutas['DELETE'][$ruta]=$accion;
        return $this;
    }

    public function resolver(string $requestMethod,string $requestURI){
        $ruta = parse_url($requestURI,PHP_URL_PATH);

        echo "<br>".$ruta."<br>";
        return call_user_func($this->rutas[$requestMethod][$ruta]);

    }

}