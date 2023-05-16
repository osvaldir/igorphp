<!DOCTYPE html>
<html lang="pr-br">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<!-- <base href="https://solutta.auditto.com.br/" /> -->
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="https://solutta.auditto.com.br/img/favicon/favicon.ico" />

	<link href="https://solutta.auditto.com.br/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="https://solutta.auditto.com.br/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<link href="https://solutta.auditto.com.br/brands/solutta/css/contaEstilo.css?v=7" rel="stylesheet" type="text/css" />
	<title>Login</title>

	<!-- Bootstrap core CSS -->
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
	<div class="row" style="margin: 3em 0;">
		<div class="col-sm-8 col-sm-offset-8" align="center">
			<img alt="" src="/brands/solutta/img/login.png" height="111" style="padding: 10px;" />
		</div>
	</div>

	<div class="row">
		<div class="col-sm-8 col-sm-offset-8">
			<div id="mensagem"></div>
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"></h3>
				</div>
				<div class="panel-body">
					<form name="form" method="post" action="">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="login" name="dados_acesso" type="text" autofocus required="required" />
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Senha" name="chave_entrada" id="senha" type="password" value="" required="required"/>
							</div>
							<input type="button" class="btn btn-lg btn-success btn-block" value="Entrar" />
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>