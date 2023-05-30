<?php
require 'includes/funcoes.php';
if ($_SESSION["acesso"]=="0" || empty($_SESSION["acesso"]) || $_SESSION["acesso"]==""){
	//header('Location: login.php');
	//exit();
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
	<meta name="description" content="" />
	<meta name="author" content="" />
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="https://solutta.auditto.com.br/img/favicon/favicon.ico" />
	<link href="https://solutta.auditto.com.br/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="https://solutta.auditto.com.br/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<link href="https://solutta.auditto.com.br/brands/solutta/css/contaEstilo.css?v=7" rel="stylesheet" type="text/css" />
	<title>Lista Artigos</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Lista Artigos</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-8 text-right mt-10 mb-10">
							
						</div>
						<div class="col-sm-4 text-right mt-10 mb-10">
							<input type="button" class="btn btn-lg btn-info btn-block" value="Novo Artigo"  onclick="javascript:location.href='artigos.php'"/>
						</div>
					</div>
					<?$sqllista1 = $conexao->prepare("SELECT * FROM artigos WHERE sstatus<>9");
					$sqllista1->execute();
					if ($sqllista1->rowCount()>0) {?>
						<table border="1" width="100%">
							<tr>
								<td width="2%"><strong>Cod.</strong></td>
								<td width="78%"><strong>Titulo</strong></td>
								<td width="10%"><strong>Status</strong></td>
								<td width="10%"><strong>Ações</strong></td>
							</tr>
						<?while( $rs_sqllista1 = $sqllista1->fetch() ) {?>
							<tr>
								<td class="text-center"><?=$rs_sqllista1["Id"]?></td>
								<td><?=$rs_sqllista1["titulo_artigo"]?></td>
								<td>
									<?if ($rs_sqllista1["sstatus"]=="0"){?>
										<input type="button" class="btn btn-lg btn-success btn-block" value="Aprovar" onclick="javascript:chamaaprovar(<?=$rs_sqllista1["Id"]?>)"/>
									<?}else{?>
										Aprovado
									<?}?>
								</td>
								<td>
									<input type="button" class="btn btn-lg btn-primary btn-block" value="Editar" onclick="javascript:chamaeditar(<?=$rs_sqllista1["Id"]?>)"/>
									<input type="button" class="btn btn-lg btn-danger btn-block" value="Excluir" onclick="javascript:chamaexcluir(<?=$rs_sqllista1["Id"]?>)"/>
								</td>
							</tr>
						<?}?>
						</table>
					<?}
					$sqllista1->fetch();
					$sqllista1->closeCursor();
					$conexao = null;?>
				</div>
			</div>
		</div>
	</div>
</div>

<form method="post" name="frmeditar" action="artigos.php">
	<input type="hidden" name="idregistro" id="idregistro" value="">
</form>

<script src="https://solutta.auditto.com.br/js/bootstrap.min.js?v=1" type="text/javascript"></script>
<script src="https://solutta.auditto.com.br/js/bootstrap-bootbox.min.js" type="text/javascript"></script>
<script src="https://solutta.auditto.com.br/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="https://solutta.auditto.com.br/js/bootstrap-modal.js" type="text/javascript"></script>
<script src="https://solutta.auditto.com.br/js/jquery.blockUI.js" type="text/javascript"></script>
<script src="https://solutta.auditto.com.br/js/utils.js" type="text/javascript"></script>
<script src="https://solutta.auditto.com.br/js/jquery.utils.js?1" type="text/javascript"></script>
<script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>

<script>
function chamaaprovar(codigo){
	if (confirm("TEM CERTEZA?\n\n Que deseja aprovar?\n\n")){
		$.post('aprovar_artigo.php', { idRegistro: codigo }, function (result) {
			if (result=="ok"){
				alert("Registro Aprovado");
				location.href='lista_artigos.php';
			}else{
				alert("Erro tente novamente");
				location.href='lista_artigos.php';
			}
		});
	}else{
		alert("Ok o registro não será aprovado.");
	}
}
function chamaeditar(codigo){
	$('#idregistro').val(codigo);
	document.frmeditar.submit();
}
function chamaexcluir(codigo){
	if (confirm("TEM CERTEZA?\n\n Que deseja EXCLUIR?\n\n")){
		$.post('excluir_artigo.php', { idRegistro: codigo }, function (result) {
			if (result=="ok"){
				alert("Registro Excluido");
				location.href='lista_artigos.php';
			}else{
				alert("Erro tente novamente");
				location.href='lista_artigos.php';
			}
		});
	}else{
		alert("Ok o registro não será excluido.");
	}
}
</script>
</body>
</html>