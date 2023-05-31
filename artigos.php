<?php
require 'includes/funcoes.php';

if ($_SESSION["acesso"] == "0" || empty($_SESSION["acesso"]) || $_SESSION["acesso"] == ""){
	header('Location: login.php');
	exit();
}

require 'includes/connexao.php';

$nomedapagina = "artigo";
?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="https://solutta.auditto.com.br/img/favicon/favicon.ico" />
	<title>Artigos</title>
	<link href="https://solutta.auditto.com.br/css/bootstrap.css" rel="stylesheet" />
	<link href="https://solutta.auditto.com.br/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
	<link href="https://solutta.auditto.com.br/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="https://solutta.auditto.com.br/assets/jquery-1.12.4/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div id="content" class="container">
	<div class="row">
		<div class="col-sm-4">
		<?php
			require 'includes/painel-lateral.php';
		?>
		</div>
		<div class="col-sm-20">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Artigos</h3>
				</div>
				<div class="panel-body">
					<form name="formartigo" method="post" action="gravar-artigo.php">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Nome" name="titulo_artigo" type="text" required="required" />
							</div>
							<div class="form-group">
								<textarea name="conteudo_artigo"></textarea>
							</div>
							<input type="submit" class="btn btn-lg btn-success btn-block" value="Salvar" />
							<?php
								if (isset($_GET['artigos-gravado']) && $_GET['artigos-gravado'] == "true") {
									echo '<div class="alert alert-success">Artigo gravado com sucesso</div>';
								}
				
								if (isset($_GET['artigos-gravado']) && $_GET['artigos-gravado'] == "false") {
									echo '<div class="alert alert-danger">Erro ao gravar artigo</div>';
								}
							?>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://solutta.auditto.com.br/js/bootstrap.min.js?v=1" type="text/javascript"></script>
<script src="https://solutta.auditto.com.br/js/bootstrap-bootbox.min.js" type="text/javascript"></script>
<script src="https://solutta.auditto.com.br/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="https://solutta.auditto.com.br/js/bootstrap-modal.js" type="text/javascript"></script>
<script src="https://solutta.auditto.com.br/js/jquery.blockUI.js" type="text/javascript"></script>
<script src="https://solutta.auditto.com.br/js/utils.js" type="text/javascript"></script>
<script src="https://solutta.auditto.com.br/js/jquery.utils.js?1" type="text/javascript"></script>
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
	CKEDITOR.replace('conteudo-artigo');
</script>
</body>
</html>
