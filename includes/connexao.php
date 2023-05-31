<?php
$db_user = "root";
$db_senha = "123456";
$servidor = 'localhost';
$bd = 'igorphp';
try{
	$conexao = new PDO("mysql:host=$servidor;dbname=$bd;charset=utf8;", $db_user, $db_senha);
}catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}
?>
