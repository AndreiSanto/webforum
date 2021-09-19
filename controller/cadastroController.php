<?php
require_once('../dao/UsuarioDao.php');
require_once('../classes/usuario.php');

$usuarioDao = new UsuarioDao();
$nome = $_REQUEST["nome"];
$usuario = $_REQUEST["usuario"];
$senha = $_REQUEST["senha"];
$email = $_REQUEST["email"];

$usuario = new Usuario($nome,$email,$usuario,$senha);

$usuarioDao->inserirUsuario($usuario);







?>
