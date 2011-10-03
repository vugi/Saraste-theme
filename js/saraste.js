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
    jQuery("#fb").delay(1000).animate({bottom:'-200px'}, "slow");
    jQuery("#fb").hover(
      function () {
        jQuery(this).animate({bottom:'0px',width:'320px'}, "slow");
      },
      function () {
        jQuery(this).delay(1000).animate({bottom:'-200px',width:'260px'}, "slow")
      }
    );
    jQuery("header").hover(function(){
        jQuery("#counter").stop(true, true).toggle("slow");
    })
    var startDate = new Date(2012,7,30);
    var now = new Date();
    var diff = Math.ceil((startDate - now) / 1000 / 60 / 60 / 24 );
    jQuery("#count").html(diff)

});