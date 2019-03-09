<?php    
    $numOfCols = 4;
    $rowCount = 0;
    $bootstrapColWidth = 12 / $numOfCols;
?>
<div class="row mt-5 mb-5">
<?php
foreach ($series as $serie){
    
?>  
      
    <div class="card col-md-<?php echo $bootstrapColWidth; ?> success-color-dark p-4">
       
        <div class="view overlay">
            
            <a href="<?= base_url() ?>Series/Detalhes/<?php echo $serie->id?>">
                <img src="<?= base_url() ?>/assets/img/<?php echo $serie->Imagem?>.png" class="img-thumbnail">
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>
     
        <div class="card-body elegant-color white-text rounded-bottom">
          
            <div class="row">
                <div class="col">
                    <p>R$ <?php echo $serie->Valor?></p>
                </div>
                <div class="col text-right">
                    <p>Temp: <?php echo $serie->Temporadas?></p>
                </div>
            </div>

            <hr class="hr-light">  
          
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title"><?php echo $serie->Nome?></h4>
                </div>
                <div class="col-2">
                    <a href="<?= base_url() ?>Series/Detalhes/<?php echo $serie->id?>" class="white-text d-flex justify-content-end"><h5><i class="fas fa-angle-double-right"></i></h5></a>
                </div>
            </div>                                              

        </div>
    </div>

    <?php
        $rowCount++;
        if($rowCount % $numOfCols == 0) echo '</div><div class="row mb-5">';
}
?>
</div>
