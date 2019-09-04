<?php require_once 'header.php'; ?>

	<div class="contenedor">
	<?php foreach ($articulos as $articulo): ?>
		<section class="post">
				<a class="imagenS" href="art.php?id=<?php echo $articulo['id']; ?>">
					<img src="<?php echo ruta; ?>/imgs/small/<?php echo $articulo['prevImg']; ?>" alt="Foto">
				</a>
			<article class="artPagina">
				<h2 class="titulo"><a href="art.php?id=<?php echo $articulo['id']; ?>"><?php echo $articulo['titulo']; ?></a></h2>
				<p class="fecha"><?php echo resetFecha ($articulo['fecha']); ?></p>
				<div class="linea"></div>
				<p class="resumen ocultar"><?php echo $articulo['resumen']; ?></p>
				<a href="art.php?id=<?php echo $articulo['id']; ?>" class="btnMas"><strong>Leer más...</strong></a>
			</article>
		</section>
	<?php endforeach; ?>

		<?php require_once 'paginacion.php'; ?>

	</div>

<?php require_once 'footer.php'; ?>
