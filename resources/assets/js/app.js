
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//     el: '#app'
// });

setTimeout(function(){ 
	$(".loader").removeClass("on"); 
}, 1000);

$(document).ready(function(){
	$(".menu-user").click(function(){
		$(".menu-user-on").fadeIn().css("display", "flex");
	});

	$("#open-m-mapa").click(function(){
		$(".mapa-modal").fadeIn().css("display", "flex");
		$(".opciones-btns-mapa").fadeIn().css("display", "block");
	});

	$(".cerrar-u-m").click(function(){
		$(".menu-user-on").fadeOut();

	});

	$(".cerrar-modal-mapa").click(function(){
		$(".mapa-modal").fadeOut();
		$("#mapid-my").fadeOut();
		$("#mapid-ubi").fadeOut();
		$(".mapg").fadeOut();
		$(".register-location").fadeOut();
		$(".register-location2").fadeOut();
	});

	
	


	
});


