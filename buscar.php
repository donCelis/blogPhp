<?php session_start();

	require_once 'admin/config.php';
	require_once 'admin/funciones.php';

	$conexion = conexion($bdConfig);
	if (!$conexion) {
		header('Location: error.php');
	}

	if ($_SERVER['REQUEST_METHOD'] == 'GET' and !empty($_GET['buscar'])) {
		$buscar = limpiarDatos($_GET['buscar']);

		$estado = $conexion->prepare("
			SELECT * FROM articulos WHERE titulo LIKE :buscar or texto LIKE :buscar or fecha LIKE :buscar ORDER BY fecha DESC
			");

		$estado->execute(array(':buscar' => "%$buscar%"));
		$resultados = $estado->fetchAll();

		$negativo = 'No se encontraron resultados para: '.$buscar;
		$positivo = 'Resultados de la busqueda: '.$buscar;

		if (count($resultados) === 1) {
			$cantidadResultados = 'Se encontró '. count($resultados) .' resultado para tu busqueda';
		} else {
			$cantidadResultados = 'Se encontraron '.count($resultados).' resultados para tu busqueda';
		}

		if (empty($resultados)) {
			$mensaje = $negativo;
		}else{
			$mensaje = $positivo;
		}
	}else{
		header('Location:'. ruta . '/index.php');
	}

	require_once 'vistas/buscar.view.php';
 ?>