<?php require_once '../vistas/header.php'; ?>

	<div class="contenedor">
	<h2 class="tituloFormulario">Panel de control</h2>
	<section class="adminArt">	
		<a href="nuevo.php" class="btn"><i class="fa fa-file-text-o"></i>Nuevo Artículo</a>
		<a href="cerrar.php" class="btn"><i class="fa fa-times-circle-o"></i>Cerrar Sesión</a>
	</section>

	<?php foreach ($articulos as $articulo): ?>
		<section class="postAdmin">
				<h2 class="tituloAdmin">
					<i class="fa fa-file-text-o iconoPost"></i><strong><?php echo $articulo['titulo']; ?></strong>
				</h2>
				<section class="iconosAdmin">
					<a class="btn" href="editar.php?id=<?php echo $articulo['id']; ?>"><i class="fa fa-pencil-square-o"></i></a>
					<a class="btn" href="../art.php?id=<?php echo $articulo['id']; ?>"><i class="fa fa-eye"></i></a>
					<a class="btn" href="borrar.php?id=<?php echo $articulo['id']; ?>"><i class="fa fa-trash-o"></i></a>
				</section>
		</section>
	<?php endforeach; ?>

		<?php require_once 'paginacion.php'; ?>

	</div>

<?php require_once '../vistas/footer.php'; ?>
