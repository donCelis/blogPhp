<?php session_start();
	//llamando el archivo config
	require_once 'admin/config.php';

	//llamar las funciones
	require_once 'admin/funciones.php';

	$conexion = conexion($bdConfig);

	if (!$conexion) {
		# code...
		header('Location: error.php');
	}

	//echo paginaActual();

	$articulos = traerArticulos($blogConfig['postXpagina'], $conexion);
	//print_r($articulos);

	if (!$articulos) {
		# code...
		header('Location: error.php');
	}

	

	require_once 'vistas/index.view.php';
 ?>