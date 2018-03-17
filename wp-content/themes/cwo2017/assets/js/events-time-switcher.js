var eventsTimeSwitcher = (function(){
	/** Public **/
	function setup(){
		// Options
		var fragementLinks = $('.fragment_link');
		var fragmentBar    = $('#fragment_bar');
		var events         = $('#page-events_animation_container');
		var filters        = $('.page-events-filter');

		// Click Listener
		fragementLinks.on('click',function(){
			var currentLink = $(this);
			if(!currentLink.hasClass('active')){
				//Click Options
				var classToAdd = currentLink.data('fragment-class');

				// Class Management for Links
				fragementLinks.removeClass('active');
				currentLink.addClass('active');

				// Class Management for Fragment Bar
				fragmentBar.removeAttr('class');
				fragmentBar.addClass(classToAdd);

				// Manage Event Filter
				events.animate({opacity:0},device.transitions.short,function(){
					filters.addClass('hidden');
					$('.page-events-filter[data-filter="'+classToAdd+'"]').removeClass('hidden');
					events.animate({opacity:1},device.transitions.short);
				});
			}
		})
	}

	return {
		setup : setup
	}
})();