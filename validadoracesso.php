<?php
require 'includes/connexao.php';
require 'includes/funcoes.php';

$_SESSION["acesso"] = "0";

$sqllista1 = $conexao->prepare("SELECT * FROM usuario WHERE dados_acesso='" . $_POST['dados_acesso'] . "' and chave_entrada='" . $_POST['chave_entrada'] . "' and sstatus=1");

$sqllista1->execute();

if ($sqllista1->rowCount()>0) {
	$_SESSION["acesso"] = "1";
	header('Location: painel.php');
} else {
	header('Location: login.php?erro-login=true');
	echo "login não encontrado";
}
$sqllista1->fetch();
$sqllista1->closeCursor();

$conexao = null;

?> 