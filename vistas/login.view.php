<?php require_once 'header.php'; ?>

<div class="contenedor">
	<section class="paginaFormulario">
			<h2 class="tituloFormulario">Inicio de Sesión</h2>
			<form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<div class="contenidoFormulario">
				<input type="text" name="usuario" placeholder="Usuario" id="usuario">
				<i class="fa fa-user iconoFomulario"></i>
			</div>
			<div class="contenidoFormulario">
				<input type="password" name="contra" placeholder="Contraseña" id="contra">
				<i class="fa fa-lock iconoFomulario"></i>
			</div>
			<div class="contenidoFormulario">
				<input class="btnBuscar" type="submit" value="Iniciar Sesión">
			</div>
			</form>
	</section>
</div>

<?php require_once 'footer.php'; ?>