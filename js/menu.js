$(document).ready(main);

var compteur = 1;

function main(){
	$('.menu_bar').click(function(){
		//$('nav').toggle(); 

		if(compteur == 1){
			$('nav').animate({
				left: '0'
			});
			compteur = 0;
		} else {
			$('nav').animate({
				left: '-100%'
			});
			compteur = 1;
		}
	});

	// Montrer et cacher les sous-menus
	$('.sousmenu').click(function(){
		$(this).children('.children').slideToggle();
	});
};