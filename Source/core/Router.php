<?php 

namespace Source\core;

use Source\core\Controller;

class Router
{
    private $router;

    public function __construct($app)
    {
        $this->setRouter($app);
    }

    public function setRouter($app)
    {
        $this->router = $app;
    }

    public function loaderRoutes(){
        self::home();
    }

    //Rotas 
    //$this->router->group() = define um grupo para todos as rotas do método.
    //$this->router->namespace() = define um controlador para a requisição.
    public function home(){
        $this->router->group(null);
        $this->router->namespace("Source\App\Controllers");
        $this->router->get("/", "HomeController:getHome", "HomeController.getHomer");
    }
}