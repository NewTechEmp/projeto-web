<?php
include 'acesso_com.php';
include '../conn/connect.php';

// implementação backend a partir daqui...
if ($_POST){
    if(isset($_POST['enviar'])){
        $nome_img = $_FILES['imagefile']['name'];
        $tmp_img = $_FILES['imagem']['tmp_name'];
        $rand = rand(100001,999999);
        $dir_img = "../images/".$rand.$nome_img;
        move_uploaded_file($tmp_img, $dir_img);


    }
    $id = $_POST['id'];
    $rotulo = $_POST['rotulo'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor_unit'];
    $cod_barras = $_POST['cod_barras'];
    $imagem = $_POST['nome_imagem'];
    $destaque = $_POST['destaque'];
    
    $imagem = $rand.$nome_img;
    $insereProduto = "insert produtos (rotulo,descricao,valor_unit,cod_barras,nome_imagem,destaque)
    values 
    ('$rotulo''$descricao','$valor','$cod_barras','$imagem','$destaque')";

    $resultado = $conn->query($insereProduto);
    if (mysqli_insert_id($conn)) {
        header('location:produtos_lista.php');
}

}
// selecionar a lista de categorias para preencher <select>
$ListaTipo = $conn->query("select * from categorias order by descricao"); 
$rowTipos = $ListaTipo->fetch_assoc();
$numLinhas = $ListaTipo->num_rows;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>PRODUTOS INSERE - COWABUNGA</title>
</head>

<body>
    <?php include "menu_adm.php";?>
    <main class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-6  col-md-8">
                <h2 class="breadcrumb text-danger">
                    <a href="produtos_lista.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Inserindo Produtos
                </h2>
                <div class="thumbnail">
                    <div class="alert alert-danger" role="alert">
                        <form action="produtos_insere.php" method="post" name="form_insere"
                            enctype="multipart/form-data" id="form_insere">
                            <label for="id_tipo">Categoria:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                                </span>
                                <select name="categoria_id" id="categoria_id" class="form-control" required>
                                    <?php do{?>


                                    <option value="<?php echo $rowTipos['id'];?>">
                                        <!-- buscar tipo -->
                                        <?php echo $rowTipos['categoria_descricao'];?>

                                    </option>
                                    <?php } while($rowTipos = $ListaTipo->fetch_assoc());?>
                                </select>
                            </div>
                            <label for="destaque">Destaque:</label>
                            <div class="input-group">
                                <label for="destaque_s" class="radio-inline">
                                    <input type="radio" name="destaque" id="destaque" value="1">Sim
                                </label>
                                <label for="destaque_n" class="radio-inline">
                                    <input type="radio" name="destaque" id="destaque" value="0" checked>Não
                                </label>
                            </div>
                            <label for="descricao">Rótulo:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="rotulo" id="rotulo" cols="30" rows="8" class="form-control"
                                    placeholder="Digite o rótulo do produto" required>
                            </div>

                            <label for="resumo">Descrição:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                </span>
                                <textarea name="descricao" id="descricao" class="form-control"
                                    placeholder="Descreva o produto" maxlength="100" required></textarea>
                            </div>

                            <label for="valor">Valor:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                                </span>
                                <input type="number" name="valor" id="valor" class="form-control" required min="0"
                                    step="0.01">
                            </div>
                            <label for="imagem">Imagem:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                                </span>
                                <img src="" name="imagem" id="imagem" class="img-responsive">
                                <input type="file" name="imagemfile" id="imagemfile" class="form-control"
                                    accept="image/*">
                            </div>

                            <br>
                            <input type="submit" name="enviar" id="enviar" class="btn btn-danger btn-block"
                                value="Cadastrar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Script para imagem -->
    <script>
    document.getElementById("imagem").onchange = function() {
        var reader = new FileReader();
        if (this.files[0].size > 512000) {
            alert("A imagem deve ter no máximo 500KB");
            $("#imagem").attr("src", "blank");
            $("#imagem").hide();
            $("#imagem").wrap('<form>').closest('form').get(0).reset();
            $("#imagem").unwrap();
            return false
        }
        if (this.files[0].type.indexOf("image") == -1) {
            alert("formato inválido, escolha uma imagem!");
            $("#imagem").attr("src", "blank");
            $("#imagem").hide();
            $("#imagem").wrap('<form>').closest('form').get(0).reset();
            $("#imagem").unwrap();
            return false
        }
        reader.onload = function(e) {
            document.getElementById("imagem").src = e.target.result
            $("#imagem").show();
        }
        reader.readAsDataURL(this.files[0])
    }
    </script>

</body>

</html>