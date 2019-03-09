<table id="dtBasicExample" class="table table-striped display responsive nowrap" style="width:100%">
  <thead>
    <tr>
        <th class="th-sm" data-priority="1">Nome
        </th>  
        <th class="th-sm">Genero
        </th>
        <th class="th-sm">Valor
        </th>        
        <th class="th-sm">Modificado em
        </th>
        <th class="th-sm" data-priority="2">Opções
        </th>
    </tr>
  </thead>
  <tbody>     
    
  <?php 
  if(!empty($series))
  {foreach($series as $serie){ ?>

    <tr>         
        <td>
            <?php echo $serie->Nome;?> 
        </td>
        <td>
            <?php echo $serie->Genero;?> 
        </td>  
        <td>
            <?php echo "R$ ".$serie->Valor;?> 
        </td>                   
        <td>
            <?php echo $serie->Modified;?> 
        </td>  
        <td class="d-flex justify-content-around">
            <a href="Series/Detalhes/<?php echo $serie->id?>"><i class="far fa-eye"></i></a>
            <a href="Administrativo/AlterarSerie/<?php echo $serie->id?>"><i class="fas fa-pen"></i></a>
            <a href="Administrativo/DeletarSerie/<?php echo $serie->id?>"><i class="fas fa-trash"></i></a>
        </td>       
    </tr>
    

    <?php } ?>
        <?php  } else { ?>
            <tr>
                <td>Você ainda não possui nenhuma série cadastrada...</td>
            </tr>
        <?php } ?>
   
  </tbody> 
</table>