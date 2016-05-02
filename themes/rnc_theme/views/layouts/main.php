<!DOCTYPE html>
<html>
<head>
	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo Yii::app()->charset ?>" />
	<meta name="language" content="es" />
	<meta name="keywords" content="Sistema de registro nacional de colecciones biologicas"/>
	<meta name="description" content="Sistema de registro nacional de colecciones biologicas."/>
	<meta name="author" content="Instituto Alexander Von Humboldt" />
	<meta name="copyright" content="Copyright 2012-2022 por el Instituto Alexander Von Humboldt" />
	<meta name="company" content="Instituto Alexander Von Humboldt" />
	<link rel="shortcut icon" href="<?= Yii::app()->theme->baseUrl; ?>/css/images/favicon.ico" />
	<link rel="apple-touch-icon" href="http://www.sibcolombia.net/catalogo/admin/apple.png" />
	
	<!--[if lt IE 8]>
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.jscrollpane.css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-timepicker.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-wysihtml5-0.0.2.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/speciesGlobal.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/speciesSpecial.css" />
	<!-- Others for harmonization-->
	<link rel="stylesheet" type="text/css" href="http://rncwp.lumon.com.co/wp-content/themes/klaus/style.css" />
	<link rel="stylesheet" type="text/css" href="http://rncwp.lumon.com.co/wp-content/themes/klaus/_include/css/bootstrap.min.css" />
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	
	<!-- Stylesheet for jquery-fineuploader library -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery-fineuploader/fineuploader-3.6.3.css" />

	<?php
		Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/core.js', CClientScript::POS_HEAD);
		// the mousewheel plugin
		Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.mousewheel.js', CClientScript::POS_HEAD);
		// the jScrollPane script
		Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.jscrollpane.min.js', CClientScript::POS_HEAD);
		Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/bootstrap-timepicker.min.js', CClientScript::POS_HEAD);
		Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/fancybox/jquery.fancybox.pack.js', CClientScript::POS_HEAD);
		Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/wysihtml5-0.3.0_rc2.min.js', CClientScript::POS_HEAD);
		Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/bootstrap-wysihtml5-0.0.2.min.js', CClientScript::POS_HEAD);
	?>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-1418857-10']);
		  _gaq.push(['_setDomainName', 'sibcolombia.net']);
		  _gaq.push(['_setAllowLinker', true]);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
	</script>
	
	
	
</head>

<body>
		 	
	<header class="sib">
		<a style="margin-top: 10px; margin-left: 70px;" class="logo" href= "http://rnc.humboldt.org.co/wp" title="Registro Único Nacional de Colecciones Biológicas"><img  src="<?=Yii::app()->theme->baseUrl?>/images/logo_rnc.png"></a>
		<!--h1><?php //echo CHtml::encode(Yii::app()->name);  ?></h1-->
			<nav>
				<div class='menu_conteneur_menu'>
					<div class='menu_pagemenu'>
						<a href='http://rnc.humboldt.org.co/wp/acerca-de/' target='_blank'>Acerca de</a>
					</div>
					<div class='menu_pagemenu'>
						<a href='http://rnc.humboldt.org.co/wp/colecciones/' target='_blank'>Colecciones</a>
					</div>
					<div class='menu_pagemenu'>
						<a href='http://rnc.humboldt.org.co/admin/index.php/Curador/Especialista' target='_blank'>Directorio</a>
					</div>
					<div class='menu_rubrique'>
						<a href='#'>Iniciar Sesion</a>
							<div class='menu_sousmenu'>
							<div class='menu_pagesousmenu'>
								<a style="font-size:1em; color:white; background-color:black;" href='http://rnc.humboldt.org.co/admin/index.php/admin/login' target='_blank'>Ingresar</a>
							</div>
							<div class='menu_pagesousmenu'>
								<a style="font-size:1em; color:white; background-color:black;" href='http://rnc.humboldt.org.co/admin/index.php/entidad/solicitud' target='_blank'>Solicitar Usuario</a>
							</div>
					</div>
				</div>
				<div class='menu_pagemenu'>
					<a href='http://rnc.humboldt.org.co/admin/index.php/pqrs/create' target='_blank'>Contacto</a>
				</div>
				</div>
			</nav>
			
			<?php 
			$this->widget('bootstrap.widgets.TbMenu', array(
				'type' => 'pills',
				'stacked'=>false,
				'items' => array(
                    //array('label' => 'Preguntas frecuentes', 'url' => array('site/preguntas')),
                    //array('label' => 'Colecciones biológicas', 'url' => array('registros/colecciones')),
                    //array('label' => 'Directorio de Especialistas', 'url' => array('Curador/Especialista')),
                    //array('label' => 'Ley 1753 de 2015', 'url' => array('site/ley')),
                    //array('label' => 'Contáctenos', 'url' => array('pqrs/create')),
                    //array('label' => 'Registro o Actualización', 'url' => array('site/instructivo')),
                    //array('label' => 'Solicitar usuario', 'url' => array('entidad/solicitud')),
					//array('label' => 'Iniciar sesion', 'url' => array('admin/index')),
					//array('label' => 'Contáctenos', 'url' => ('http://rnc.humboldt.lumon.com.co/index.php/pqrs/create')),
				)
			));
			?>
	</header> <!-- Fin header -->
	
		<div id="container">
			<div id="content">
					
					<?=$content;?>
			</div>
		</div>

	<footer>
		 <!--<div class="navbar navbar-inverse navbar-fixed-bottom">
            <div class="navbar-collapse collapse" id="footer-body">
                <ul class="nav navbar-nav">
					<li><a href="http://rncwp.lumon.com.co/">Inicio</a></li>
					<li><a href="http://rncwp.lumon.com.co/?p=1206">Acerca del RNC</a></li>
					<li><a href="http://rncwp.lumon.com.co/?p=1124">Preguntas Frecuentes</a></li>
					<li><a href="http://rncwp.lumon.com.co/colecciones/" target="_blank">Colecciones Biológicas</a></li>
					<li><a href="http://rnc.humboldt.lumon.com.co/index.php/Curador/Especialista" target="_blank">Directorio de Especialistas</a></li>
                </ul>
            </div>-->
          	<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#footer-body">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
    </div>
	<div class="row">
		<div class="">
			<div class="img-footer">
			<div class="">
				<ul>
					<p style="font-size: 1em; margin-top: 30px;" > Coordinan:</p>
					<li> <a href="http://www.minambiente.gov.co/" target="_blank" title="Ministerio de Medio Ambiente"><img alt="Logo MinAmbiente" src="http://rncwp.lumon.com.co/wp-content/uploads/2016/04/Minambiente1.png"></a></li>
					<li> <a href="http://www.humboldt.org.co" target="_blank" title="Instituto Alexander von Humboldt"><img alt="Logo Humboldt" src="http://rncwp.lumon.com.co/wp-content/uploads/2016/03/Humbolt1.png"></a></li>
					<li class="lineal"></li>
				</ul>	
				<ul>
					<p style="font-size: 1em;"> Apoyan:</p>
					<li> <a href="http://www.sibcolombia.net" target="_blank" title="SIB Colombia"><img alt="Logo SIB Colombia" src="http://rncwp.lumon.com.co/wp-content/uploads/2016/03/SIB.png"></a></li>
				</ul>
					<p style="font-size: 1em; margin-bottom: 30px;" class="p-footer">Instituto de Investigación de Recursos Biológicos Alexander Von Humboldt · Ministerio de Medio Ambiente de Colombia · SIB Colombia</p>
			</div>
			</div>
			<div class="img-footer img_cc">
				<a rel="license" href="http://rnc.humboldt.org.co/wp/licencia-creative-commons/"  target="_blank">
					<img class="img-cc" alt="Licencia Creative Commons" style="border-width:0;" src="http://rncwp.lumon.com.co/wp-content/uploads/2016/03/Licencia_CC.png" /></a><br />
				</div>
		</div>
	</div>

	</footer>
</body>
</html>