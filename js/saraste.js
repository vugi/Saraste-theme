function slide() {
	jQuery('.kwicks').kwicks({
		max : 455
	});
	jQuery('.slide').bind({
		mouseenter: function() {
			var slide = jQuery(this);
			var opacity = jQuery('.opacity', slide);
			var container = jQuery('.entry-container', slide);
			opacity.stop(true, true).fadeOut(500);
			container.stop(true, true).delay(500).fadeIn(500);
		},
		mouseleave: function() {
			var slide = jQuery(this);
			var opacity = jQuery('.opacity', slide);
			var container = jQuery('.entry-container', slide);
			opacity.stop(true, true).fadeIn(500);
			container.stop(true, true).hide(500);
		}
	});
}

jQuery().ready(function() {
	slide();
});