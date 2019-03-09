<div class="container FundoBranco mt-5">
    <h1 class="text-center"><?=$titulo?></h1>
    <div class="container mb-5">
        <?=$tabela?>
    </div>
</div>

<script>    

    $(document).ready(function () {

        $('#dtBasicExample').DataTable({            
                "bJQueryUI": true,
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ registros",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                    "sInfoFiltered": "",
                    "sInfoPostFix":  "",
                    "sSearch":       "Buscar:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Seguinte",
                        "sLast":     "Último"
                    }
                }
            });
        $('.dataTables_length').addClass('bs-select');
        
    });

</script>
