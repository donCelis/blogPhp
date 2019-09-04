<?php session_start();
	require_once 'admin/config.php';

	require_once 'vistas/header.php';
 ?>

 <div class="contenedor">
 	<section class="postError">
 		<article>
 			<img src="<?php echo ruta; ?>/imgs/cara.png" alt="Cara">
			<h2 class="tituloError">ay! error #404</h2>
 		</article>
				<h2>Sospechamos de las siguientes razones: </h2>
				<ul class="listaError">
					<li>La página que estás buscando actualmente ha sido movida o no existe.</li>
					<li>Asegúrate de que la dirección esté bien escrita.</li>
				</ul>
		</section>
 </div>

 <?php require_once 'vistas/footer.php'; ?>
