/*
*  Module: Accordian
*
*  Simple hide/show for content blocks
*
*/

jQuery(document).ready( function($) {
  
	// This class will be added to the expanded item
	var activeItemClass = 'accordion-expanded';
	var accordionItemSelector = '.accordion-section';
	var accordionBody = '.accordion-section__body';
	var toggleSelector = '.accordion-section__head';
	var closeSelector = '.accordion-close';

	$(toggleSelector).on('click', function() {
		$(this)
			.closest(accordionItemSelector) // go up to the accordion item element
			.toggleClass(activeItemClass)
				.siblings()
				.removeClass(activeItemClass)
					.find(accordionBody)
					.stop()
					.slideUp();

		$(this)
			.closest(accordionItemSelector)
				.find(accordionBody)
					.stop()
					.slideToggle();
	});
	
	$(closeSelector).on('click', function(event) {
		event.preventDefault();

		$(this)
			.closest(accordionItemSelector)
			.removeClass(activeItemClass)
				.find(accordionBody)
				.slideUp();

	});
});