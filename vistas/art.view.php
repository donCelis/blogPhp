<?php require_once 'header.php'; ?>

	<div class="contenedor">
		<section class="post postFull">
			<article>
				<h2 class="titulo"><?php echo $articulos['titulo']; ?></h2>
				<div class="linea"></div>
				<p class="fecha"><?php echo resetFecha ($articulos['fecha']); ?></p>
				<div class="imagenF">
					<img src="<?php echo ruta; ?>/imgs/full/<?php echo $articulos['img']; ?>" alt="<?php echo $articulos['titulo']; ?>">
				</div>
				<p class="resumen"><?php echo nl2br($articulos['texto']); ?></p>
			</article>
		</section>
	</div>

<?php require_once 'footer.php'; ?>
