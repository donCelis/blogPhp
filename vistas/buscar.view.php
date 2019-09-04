<?php require_once 'header.php'; ?>

<div class="contenedor">

	<?php if ($mensaje == $positivo) : ?>
		<section class="tituloBusqueda">
			<h2><?php echo $positivo; ?></h2>
			<p><?php echo $cantidadResultados; ?></p>
		</section>
	<?php else: ?>
		<section class="tituloBusqueda">
			<h2><?php echo $negativo; ?></h2>
			<p><?php echo $cantidadResultados; ?></p>
		</section>
		<div class="espacio"></div>
	<?php endif; ?>
	<ul class="listaBusqueda">
		<?php foreach ($resultados as $articulo): ?>
			<li>
			<section class="postPaginaBuscar">
					<a class="imagenS" href="art.php?id=<?php echo $articulo['id']; ?>">
						<img src="<?php echo ruta; ?>/imgs/small/<?php echo $articulo['prevImg']; ?>" alt="Foto">
					</a>
				<article class="artPaginaBuscar">
					<h2><?php echo $articulo['titulo']; ?></h2>
					<p class="fecha"><?php echo resetFecha ($articulo['fecha']); ?></p>
					<div class="linea"></div>
					<a href="art.php?id=<?php echo $articulo['id']; ?>" class="btnBuscar"><strong>Leer más...</strong></a>
				</article>
			</section>
			</li>
		<?php endforeach; ?>
	</ul>
</div>

<?php require_once 'footer.php'; ?>
