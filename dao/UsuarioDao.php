<?php

require_once('../conexao/conexao.php');
require_once('../classes/classe.php');
class UsuarioDao
{
    private $con;

    public function UsuarioDao()
    {
        $conexao = new Conexao();
        $this->con = $conexao->getConexao();
    }
    public function inserirUsuario(Usuario $usuario)
    {

        $sql = $this->con->prepare("insert into usuario (nome,email,login,senha) values(:nom,:em,:log,:se)");
        $sql->bindValue(':nom', $usuario->getNome());
        $sql->bindValue(':em', $usuario->getEmail());
        $sql->bindValue(':log', $usuario->getLogin());
        $sql->bindValue(':se', $usuario->getSenha());
        $sql->execute();
    }
    public function getUsuarios(Usuario $usuario)
    {
        $sql = $this->con->prepare("select * from usuario where idUsuario = :id");
        $sql->bindValue(':id', $usuario->getId());
        $sql->execute();
        $lista = array();
        while ($c = $sql->fetch(PDO::FETCH_OBJ)) {
            $lista[] = $c;
        }

        return $lista;
    }
}
