<?php

namespace Core;
class Router{

    protected $routes = [];

    public function add($method ,$uri,$controller){
        $this->routes[]= compact('method', 'uri','controller');
        return $this;
    }
    public function get($uri,$controller){
        return $this->add('GET',$uri,$controller);
    }

    public function post($uri,$controller){
        return $this->add('POST',$uri,$controller);
    }

    public function delete($uri,$controller){
        return $this->add('DELETE',$uri,$controller);
    }

    public function patch($uri,$controller){
        return $this->add('PATCH',$uri,$controller);
    }

    public function put($uri,$controller){
        return $this->add('PUT',$uri,$controller);
    }

    public function only($key){
        dd($key);
    }

    public function route($uri,$method){
        foreach($this->routes as $route){
            if($route['uri'] === $uri && $route['method'] === strtoupper($method)){
                return require base_path($route['controller']);
            }
        }
        $this->abort();
    }
    public function abort($code = 404){
        http_response_code($code);
        require base_path("views/{$code}.php");
        die();
    }
}

/* 

//routing with a function(uri, routes(ass. array))
function routeToController($uri,$routes){
    if(array_key_exists($uri,$routes)){
        require base_path($routes[$uri]);
    } else{
        abort();
    }
}

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER["REQUEST_URI"])['path'];
routeToController($uri,$routes);
*/