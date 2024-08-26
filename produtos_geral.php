<?php
include 'conn/connect.php';
$lista = $conn->query('select * from vw_produto order by rotulo');
$row_produtos = $lista->fetch_assoc();
$num_linhas = $lista->num_rows;
?>
 
<!-- Mostrar se a consulta retornar vazio   -->
 
<?php if($num_linhas == 0){?>
    <h2 class="breadcrumb alert-danger">
        Não há produtos cadastrados!
    </h2>
<?php }?>
<!-- mostrar se a consulta retornou produtos -->
<?php if($num_linhas > 0){?>
    <h2 class="breadcrumb alert-success">
         Produtos Cadastrados = <?php echo $num_linhas;?>
    </h2>
    <div class="row">
        <?php do{ ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail ">
                <a href="produto_detalhes.php?id=<?php echo $row_produtos['id_do_produto']?>">
                    <img src="images/<?php echo $row_produtos['nome_imagem']?>" alt="" class="img-resposive img-rounded">
                </a>
                <div class="caption text-right bg-secondary">
                    <h3 class="text-success">
                        <strong><?php echo $row_produtos['rotulo']?></strong>
                    </h3>
                    <p class="text-danger">
                        <strong><?php echo $row_produtos['categoria_descricao']?></strong>
                    </p>
                    <p class="text-left">
                        <?php echo mb_strimwidth($row_produtos['descricao'],0,42,'...');?>
                    </p>
                    <a href="http://localhost/projeto-web/carrinho.php">
                 <button class="btn-block btn-success glyphicon">
                    <span class="glyphicon-shopping-cart" aria-hidden="true"></span>
                        Adicionar ao Carrinho
                 </button>
                 </a>
                </div>
            </div>
        </div>
        <?php }while($row_produtos = $lista->fetch_assoc()); ?>
    </div>
 
<?php }?>

