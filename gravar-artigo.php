<?php
require 'includes/connexao.php';

$idregistro		= $_POST['idregistro'];
$titulo_artigo		= $_POST['titulo_artigo'];
$conteudo_artigo	= $_POST['conteudo_artigo'];

<<<<<<< HEAD
try {

    $query = "INSERT INTO artigos(titulo_artigo, descricao) VALUES ('$tituloArtigo', '$conteudoArtigo')"; 

    $conexao->exec($query);

    header('Location: artigos.php?artigos-gravado=true');

} catch (Exception $e) {
    header('Location: artigos.php?artigos-gravado=false');
=======
if ($idregistro=="" || empty($idregistro)){
	try {
		$qslinsert = "INSERT INTO artigos(titulo_artigo, conteudo_artigo) VALUES ('".str_replace("'","",$titulo_artigo)."', '".str_replace("'","",$conteudo_artigo)."')"; 
		$conexao->exec($qslinsert);
		$conexao = null;
		header('Location: artigos.php?artigos-gravado=true');
	} catch (Exception $e) {
		$conexao = null;
		header('Location: artigos.php?artigos-gravado=false');
	}
}else{
	try {
		$qslinsert = "UPDATE artigos SET titulo_artigo='".str_replace("'","",$titulo_artigo)."', conteudo_artigo='".str_replace("'","",$conteudo_artigo)."' WHERE Id='".$idregistro."'"; 
		$conexao->exec($qslinsert);
		$conexao = null;
		header('Location: lista_artigos.php');
	} catch (Exception $e) {
		$conexao = null;
		header('Location: lista_artigos.php');
	}
>>>>>>> 82ea3bb1826f0978c2abee972cd8dcf677297683
}
?>