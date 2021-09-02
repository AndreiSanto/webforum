<?php

require_once('../conexao/conexao.php');
require_once('../classes/classe.php');
class MensagemDao
{
    private $con;
    public function MensagemDao()
    {
        $conexao = new Conexao();
        $this->con = $conexao->getConexao();
    }
    public function inserirMensagem(Mensagem $mensagem)
    {
        $sql = $this->con->prepare("insert into mensagem (idAssunto,titulo,conteudo) values(:id,:titu,:cont)");
        $sql->bindValue(':id', $mensagem->getIdAssunto());
        $sql->bindValue(':titu', $mensagem->getTitulo());
        $sql->bindValue(':cont', $mensagem->getConteudo());
    }
    public function deleteMensagem($id)
    {
        $rs = $this->con->prepare("delete from mensagem where id=:id");
        $rs->bindValue(':id', $id);
        $rs->execute();
    }
}
