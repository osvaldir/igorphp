<?php
require 'includes/funcoes.php';
if ($_SESSION["acesso"]=="0" || empty($_SESSION["acesso"]) || $_SESSION["acesso"]==""){
	header('Location: login.php?pagina-indisponivel=true');
	exit();
}
require 'includes/connexao.php';

$nomedapagina = "painel";

?>


	<!DOCTYPE html>
	<html lang="pr-br">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="https://solutta.auditto.com.br/img/favicon/favicon.ico" />
		<link href="https://solutta.auditto.com.br/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="https://solutta.auditto.com.br/css/ionicons.min.css" rel="stylesheet" type="text/css" />
		<link href="https://solutta.auditto.com.br/brands/solutta/css/contaEstilo.css?v=7" rel="stylesheet" type="text/css" />
		<title>Painel</title>
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
        <div style="width:100%;border:1px solid #8f8f8f;min-height:360px;"></div>
    </div>
</div>
</div>
</body>
</html>