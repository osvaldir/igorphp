<?php
require 'includes/connexao.php';

$id_databela		= $_POST['idRegistro'];
try {
    //$sqlupdate = "DELETE from artigos WHERE Id='".$id_databela."'";
	$sqlupdate = "UPDATE artigos SET sstatus=9 WHERE Id='".$id_databela."'"; 
    $conexao->exec($sqlupdate);
	$conexao = null;
    echo "ok";
} catch (Exception $e) {
    $conexao = null;
	echo "ERRO";
}
?>