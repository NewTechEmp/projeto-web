<?php 
include 'acesso_com.php';
 include '../conn/connect.php';
 if($_POST)
 {
    $nome = $_POST['nome'];
    $senha = md5($_POST['senha']);
    $nivelId = $_POST['nivel_id'];
    $insereUsuario = "insert usuarios (nome,senha,nivel_id)
    values 
    ('$nome','$senha','$nivelId')";

    $resultado = $conn->query($insereUsuario);
 }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//css/bootstrap.min.css">
    <link rel="stylesheet" href="..//css/estilo.css">
    <title>INSERE USUÁRIO | COWABUNGA </title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-6  col-md-8">
                <h2 class="breadcrumb text-danger">
                    <a href="usuarios_lista.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Inserir Usuário
                </h2>
                <div class="thumbnail">
                    <div class="alert alert-danger" role="alert">
                        <form action="usuarios_insere.php" method="post">


                            <label for="text">Nome : </label>
                            <input type="text" id="nome" name="nome" required class="form-control"><br><br>

                            <label for="senha">Senha : </label>
                            <input type="password" id="senha" name="senha" required class="form-control"><br><br>

                            <p>Nivel:</p>

                            <input type="radio" id="nivelId" name="nivelId" value="ADM" required>
                            <label for="feminino">Superior</label>
                            <br>
                            <input type="radio" id="nivelId" name="nivelId" value="COM" required checked>
                            <label for="masculino">Comum</label>
                            <br>
                            <br>

                            <input type="submit" value="Enviar" id="button" class="btn btn-danger btn-block">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>