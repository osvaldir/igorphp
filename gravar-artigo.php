<?php
require 'includes/connexao.php';

$tituloArtigo = $_POST['titulo_artigo'];
$conteudoArtigo = $_POST['conteudo-artigo'];

try {

    $query = "INSERT INTO artigos(titulo_artigo, descricao) VALUES ('$tituloArtigo', '$conteudoArtigo')"; 

    $conexao->exec($query);

    header('Location: artigos.php?artigos-gravado=true');

} catch (Exception $e) {
    header('Location: artigos.php?artigos-gravado=false');
}
?>