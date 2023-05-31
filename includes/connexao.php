<?php
$db_user = "root";
$db_senha = "";
$servidor = 'localhost';
$bd = 'teste';
try{
	$conexao = new PDO("mysql:host=$servidor;dbname=$bd;charset=utf8;", $db_user, $db_senha);
}catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}
?>
