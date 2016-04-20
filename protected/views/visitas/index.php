<?php
/* @var $this EntidadController */
/* @var $dataProvider CActiveDataProvider */

Yii::app()->theme = 'rnc_theme_panel';
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/speciesSpecial.css');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/main.css');

/*
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#catalogoespecies-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
*/

?>

<script type="text/javascript">

		
	function buscarEntidades(grid){
		$.fn.yiiGridView.update(grid, {data: $('#busquedaEntidad').serialize()});
	}
</script>

<div id="header-front">Visitas</div>

<div id="content-front">
	<?php 
	$this->widget('bootstrap.widgets.TbButtonGroup', array(
			'buttons'=>array(
					array('label'=>'Nueva Visita', 'icon'=>'icon-plus', 'url'=>array('create')),
					array('label'=>'Inicio', 'icon'=>'icon-home', 'url'=>array('admin/panel')),
			),
	));
	?>
	  <i class="icon-print printR" onclick="print();"></i>
	  <a href="<?=Yii::app()->createUrl("visitas/reporte", array());?>"><i class="icon-download printR"></i></a>
	  <div class="tab-content">
	       <?php echo $this->renderPartial('_visitas_table', array('listVisitas'=>$model->search(),'model' => $model)); ?>
	  </div>
	</div>

</div>