<?php

class LinkController
{
    public $path;
    public $link;
    public $local;
    public $file;
    private $instance;

    public function __construct($con)
    {
        $this->instance = $con;
        $this->local = strip_tags(trim(filter_input(INPUT_GET, 'page', FILTER_DEFAULT)));
        $this->local = ($this->local ? $this->local : 'home');
        $this->local = explode('/', $this->local);
        $this->checkLink();
    }

    private function checkLink()
    {
        switch ($this->local[0]) {
            case 'Usuarios':
                require_once ABSOLUTE_PATHAPPCONTROLLER .
                    DIRECTORY_SEPARATOR . 'UsuarioController.php';
                $controller = new UsuarioController($this->instance, $this->local);
                $controller->createUser();                
                break;
            case 'Calendario':
                echo ('Api de Calendário');
                break;
            default:
                outputHeader(false, "Not found", array(), '404');
                break;
        }
    }

}
