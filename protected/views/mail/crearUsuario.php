<html>
	<head>
   	
   </head>
   <body>
  	 <table width = "650" border = "0" cellspacing="0" cellpadding="0">
   			<style>
		   		th{
		   			text-align: justify;
		   		}
		   	</style>
   			<tr style = "background-color: rgba(17, 131, 85, 0.75)">
				<td style="color: #ffffff;padding: 10px;height: 20px">
					Mensaje Plataforma RNC
				</td>
			</tr>
			<tr>
				<td style="padding: 30px;border-style: solid;border-color: #eeeeee">
					<p>Cordial Saludo,</p>
					<p>Se ha creado su usuario con la siguiente información:</p>
					
					<?php 
						$this->widget('zii.widgets.CDetailView', array(
								'data'=>$data,
								'attributes'=>array(
										array(
												'name' => 'Usuario',
												'type'	=> 'raw',
												'value' => CHtml::encode($user != "" ? $user : "No Asignado")
										),
										array(
												'name' => 'Contrase&ntilde;a',
												'type'	=> 'raw',
												'value' => CHtml::encode($pass != "" ? $pass : "No Asignado")
										),
										'email',
										'role'
								)
						));
					?>
				</td>
			</tr>
   		</table>
   </body>
	   	
</html>