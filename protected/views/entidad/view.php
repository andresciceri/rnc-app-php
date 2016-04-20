<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
Yii::app()->theme = 'rnc_theme_panel';
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/speciesSpecial.css');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/main.css');
$userRole  = Yii::app()->user->getState("roles");
$this->breadcrumbs=array(
	'Catalogo Users'=>array('index'),
	$model->titular,
);

?>

<div id="header-front">Detalle de la entidad: <?php echo $model->titular; ?></div>

<div id="content-front">
<?php
if($userRole == "admin"){
	$this->widget('bootstrap.widgets.TbButtonGroup', array(
		'buttons'=>array(
				array('label'=>'Listar entidades', 'icon'=>'icon-list', 'url'=>array('index')),
		),
	));
}else{
	$this->widget('bootstrap.widgets.TbButtonGroup', array(
		'buttons'=>array(
				array('label'=>'Editar entidad', 'icon'=>'icon-list', 'url'=>array('entidad/update/'.$model->id)),
		),
	));
}
?>
<i class="icon-print printR" onclick="print();"></i>
<div style="margin-top: 20px">
<?php 
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
			'name' => 'tipo_titular',
			'type'	=> 'raw',
			'value' => CHtml::encode(($model->tipo_titular == 1) ? "Persona Natural" : (($model->tipo_titular == 2) ? "Persona Jurídica" : "No Asignado"))
		),
		'titular',
		'nit',
		array(
			'name' => 'representante_legal',
			'type'	=> 'raw',
			'value' => CHtml::encode(($model->representante_legal == "-") ? "No Asignado" : $model->representante_legal)
		),
		array(
			'name' => 'tipo_id_rep',
			'type'	=> 'raw',
			'value' => CHtml::encode(($model->tipo_id_rep == 1) ? "Cédula de Ciudadanía" : (($model->tipo_id_rep == 2) ? "Cédula de Extranjería" : "No Asignado"))
		),
		array(
			'name' => 'representante_id',
			'type'	=> 'raw',
			'value' => CHtml::encode(($model->representante_id == 0) ? "No Asignado" : $model->representante_id)
		),
		'county.department.department_name',
		array(
			'name' => 'ciudad_id',
			'type'	=> 'raw',
			'value' => CHtml::encode(isset($model->county->county_name) ? $model->county->county_name : "No Asignado")
		),
		'telefono',
		'direccion',
		'email',
		array(
			'name' => 'estado',
			'type'	=> 'raw',
			'value' => CHtml::encode(($model->estado == 1) ? "En Espera" : (($model->estado == 2) ? "Aprobado" : "No Aprobado"))
		),
		array(
			'label' => 'Usuario',
			'type'	=> 'raw',
			'value' => CHtml::encode(isset($model->usuario->username) ? $model->usuario->username : "No Asignado")
		),
		'tipo_institucion.nombre'
	),
)); ?>
<br>
<fieldset>
		<legend class="form_legend">Datos del Solicitante</legend>
		
		<?php 
			$this->widget('zii.widgets.CDetailView', array(
				'data'=>$model->dilegenciadores,
				'attributes'=>array(
					array(
						'name' => 'nombre',
						'type'	=> 'raw',
						'value' => $model->dilegenciadores->nombre
					),
					array(
						'name' => 'dependencia',
						'type'	=> 'raw',
						'value' => $model->dilegenciadores->dependencia
					),
					array(
						'name' => 'cargo',
						'type'	=> 'raw',
						'value' => $model->dilegenciadores->cargo
					),
					array(
						'name' => 'telefono',
						'type'	=> 'raw',
						'value' => $model->dilegenciadores->telefono
					),
					array(
						'name' => 'email',
						'type'	=> 'raw',
						'value' => $model->dilegenciadores->email
					),
				),
			)); 
		?>
</fieldset>
</div>
</div>