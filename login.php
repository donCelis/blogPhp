<?php session_start();


	require_once 'admin/config.php';
	require_once 'admin/funciones.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$usuario = limpiarDatos($_POST['usuario']);
		$contra = limpiarDatos($_POST['contra']);

		if ($usuario == $admin['usuarioAd'] and $contra == $admin['contraAd']) {
			$_SESSION['admin'] = $admin['usuarioAd'];
			header('Location: '.ruta.'/admin');
		}
	}
	
	require_once 'vistas/login.view.php';
?>