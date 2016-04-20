<?php
Yii::app()->theme = 'rnc_theme';
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/speciesSpecial.css');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/main.css');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/jquery.dataTables.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.dataTables.js', CClientScript::POS_HEAD);
?>
<style>
    #container {
        max-width: 1800px;
    }

    #content-front {
        margin-top: 60px;
    }

    .filter_reg {
        width: 70px !important;
    }
</style>
<script type="text/javascript">
    var dataset = <?php echo $datos;?>;

    $(document).ready(function() {

        $('#filters th').each( function () {
            var title = $('#filters thead th').eq( $(this).index() ).text();
            $(this).html( '<input type="text" placeholder="'+title+'" class="filter_reg"/>' );
        } );
    
        var table = $('#registros_table').DataTable(
                        { 
                            "data": dataset,
                            "responsive": true,
                            "language": {
                                "info": "Página _PAGE_ de _PAGES_"
                            },
						 
                        }
                     );

        $("#registros_table thead input").on( 'keyup change', function () {
            table
                .column( $(this).parent().index()+':visible' )
                .search( this.value )
                .draw();
        } );

        $("#content-front").width(($( window ).width())*0.92);

        $( window ).resize(function() {
            $("#content-front").width(($( window ).width())*0.92);
        });
    } );


    $(".botonExcel").click(function(event) {
        $("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
        $("#FormularioExportacion").submit();
    });
</script>
<style>
    #content-front {
        overflow: auto !important;
    }
</style>

<fieldset>
    <h1 style="margin: 0 0 -25px 0; color: #308499 !important;">Lista de curadores</h1>
    <?php $this->widget('bootstrap.widgets.TbButton', array('type'=>'info','label'=>'Descargar lista detallada','url' => Yii::app()->createUrl("reporte/reporteCurador"),'htmlOptions' => array('style' => 'float:right;margin-top:25px;width:250px;')));?>
    <div id="content-front">

        <table id="registros_table" class="display" cellspacing="0">
            <thead>
                <tr>

                    <th>Grupo biológico</th>
                    <th>SubGrupo biológico</th>
                    <th>Nombre</th>
                    <th>Especialidad</th>
                    <th>Titular de la colección</th>
                    <th>Nombre Colección</th>
                    <th>Tipo Colección</th>
                    <th>Departamento</th>
                    <th>Detalle</th>

                </tr>
                <tr id="filters">

                    <th>Grupo biológico</th>
                    <th>SubGrupo biológico</th>
                    <th>Nombre</th>
                    <th>Especialidad</th>
                    <th>Titular de la colección</th>
                    <th>Nombre Colección</th>
                    <th>Tipo Colección</th>
                    <th>Departamento</th>
                    <th>Detalle</th>


                </tr>
            </thead>


        </table>

        <?php //echo $this->renderPartial('_coleccion_table', array('listRegistros'=>$model->listarColecciones($datos),'model' => $model)); ?>
    </div>
</fieldset>
