<?php

require_once('../conexao/conexao.php');
require_once('../classes/classe.php');
class AssuntoDao
{
    private $con;

    public function AssuntoDao()
    {
        $conexao = new Conexao();
        $this->con = $conexao->getConexao();
    }
    public function inserirUsuario(Assunto $assunto)
    {
        $sql = $this->con->prepare("insert into assunto (titulo) values(:titu)");
        $sql->bindValue(':titu', $assunto->getTitulo());
        $sql->execute();
    }
   public function deleteMensagem($id)
    {
        $rs = $this->con->prepare("delete from assunto where id=:id");
        $rs->bindValue(':id', $id);
        $rs->execute();
    }
}
