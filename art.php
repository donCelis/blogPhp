<?php session_start();
	
	require_once 'admin/config.php';

	require_once 'admin/funciones.php';

	$conexion = conexion($bdConfig);
	//Guardar el id del articulo para podermo llamar
	$idArticulo = idArticulo($_GET['id']);

	//Verificar la conexcion
	if (!$conexion) {
		header('Location: error.php');
	}
	//Si id esta vacio
	if (empty($idArticulo)) {
		header('Location: index.php');
	}

	//llamar los articulos en un array atraves de la función
	$articulos = traerArticuloId ($conexion, $idArticulo);
	
	//Si el resultado de la variable $articulos es false entonces llevar al inicio, en caso tal de que el articulo no exista en la bd
	
	if (!$articulos) {
		header('Location: index.php');
	}
	//print_r($articulos);
	//resetear los articulos
	$articulos = $articulos[0];

	require_once 'vistas/art.view.php';
?>