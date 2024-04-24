	<?php
	$partesRut = explode("-",$_SESSION["sii"]["usuario_rut"]);
	$verificarCaducidad = verificarCaducidad($partesRut[0],$partesRut[1]);

	if($verificarCaducidad["Respuesta"]): ?>
		<div class="alert alert-success" role="alert" style="text-align: center;">
			<i class="fa fa-check fa-3x"></i><br>
			Estimad@ <strong><?php echo $_SESSION["sii"]["usuario_nombre"]." ".$_SESSION["sii"]["usuario_apellido_paterno"]." ".$_SESSION["sii"]["usuario_apellido_materno"] ?></strong>, su certificado se encuentra vigente y caduca el día <strong><?php echo date("d-m-Y H:i:s", $verificarCaducidad["Mensaje"]["validTo_time_t"]) ?></strong>
			<p class="text-danger">Recuerde renovar su certificado digital antes de la fecha de caducidad para evitar problemas de interacción con S.I.I.</p>
		</div>
		<?php else: ?>
			<div class="alert alert-danger" role="alert" style="text-align: center;">
				<i class="fa fa-ban fa-3x"></i><br>
				Estimad@ <strong><?php echo $_SESSION["sii"]["usuario_nombre"]." ".$_SESSION["sii"]["usuario_apellido_paterno"]." ".$_SESSION["sii"]["usuario_apellido_materno"] ?></strong>, su certificado se encuentra caducado desde el día <strong><?php echo date("d-m-Y H:i:s", $verificarCaducidad["Mensaje"]["validTo_time_t"]) ?></strong>
			</div>
		<?php endif ?>
<section>
	<div class="notfoundpanel" style="width: 100%">
		<center><h1 style="font-size: 8.5em;">MINISTERIO PÚBLICO</h1></center>
	</div>
</section>