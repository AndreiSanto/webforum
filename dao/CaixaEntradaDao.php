<?php
require_once('../conexao/conexao.php');
require_once('../classes/classe.php');
class CaixaEntradaDAO
{

    private $con;

    public function CaixaEntradaDAO()
    {
        $conexao = new Conexao();
        $this->con = $conexao->getConexao();
    }
    public function inserirUsuario(caixaEmail $caixaEntrada)
    {
        $sql = $this->con->prepare("insert into caixaentrada (idRemetente,idmensagem,idDestinatario,data) values(:idRe,idMen,idDest,dat)");
        $sql->bindValue(':idRe', $caixaEntrada->getIdRemetente());
        $sql->bindValue(':idMen', $caixaEntrada->getIdMensagem());
        $sql->bindValue(':idDest', $caixaEntrada->getIdDestinatario());
        $sql->bindValue(':dat', $this->converteDataMysql($caixaEntrada->getData()));

        $sql->execute();
    }
    function converteDataMysql($data)
    {
        return date('Y-m-d', $data);
    }
    public function deleteEmail($idR, $idM)
    {
        $rs = $this->con->prepare("delete from caixaentrada where idRemetente=:id and idmensagem = :idm");
        $rs->bindValue(':id', $idR);
        $rs->bindValue(':idm', $idM);

        $rs->execute();
    }
}
