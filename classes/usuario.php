<?php
class Usuario
{
    private $idUsuario;
    private $nome;
    private $email;
    private $login;
    private $senha;
    function Usuario($no, $ema, $log, $sen)
    {
        $this->nome = $no;
        $this->email = $ema;
        $this->login = $log;
        $this->senha = $sen;
    }
    public function set_Usuario($id, $no, $ema, $log, $sen)
    {
        $this->nome = $no;
        $this->email = $ema;
        $this->login = $log;
        $this->senha = $sen;
        $this->idUsuario = $id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getLogin()
    {
        return $this->login;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function getId()
    {
        return $this->idUsuario;
    }
}