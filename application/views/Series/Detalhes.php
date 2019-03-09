<div class="container">
    <div class="container">        
        <h1 class="text-center text-white"><?php echo $serie[0]->Nome?></h1>
    </div>
    <div class="container success-color-dark p-5">        
        <img class="img-fluid z-depth-5" src="<?= base_url() ?>assets/img/<?php echo $serie[0]->Imagem?>.png">
    </div>
    <div class="row text-white mt-4">
        <div class="col">
            <p>Valor: <?php echo $serie[0]->Valor?> R$</p>
        </div>

        <div class="col text-center">
        <button type="button" class="btn success-color-dark btn-rounded">Comprar    <i class="fas fa-cart-plus"></i></button>
        </div>
        
        <div class="col text-right">
            <p>Temporadas: <?php echo $serie[0]->Temporadas?></p>
        </div>
    </div>
    <hr class="hr-light">
    <div class="container mb-5 text-white">
        <p><?php echo $serie[0]->Descricao?></p>    
    </div>
</div>