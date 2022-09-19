/*
*  Module: DropdownMenu
*
*  create dropdown menu with different behaviour at different screen widths
*
* (Revealing Module Pattern - https://toddmotto.com/mastering-the-module-pattern/)
*/

var DropdownMenu = (function($) {
	
	var settings = {
		$submenus: $('.sub-menu'),
		triggerClass: 'sub-menu__trigger',
		breakpoint: 999
	};
	
	var _addTriggerClass = function() {
		settings.$submenus.prev('a').addClass(settings.triggerClass);
	};
	
	var closeSubMenus = function() {
		settings.$submenus.removeClass('sub-menu--active');
		$('body').removeClass('is-visible-sub-menu');
	};
	
	var toggleSubMenu = function(elm) {
		var subMenu = elm.next('.sub-menu'),
		viewport = $(window).width();

		// Stop 2nd level menus opening in wide view as already open
		if ( subMenu.hasClass('level-2') && viewport > settings.breakpoint ) {
			return; 
		}
		
		// when a top level is open and clicked to close or 2nd level trigger clicked on small screen
		if ( $('.sub-menu.level-1').hasClass('sub-menu--active') ) {
			subMenu.toggleClass('sub-menu--active');
			
			if ( viewport > settings.breakpoint ) {
				$('body').removeClass('is-visible-sub-menu');
			}
		// clicking a top level trigger				
		} else {
			$('.sub-menu').not(subMenu).removeClass('sub-menu--active');
			subMenu.toggleClass('sub-menu--active');
			
			if ( viewport > settings.breakpoint ) {
				$('body').toggleClass('is-visible-sub-menu');
			}	
		}
	}
	
  var _bindEvents = function() {
	  $('.' + settings.triggerClass).on('click', function(e) {
			e.preventDefault();
			e.stopPropagation();
			toggleSubMenu( $(this) )	  				
		});
		
		//$('html').on('click', closeSubMenus);
		
		$(document).on('keyup', function(e) {
		  if (e.keyCode == 27) {
			  closeSubMenus();
		  }
	  });
		
  };  
  
  var init = function() {
	 	_addTriggerClass();
	 	_bindEvents();
  };
  
  return {
    init: init,
    closeSubMenus: closeSubMenus
  };

})(jQuery);