<?php
	//Conexión a la base de datos
	function conexion($bdConfig){
		try{
	 		$conexion = new PDO(
	 			'mysql:host=localhost;dbname='.$bdConfig['dataBase'], 
	 			$bdConfig['usuarioDb'], 
	 			$bdConfig['contraDb']
	 		);
	 		return $conexion;
	 	}catch (PDOException $e){
	 		return false;
	 }
	}
	//Limpiar datos para los formularios
	function limpiarDatos ($datos){
		//borrar los izq y der
		$datos = trim($datos);
		//formatear caracteres especiales
		$datos = stripcslashes($datos);
		//limpiar html
		$datos = htmlspecialchars($datos);
		return $datos;
	}
	//Detectar en cual de las paginas estamos ubicados actualmente
	function paginaActual (){
		return isset($_GET['p']) ? (int)$_GET['p'] : 1; 
	}
	//trae los articulos desde la base de datos
	function traerArticulos ($articulosXpagina, $conexion){
		$inicio = (paginaActual() > 1) ? paginaActual() * $articulosXpagina - $articulosXpagina :0;
		$estado = $conexion->prepare (
			"SELECT SQL_CALC_FOUND_ROWS * FROM articulos ORDER BY fecha DESC LIMIT $inicio , $articulosXpagina"
			);
		$estado->execute();
		return $estado->fetchAll();
	}

	//darle un identificador a nuestro articulo
	function idArticulo ($id){
		return (int)limpiarDatos($id);

	}

	//traer los articulos por el identificador (id)
	//query es un llamado para articulos simples
	function traerArticuloId ($conexion, $id){
		$resultado = $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
		$resultado = $resultado->fetchAll();
		return ($resultado) ? $resultado : false;
	}

	//resetear la fecha, strtotime= convierte a una cadena de texto a fecha
	function resetFecha ($fecha){
		$datosFecha = strtotime($fecha);
		$meses = [
			'Enero', 
			'Febrero', 
			'Marzo', 
			'Abril', 
			'Mayo', 
			'Junio', 
			'Julio', 
			'Agosto', 
			'Septiembre', 
			'Octubre', 
			'Noviembre', 
			'Diciembre'
		];

		$dia = date('d', $datosFecha);
		$mes = date('m', $datosFecha) - 1;
		$anio = date('Y', $datosFecha);

		$fecha = "$dia de ".$meses[$mes]." del $anio";
		return $fecha;	
	}
	//Obtener la cantidad de paginas que tenemos
	function cantidadPaginas ($conexion, $articulosXpagina){
		//llamar las filas que contiene la bd
		$totalPost = $conexion->prepare('SELECT FOUND_ROWS() as total');
		$totalPost->execute();
		$totalPost = $totalPost->fetch()['total'];

		//Cuantas paginas abrá en la paginación
		$numeroPaginas = ceil($totalPost / $articulosXpagina);
		return $numeroPaginas;
	}

	function comprobarSesion(){
		if (!isset($_SESSION['admin'])) {
			header('Location:'.ruta.'/login.php');
		}
	}
?>