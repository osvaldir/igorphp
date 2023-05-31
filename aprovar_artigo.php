<?php
require 'includes/connexao.php';

$id_databela		= $_POST['idRegistro'];
try {
    $sqlupdate = "UPDATE artigos SET sstatus=1 WHERE Id='".$id_databela."' and sstatus=0"; 
    $conexao->exec($sqlupdate);
	$conexao = null;
    echo "ok";
} catch (Exception $e) {
    $conexao = null;
	echo "ERRO";
}
?>