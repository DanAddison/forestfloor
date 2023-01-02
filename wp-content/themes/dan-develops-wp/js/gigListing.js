/*
*  Module: Gig Listing accordion functionality
*
*/

jQuery(document).ready( function($) {
  
	// This class will be added to the expanded item
	var activeItemClass = 'item-expanded';
	var listingItemSelector = '.gig-listing__item';
	var listingBody = '.gig-listing__item-content';
	var toggleSelector = '.gig-listing__item-header';
	var closeSelector = '.gig-listing__item-close';

	$(toggleSelector).on('click', function() {
		
		$(this)
			.closest(listingItemSelector) // go up to the accordion item element
			.toggleClass(activeItemClass)
				.siblings()
				.removeClass(activeItemClass)
					.find(listingBody)
					.stop()
					.slideUp();

		$(this)
			.closest(listingItemSelector)
				.find(listingBody)
					.stop()
					.slideToggle();

	});
	
	$(closeSelector).on('click', function(event) {
		event.preventDefault();

		console.log('clickkekekdd');
		$(this)
			.closest(listingItemSelector)
			.removeClass(activeItemClass)
				.find(listingBody)
				.slideUp();

	});
});