<?php 
	$cantidadPaginas =  cantidadPaginas ($conexion, $blogConfig['postXpagina']); 
?>

<section class="paginacion">
	<ul>
	<?php if (paginaActual() === 1): ?>

		<li class="disabled">
			<i class="fa fa-chevron-left"></i>
		</li>

	<?php else: ?>

		<li class="">
			<a href="index.php?p=<?php echo paginaActual() - 1; ?>">
				<i class="fa fa-chevron-left""></i>
			</a>
		</li>

	<?php endif; ?>

	<?php for($i=1; $i <= $cantidadPaginas; $i++): ?>

		<?php if (paginaActual() === $i): ?>

			<li class="active">
				<?php echo $i; ?>
			</li>

		<?php else: ?>

		<li>
			<a class="" href="index.php?p=<?php echo $i; ?>"><?php echo $i; ?></a>
		</li>

	<?php endif; ?>
	<?php endfor; ?>

	<?php if (paginaActual() == $cantidadPaginas) : ?>

		<li class="disabled">
			<i class="fa fa-chevron-right"></i>
		</li>

	<?php else: ?>

		<li>
			<a href="index.php?p=<?php echo paginaActual() + 1; ?>">
				<i class="fa fa-chevron-right"></i>
			</a>
		</li>

	<?php endif; ?>

	</ul>
</section>