<?php
require_once ABSOLUTE_PATHAPPMODEL . DIRECTORY_SEPARATOR . 'Usuario.php';
require_once ABSOLUTE_PATHAPPMODEL . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .'DAL\DispatcherUser.php';
class UsuarioController
{
    private $model;
    private $dispatcher;
    private $local;
    public function __construct($instance, $local)
    {
        $this->local = $local;
        $this->dispatcher = new DispatcherUser();
        $this->model = new Usuario($instance);
    }

    public function createUser()
    {
        $this->model->setNome('Daniel');
        $this->model->setEmail('danieldias.santos475@gmail.com');
        $this->model->setPassword('1234');
        $this->model->setTipo(1);
        $this->model->setAluno(false);
        $this->model->setRa(0);        
        $retorno = $this->dispatcher->novoUsuario($this->model);
        outputHeader(($retorno != 0 ? true : false), "Requisição feita com sucesso.", $this->model, 202);
    }
}
