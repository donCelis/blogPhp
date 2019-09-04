<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Fuentes FrameWorks -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<!-- Mis Estilos -->
	<link rel="stylesheet" href="<?php echo ruta; ?>/css/estilos.css">
	<!-- Código -->
	<script src="<?php echo ruta; ?>/js/modernizr-2.8.3.min.js" defer></script>
	<script src="<?php echo ruta; ?>/js/jquery-3.2.1.min.js" defer></script>
	<script src="<?php echo ruta; ?>/js/codigo.min.js" defer></script>
	<title>Blog - Php</title>
</head>
<body>
<header>
	<div class="cabecera">
		<section class="logo">
			<a href="<?php echo ruta; ?>">Blog PHP</a>
		</section>
		<section class="buscador">
			<form name="buscar" class="buscar" action="<?php echo ruta; ?>/buscar.php?=" method="get">
				<input type="text" name="buscar" placeholder="Buscar..."><button type="submit" class="icono fas fa-search"></button>
			</form>
			<nav class="menu">
				<ul>
					<li>
						<a href="<?php echo $redesSociales['facebook']; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
					</li>
					<li>
						<a href="<?php echo $redesSociales['twitter']; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
					</li>
					<li>
						<a href="#"><i class="fas fa-envelope"></i></a>
					</li>
					<li>
						<a href="<?php echo ruta; ?>/admin"><i class="fas fa-user-circle"></i></a>
					</li>
				</ul>
			</nav>
		</section>
	</div>
</header>