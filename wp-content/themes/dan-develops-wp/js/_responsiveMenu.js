/*
*  Module: ResponsiveMenu
*
*  create hide / show menu functionaility 
*
* (Revealing Module Pattern - https://toddmotto.com/mastering-the-module-pattern/)
*/

var ResponsiveMenu = (function($) {
	
	var _toggleMenu = function(elm) {
		elm.toggleClass('is-active');
		$('body').toggleClass('is-visible-menu');
	};
	
	var closeMenu = function() {
		$('body').removeClass('is-visible-menu');
		$('#js-menu-button').removeClass('is-active');
	};	
	
  var _bindEvents = function() {
	  
	  $('#js-menu-button').on('click', function() {
	  	_toggleMenu( $(this) );
		});
		
		$(document).on('keyup', function(e) {
		  if (e.keyCode == 27) {
			  closeMenu();
		  }
	  });		
		
  };  
  
  var init = function() {
	 	_bindEvents();
  };
  
  return {
    init: init,
    closeMenu: closeMenu
  };

})(jQuery);
