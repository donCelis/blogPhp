<?php 
	//Constante para saber a donde estan los archivos desde la ruta principal
	define('ruta', 'http://localhost/13blog');
	#define('ruta', '');

	//almacenar los datos del usuario y la base de datos
	$bdConfig = array(
			'dataBase' => 'blog',
			'usuarioDb' => 'root',
			'contraDb' => 'root'
		);

	//configuracion del blog
	$blogConfig = array(
			'postXpagina' => '8',
			'carpetaImg' => 'imgs/'
		);

	//guardando los datos del admin
	$admin = array(
			'usuarioAd' => 'dacelis0',
			'contraAd' => 'holamundo'
		);

	//Redes sociales
	$redesSociales = array(
		'facebook' => 'http://facebook.com/dacelis0',
		'twitter' => 'http://www.twitter.com/dacelis0'
		);
?>