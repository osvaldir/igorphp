
<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="https://solutta.auditto.com.br/img/favicon/favicon.ico"/>
    <link href="https://solutta.auditto.com.br/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://solutta.auditto.com.br/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://solutta.auditto.com.br/brands/solutta/css/contaEstilo.css?v=7" rel="stylesheet" type="text/css"/>
    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="https://solutta.auditto.com.br/css/bootstrap.css" rel="stylesheet">
    <link href="https://solutta.auditto.com.br/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
    <link href="https://solutta.auditto.com.br/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="https://solutta.auditto.com.br/assets/jquery-1.12.4/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
        </head>
    <body>
    <div>
                <div id="content" class="container">
            <div class="row" style="margin: 3em 0">
    <div class="col-sm-8 col-sm-offset-8 text-center">
                    <img alt="" src="https://solutta.auditto.com.br/brands/solutta/img/login.png" height="111" style="padding: 10px;"/>
            </div>
</div>


    <div class="row">
        <div class="col-sm-8 col-sm-offset-8">
                        <div id="mensagem"></div>
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Efetuar login</h3>
                </div>
                <div class="panel-body">
                 <form role="form" method="post" action="validadoracesso.php">
                    <input type="hidden" name="ZmJWNkRDRXdGS2FxTGNhY2lCQnRDUT09"
                        value="bU1nYlZKdG1rdXpXSlNocS9ySUhxdz09"><fieldset>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="login" name= "dados_acesso" type="text" autofocus required>
                                </div>
                <div class="form-group">
                 <input class="form-control" placeholder="password" name="chave_entrada" id="senha" type="password" value="" required>
                </div>
                <?php
                    if (isset($_GET['erro-login']) && $_GET['erro-login'] == true) {
                        echo '<div class="alert alert-danger">Usuário ou senha incorretos</div>';
                    }
                    if (isset($_GET['pagina-indisponivel']) && $_GET['pagina-indisponivel'] == true) {
                        echo '<div class="alert alert-warning">Faça o login</div>';
                    }
                   
                ?>
                <input type="submit" class="btn btn-lg btn-success btn-block" value="Entrar">
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#btEsqueciASenha').click(function (event) {
                event.preventDefault();

                $('div.alert').remove();

                bootbox.prompt('<small>Informe o login ou email para enviar o pedido de alteração de senha<small>',
                    function (result) {
                        if (result !== null) {
                            $.ajax({
                                url: '/contas/login/esqueciASenha',
                                type: 'POST',
                                data: {busca: result},
                                dataType: 'json',
                                beforeSend: function () {
                                    $.blockUI();
                                },
                                complete: function () {
                                    showAlert('Um pedido de alteração de senha foi enviado para o email associado ao usuário!', 'alert-success', 'mensagem');
                                },

                            }).done(function (data, textStatus, jqXHR) {
                                try {
                                    if (data.mensagem) {
                                        showAlert(data.mensagem, (data.sucesso ? 'alert-success' : 'alert-danger'), 'mensagem');
                                    }
                                } catch (exception) {
                                    // no halt
                                }
                            }).always(function () {
                                $.unblockUI();
                            });
                        }
                    }
                );
            });

            

        });
    </script>
        </div>
    </div>
    <script src="https://solutta.auditto.com.br/js/bootstrap.min.js?v=1" type="text/javascript"></script>
    <script src="https://solutta.auditto.com.br/js/bootstrap-bootbox.min.js" type="text/javascript"></script>
    <script src="https://solutta.auditto.com.br/js/bootstrap-modalmanager.js" type="text/javascript"></script>
    <script src="https://solutta.auditto.com.br/js/bootstrap-modal.js" type="text/javascript"></script>
    <script src="https://solutta.auditto.com.br/js/jquery.blockUI.js" type="text/javascript"></script>
    <script src="https://solutta.auditto.com.br/js/utils.js" type="text/javascript"></script>
    <script src="https://solutta.auditto.com.br/js/jquery.utils.js?1" type="text/javascript"></script>
    </body>
</html>
