<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 03/05/18
 * Time: 09:04
 */

class Usuario
{
    public $nome;
    public $email;
    public $senha;
    public $id;
    public $deficiencia;
    public $login;

    public function __construct($nome,$email,$deficiencia,$login,$senha,$id)
    {
        $this->nome = $nome;
        $this->email= $email;
        $this->senha= $senha;
        $this->id= $id;
        $this->deficiencia = $deficiencia;
        $this->login = $login;

    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    /**
     * @return mixed
     */
    public function getDeficiencia()
    {
        return $this->deficiencia;
    }

    /**
     * @param mixed $deficiencia
     */
    public function setDeficiencia($deficiencia)
    {
        $this->deficiencia = $deficiencia;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

}


