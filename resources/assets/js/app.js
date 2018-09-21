
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

setTimeout(function(){ 
	$(".loader").removeClass("on"); 
}, 1000);

$(document).ready(function(){
	$(".menu-user").click(function(){
		$(".menu-user-on").fadeIn().css("display", "flex");
	});
});

$(document).ready(function(){
	$(".cerrar-u-m").click(function(){
		$(".menu-user-on").fadeOut();
	});
});

var a = 0;
function myFunction() {
  a = a + 1;
  document.getElementById("demo").textContent = a;
}



// $(function() {

//   $(".numbers-row").append('<div class="inc button">+</div><div class="dec button">-</div>');

//   $(".button").on("click", function() {

//     var $button = $(this);
//     var oldValue = $button.parent().find("input").val();
//     var oldValue2 = $button.parent().find("input").val();



//     if ($button.text() == "+") {
//   	  var newVal = parseFloat(oldValue) + parseFloat(oldValue2);
//   	} else {
// 	   // Don't allow decrementing below zero
//       if (oldValue > 0) {
//         var newVal = parseFloat(oldValue) - parseFloat(oldValue);
// 	    } else {
//         newVal = 0;
//       }
// 	  }

//     $button.parent().find("input").val(newVal);

//   });

// });
