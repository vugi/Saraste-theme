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
        jQuery(this).stop(true, true).animate({bottom:'0px',width:'320px'}, "slow");
      },
      function () {
        jQuery(this).stop(true, true).delay(1000).animate({bottom:'-200px',width:'260px'}, "slow")
      }
    );
    jQuery("header").hover(function(){
        jQuery("#counter").stop(true, true).toggle("slow");
    })
    var startDate = new Date(2012,7,30);
    var now = new Date();
    var diff = Math.ceil((startDate - now) / 1000 / 60 / 60 / 24 );
    jQuery("#count").html(diff)
		
		jQuery("input:radio[name=status]").change(function(){
			if(jQuery('input:radio[name=status]:checked').val() == 1){
				jQuery(".loytyi, .ei_loytynyt").slideDown()
			} else if(jQuery('input:radio[name=status]:checked').val() == 0) {
				jQuery(".loytyi").slideUp()
				jQuery(".ei_loytynyt").slideDown()
			}	 else {
				jQuery(".loytyi, .ei_loytynyt").slideUp()
			}		
		})
		
		jQuery(".tahti").hover(
			function(){
				jQuery(this).prevAll(".tahti").andSelf().addClass("blue")
				jQuery(this).nextAll(".tahti").removeClass("blue")
			},
			function(){
				jQuery(".tahti").removeClass("blue")
				var arvio = jQuery("#arvio").val()
				jQuery(".tahti:lt(" + arvio + ")").addClass("blue")
			}
		)
		
		jQuery(".tahti").click(function(){
			jQuery("#arvio").val(jQuery(this).attr("name"))
		})
});