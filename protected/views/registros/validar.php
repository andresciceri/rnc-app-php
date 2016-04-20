<?php
Yii::app()->theme = 'rnc_theme_panel';
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/speciesSpecial.css');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/main.css');
$userRole  = Yii::app()->user->getState("roles");
?>

<div id="header-front">Validar registro: <?php echo $model->registros_update->nombre; ?></div>

<div id="content-front">
<?php 
	if($userRole == "admin"){
		$this->widget('bootstrap.widgets.TbButtonGroup', array(
				'buttons'=>array(
						array('label'=>'Listar registros', 'icon'=>'icon-list', 'url'=>array('index')),
						array('label'=>'Inicio', 'icon'=>'icon-home', 'url'=>array('admin/panel')),
				),
		));
	}
	echo $this->renderPartial('_form', array('model'=>$model,'tamano_coleccion' => $tamano_coleccion, 'tipos_en_coleccion' => $tipos_en_coleccion, 'composicion_general' => $composicion_general, 'urls_registros' => $urls_registros, 'curador' => $curador)); 
?>
</div>
