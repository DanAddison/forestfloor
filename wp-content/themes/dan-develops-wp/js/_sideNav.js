jQuery(function($) {
	$(".menu-button").click(function(event) {
	  event.preventDefault();
	  $(".side-nav").toggleClass("menushow");
	  $(".menu-button").toggleClass("is-active");
	  $("body").toggleClass("is-visible-sidenav");
	});
});