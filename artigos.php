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
			
		</div>
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Artigos</h3>
				</div>
				<div class="panel-body">
					<form name="formartigo" method="post" action="">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Nome" name="nome_artigo" type="text" required="required" />
							</div>
							<div class="form-group">
								 <textarea name="editor1"></textarea>
							</div>
							<input type="submit" class="btn btn-lg btn-success btn-block" value="Salvar" />
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
	ClassicEditor
	.create( document.querySelector( '#editor' ) )
	.then( editor => {
			console.log( editor );
	} )
	.catch( error => {
			console.error( error );
	} );
</script>
</body>
</html>