<?php

/**
 * CuradorController short summary.
 *
 * CuradorController description.
 *
 * @version 1.0
 * @author Lumon Development
 */
class CuradorController extends Controller{

	public function actionEspecialista(){
		$datos = array();
		$model = Curador::model();
        $modelCollections = Registros_update::model();
        $modelDepartamento=Department::model();
        $modelTipoColeccion=Tipo_Coleccion::model();
        $modelEntidad=Entidad::model();
        $modelRegistros = Registros::model();
        $criteria=new CDbCriteria();
		$dataRegitros = $model->findAll($criteria);
       
		foreach ($dataRegitros as $registro){
			$link_detail = '<a class="btn btn-success" href="'.Yii::app()->createUrl("Curador/EspecialistaDetail", array("id"=>$registro->id)).'" role="button">Detalle</a>';

            $registros_update= $modelCollections->findByPk($registro->registros_update_id);

            $registros= $modelRegistros->findByPk($registros_update->registros_id);
            $entidad=$modelEntidad->findByPk($registros->Entidad_id);
            $TipoColeccion=$modelTipoColeccion->findByPk($registros->tipo_coleccion_id);

            $department=$modelDepartamento->findByAttributes(array('iso_department_code'=>$registros_update->attributes["departamento_id"]));
			$datos[] = array($registro->subgrupo_taxonomico->grupo_taxonomico->nombre, $registro->subgrupo_taxonomico->nombre,$registro->nombre,$registro->cargo,$entidad->titular,$registros_update->nombre,$TipoColeccion->nombre,$department->department_name,$link_detail);
		}
        
		$this->render('Especialista',array(
				'model' => $model,
				'datos' => json_encode($datos),
		));
	}
	public function actionEspecialistaDetail($id){
		$model = Curador::model();
        $modelCollections = Registros_update::model();
        $modelDepartamento=Department::model();
        $modelTipoColeccion=Tipo_Coleccion::model();
        $modelEntidad=Entidad::model();
        $modelRegistros = Registros::model();
        $modelMunicipio=County::model();

        $curador=$model->findByPk($id);
        $registros_update= $modelCollections->findByPk($curador->registros_update_id);

        $registros= $modelRegistros->findByPk($registros_update->registros_id);
        $entidad=$modelEntidad->findByPk($registros->Entidad_id);
        $TipoColeccion=$modelTipoColeccion->findByPk($registros->tipo_coleccion_id);

        $department=$modelDepartamento->findByAttributes(array('iso_department_code'=>$registros_update->attributes["departamento_id"]));
        $municipio=$modelMunicipio->findByAttributes(array('iso_county_code'=>$registros_update->attributes["ciudad_id"]));

        $datos[] = array($curador->nombre,$curador->cargo,$curador->telefono,$curador->email,$curador->pagina_web, $curador->subgrupo_taxonomico->grupo_taxonomico->nombre, $curador->subgrupo_taxonomico->nombre,$department->department_name,$municipio->county_name,$TipoColeccion->nombre,$registros_update->nombre,$registros->numero_registro,$entidad->titular);


        $this->render('EspecialistaDetail',array(
				'model' => $datos,
				'datos' => json_encode($datos),
		));
    }
}
?>
