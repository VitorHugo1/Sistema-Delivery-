<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= INCLUDE_PATH ?>views/style.css">
    <title>Delivery System</title>
</head>
<body>
   <section class="descricao-home">
    <div class="container">
        <h2><i class="fas fa-bullhorn"></i>Faça seu pedido conosco!</h2>
        <a href="<?= INCLUDE_PATH?>fechar-pedido">Fechar Pedido!</a>
        <div class="clear"></div>
    </div>
   </section>

    <section class="lista-produtos">
        <div class="container">
            <?php
                $sushis = deliveryModel::listarItems();
                foreach($sushis as $key=>$value){
            ?>
        <div class="box-single-food">
                <img src="<?php echo INCLUDE_PATH ?>images/<?= $value['0']?>">
                    <p>R$<?= $value['1']?></p>
                    <a href="<?= INCLUDE_PATH?>?addCart=<?= $key?>">Adicionar ao carrinho</a>
                </img>
            </div>
            <?php } ?>
            <div class="clear"></div>
        </div>
    </section>

</body>
</html>