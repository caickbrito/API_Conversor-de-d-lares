<?php 

namespace Source\Core;

use League\Plates\Engine;
use CoffeeCode\Router\Router;

class Controller
{
    protected $view;    
    protected $router;

    public function __construct($router)
    {
        $this->router = $router;
        $this->view = Engine::create(CONF_VIEW_PATH . CONF_VIEW_THEME . "/", CONF_VIEW_EXT);
        $this->view->addData(["router" => $router]);
    }
}	