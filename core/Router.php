<?php


/**
 * Class Router
 */
class Router
{

    /**
     * @var array
     */
    protected $routes = [];

    /**
     * @param $routes Array with routes
     */
    public function define ($routes){
        $this->routes = $routes;
    }

    /**
     * @param $routes Path to file with routes
     * @return static
     */
    public static function load($routes)
    {
        $router = new static;
        $router->routes = require $routes;

        return $router;
    }

    /**
     * @param $url
     * @throws Exception
     */
    public function direct($url)
    {
        if(array_key_exists($url, $this->routes)){
            require $this->routes($url);
        } else {
            throw new Exception("No s'ha trobat la ruta");
        }
    }
}