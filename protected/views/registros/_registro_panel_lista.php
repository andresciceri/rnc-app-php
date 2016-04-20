<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
		'type'=>'striped bordered condensed',
		'id'=>'entidad-sol-grid',
		'dataProvider'=>$listRegistros,
		'ajaxUrl'=>'',
		'columns'=>array(
			'numero_registro',
			array('name' => 'registros_update.nombre','value' => 'CHtml::encode(isset($data->registros_update[0]->nombre) ? $data->registros_update[0]->nombre : "" )'),
			'fecha_dil',
			array('name' => 'registros_update.fecha_act','value' => 'CHtml::encode(isset($data->registros_update[0]->fecha_act) ? $data->registros_update[0]->fecha_act : "" )'),
			//'fecha_prox',
			array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
				'template'=>'{val}',
				'buttons'=>array
				(
					'val' => array
					(
						'label'=>'Actualizar',
						'url'=>'"#".$data->id',
						'options'=>array(
								'class'=>'btn btn-success btn-small',
								'onclick' => 'validarActualizar($(this).attr("href"))'
								),
					)
				),
				'htmlOptions'=>array('style'=>'width: 50px'),
			),/*
			array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
				'template'=>'{val}',
				'buttons'=>array
				(
						'val' => array
						(
								'label'=>'Ver',
								'url'=>'Yii::app()->createUrl("registros/view", array("id"=>$data->id))',
								'options'=>array(
										'class'=>'btn btn-success btn-small',
								),
						)
				),
				'htmlOptions'=>array('style'=>'width: 50px'),
			)*/
		),
)); ?>
