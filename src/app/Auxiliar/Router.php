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
        $path = parse_url($requestURI,PHP_URL_PATH);

        $ruta = explode('/',$path);

        $ruta[1]="/".$ruta[1];

        $numParametros=count($ruta);

        //var_dump($ruta);

        switch ($numParametros){
            case 2:
                $accion =$this->rutas[$requestMethod][$ruta[1]];
                if (is_callable($accion)){
                    return call_user_func($accion);
                }else{
                    $endpoint=$ruta[1];
                    $parametros=[];
                }
                break;
            case 3:
                if ($ruta[1]==="/api"){
                    $endpoint="/api/".$ruta[2];
                    //var_dump($endpoint);
                    $parametros=[];
                }else{
                    $endpoint=$ruta[1];
                    $parametros=[$ruta[2]];
                }
                break;
            case 4:
                $endpoint="/api/".$ruta[2];
                $parametros=[$ruta[3]];
                break;
            default:
                $endpoint="index";
                $parametros=[];
        }


        //return call_user_func($this->rutas[$requestMethod][$ruta]);
        [$clase,$metodo]=$this->rutas[$requestMethod][$endpoint];
        $instanciaClase = new $clase();
        return call_user_func_array([$instanciaClase,$metodo],$parametros);



    }

}