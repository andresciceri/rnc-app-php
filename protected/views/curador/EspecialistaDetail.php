<?php
$this->pageTitle=Yii::app()->name;
Yii::app()->theme = 'rnc_theme';
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/speciesSpecial.css');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/main.css');
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<div class="col-lg-10">
    <div class="area-contenido">
        <div id="content">
            <div id="header-front">
                DETALLE DE CURADOR REGISTRADO
                <i class="icon-print printR" aria-hidden="true" onclick="print();"></i>
            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseOne" class="collapsed">DATOS DE CURADOR
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse  in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <?php 
                                $context=$model;
                                $context2=$context[0];
                                ?>
                                <table align="center" class="display" id="yw0">
                                    <tbody>
                                        <tr class="odd">
                                            <th style="color: #308499;">Nombre(s)</th>
                                            <td><?php 
                                                echo $context2[0];
                                                ?></td>
                                        </tr>
                                        <tr class="even">
                                            <th style="color: #308499;">Especialidad</th>
                                            <td><?php 
                                                echo $context2[1];
                                                ?></td>
                                        </tr>
                                        <tr class="odd">
                                            <th style="color: #308499;">Teléfono(s)</th>
                                            <td><?php 
                                                echo $context2[2];
                                                ?></td>
                                        </tr>
                                        <tr class="even">
                                            <th style="color: #308499;">Correo electrónico</th>
                                            <td><?php 
                                                echo $context2[3];
                                                ?></td>
                                        </tr>
                                        <tr class="odd">
                                            <th style="color: #308499;">Perfil en linea</th>
                                            <td><?php 
                                                echo $context2[4];
                                                ?></td>
                                        </tr>
                                        <tr class="even">
                                            <th style="color: #308499;">Grupo biológico</th>
                                            <td><?php 
                                                echo $context2[5];
                                                ?></td>
                                        </tr>
                                        <tr class="odd">
                                            <th style="color: #308499;">Subgrupo biológico</th>
                                            <td><?php 
                                                echo $context2[6];
                                                ?></td>
                                        </tr>
                                        <tr class="even">
                                            <th style="color: #308499;">Departamento</th>
                                            <td><?php 
                                                echo $context2[7];
                                                ?></td>
                                        </tr>
                                        <tr class="even">
                                            <th style="color: #308499;">Municipio</th>
                                            <td><?php 
                                                echo $context2[8];
                                                ?></td>
                                        </tr>
                                        <tr class="even">
                                            <th style="color: #308499;">Tipo de colección</th>
                                            <td><?php 
                                                echo $context2[9];
                                                ?></td>
                                        </tr>
                                        <tr class="even">
                                            <th style="color: #308499;">Nombre de la colección</th>
                                            <td><?php 
                                                echo $context2[10];
                                                ?></td>
                                        </tr>
                                        <tr class="even">
                                            <th style="color: #308499;">Número de registro </th>
                                            <td><?php 
                                                echo $context2[11];
                                                ?></td>
                                        </tr>
                                        <tr class="even">
                                            <th style="color: #308499;">Entidad</th>
                                            <td><?php 
                                                echo $context2[12];
                                                ?></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
