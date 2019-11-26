<?php

class Usuario
{
    /* #region  Propriedades */
    public $instance;
    private $id;
    private $nome;
    private $email;
    private $password;
    private $tipo;
    private $ra;
    private $aluno;
    /* #endregion */

    /* #region  Construtor */
    public function __construct($instance)
    {
        $this->instance = $instance;
    }
    /* #endregion */

    /* #region  Getters and Setters */
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of ra
     */
    public function getRa()
    {
        return $this->ra;
    }

    /**
     * Set the value of ra
     *
     * @return  self
     */
    public function setRa($ra)
    {
        $this->ra = $ra;

        return $this;
    }

    /**
     * Get the value of aluno
     */
    public function getAluno()
    {
        return $this->aluno;
    }

    /**
     * Set the value of aluno
     *
     * @return  self
     */
    public function setAluno($aluno)
    {
        $this->aluno = $aluno;

        return $this;
    }
    /* #endregion */
}
