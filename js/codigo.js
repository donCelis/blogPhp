$(document).ready(
function(){
	//Animación hover para los iconos del login
	var usuario= $('#usuario');
	var iconUsuario= $('.fa-user');
	var contra= $('#contra');
	var iconContra= $('.fa-lock');

	$(usuario).on({
		focus: function(){
			$(iconUsuario).addClass('verde');
			$(iconUsuario).removeClass('gris'); 
		},
		blur: function(){
			$(iconUsuario).addClass('gris');
			$(iconUsuario).removeClass('verde'); 
		}
	});

	$(contra).on({
		focus: function(){
			$(iconContra).addClass('verde');
			$(iconContra).removeClass('gris'); 
		},
		blur: function(){
			$(iconContra).addClass('gris');
			$(iconContra).removeClass('verde'); 
		}
	});
}
);

