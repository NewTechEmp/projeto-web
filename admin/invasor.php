<?php 
 include '../conn/connect.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="50;URL=../index.php"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- <script src="https://kit.fontawesome.com/2495680ceb.js" crossorigin="anonymous"></script> -->
    <!-- Link para CSS específico -->
    <link rel="stylesheet" href="../css/estilo.css" type="text/css">

    <title> Cowabunga | Security</title>
</head>

<body>
    <main class="container">
        <section>
            <article>
                <div class="row">
                    <div class="col-xs-20 col-sm-20 col-sm-offset-20 col-md-20 col-md-offset-20">
                        <h1 class="breadcrumb text-danger text-center">SUSPEITO DE INVASÃO/OU USUÁRIO INCORRETO</h1>
                        <div class="thumbnail">
                            <p class="text-danger text-center" role="alert">
                                <i class="fas fa-users fa-10x"></i>
                            </p>
                            <br>
                            <div class="alert alert-danger" role="alert">
                                <form action="login.php" name="form_login" id="form_login" method="POST"
                                    enctype="multipart/form-data">
                                    <label for="nome_usuario">Nome:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user text-danger" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="nome" id="nome" class="form-control" autofocus
                                            required autocomplete="off" placeholder="Digite seu nome.">
                                    </p>
                                    <label for="senha">Senha:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-qrcode text-danger"
                                                aria-hidden="true"></span>
                                        </span>
                                        <input type="password" name="senha" id="senha" class="form-control" required
                                            autocomplete="off" placeholder="Digite sua senha.">
                                    </p>
                                    <p class="text-right">
                                        <input type="submit" value="Entrar" class="btn btn-primary">
                                    </p>
                                </form>
                                <p class="text-center">
                                    <small>
                                        <br>
                                        Caso não faça uma escolha em 30 segundos será redirecionado automaticamente para
                                        página inicial.
                                    </small>
                                </p>
                            </div><!-- fecha alert -->
                        </div><!-- fecha thumbnail -->
                    </div><!-- fecha dimensionamento -->
                </div><!-- fecha row -->
            </article>
        </section>
    </main>


    <!-- Link arquivos Bootstrap js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>