<?php session_start();

	require_once 'config.php';
	require_once 'funciones.php';

	$conexion = conexion($bdConfig);

	if (!$conexion) {
		header('Location: ../error.php');
	}

	//Comprobar sesión
	comprobarSesion();

	$articulos = traerArticulos($blogConfig['postXpagina'], $conexion);
	
	require_once '../vistas/admin_index.view.php';
?>