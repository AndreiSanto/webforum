<?php

class Assunto
{
    private $idAssunto;
    private $titulo;

    public function Assunto($titu)
    {
        $this->titulo = $titu;
    }
    public function set_Assunto($id, $titu)
    {
        $this->titulo = $titu;
        $this->idAssunto = $id;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getId()
    {
        return $this->idAssunto;
    }
}
class Mensagem
{
    private $idAssunto;
    private $idMensagem;
    private $titulo;
    private $conteudo;
    public function Mensagem($titu, $cont, $idA)
    {
        $this->titulo = $titu;
        $this->conteudo = $cont;
        $this->idAssunto = $idA;
    }
    public function setMensagem($idM, $titu, $cont, $idA)
    {
        $this->titulo = $titu;
        $this->conteudo = $cont;
        $this->idAssunto = $idA;
        $this->idMensagem = $idM;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getConteudo()
    {
        return $this->conteudo;
    }
    public function getIdMensagem()
    {
        $this->idMensagem;
    }
    public function getIdAssunto()
    {
        $this->idAssunto;
    }
    public function setIdAssunto($idA)
    {
        $this->idAssunto = $idA;
    }
}
class caixaEmail
{
    private $idCaixa;
    private $idRemetente;
    private $idDestinatario;
    private $idMensagem;
    private $dataRecebida;

    public function caixaEmail($idRe, $idDes, $idMen, $dat)
    {
        $this->idRemetente = $idRe;
        $this->idDestinatario = $idDes;
        $this->idMensagem = $idMen;
        $this->data = $dat;
    }
    public function setCaixaEmail($idC, $idRe, $idDes, $idMen, $dat)
    {
        $this->idRemetente = $idRe;
        $this->idDestinatario = $idDes;
        $this->idMensagem = $idMen;
        $this->data = $dat;
        $this->idCaixa = $idC;
    }
    public function getIdMensagem()
    {
        return $this->idMensagem;
    }
    public function getIdRemetente()
    {
        return $this->idRemetente;
    }
    public function getIdDestinatario()
    {
        return $this->idDestinatario;
    }
    public function getDataRecebida()
    {
        return $this->dataRecebida;
    }
    public function getIdCaixa()
    {
        return $this->idCaixa;
    }
    public function getData()
    {
        return $this->data;
    }
}
