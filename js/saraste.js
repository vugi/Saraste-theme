jQuery().ready(function() {
    /*jQuery("#fb").delay(1000).animate({bottom:'-200px'}, "slow");
    jQuery("#fb").hover(
      function () {
        jQuery(this).stop(true, true).animate({bottom:'0px',width:'320px'}, "slow");
      },
      function () {
        jQuery(this).stop(true, true).delay(1000).animate({bottom:'-200px',width:'260px'}, "slow")
      }
    );*/
    jQuery("header").hover(function(){
        jQuery("#counter").stop(true, true).toggle("slow");
    })
    var startDate = new Date(2012,6,30,0,0,0);
    var now = new Date();
    var diff = Math.ceil((startDate.getTime() - now.getTime()) / (1000 * 60 * 60 * 24) );
    jQuery("#count").html(diff)
		
		/* Purkit */
		
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
		
		jQuery("#colorselect").hover(function(){
			jQuery("#colors").stop(true, true).toggle("slow")
		})
		
		jQuery("#colorselect #colors a").click(function(){
			var color = jQuery(this).attr("class")
			document.cookie = 'saraste_color=' + color + '; expires=Thu, 2 Aug 2021 20:47:11 UTC; path=/'
			
			if(color == "time"){
				var d = new Date()
				var h = d.getHours()
				if(h >= 6 && h < 12){
					color = "green"
				}	else if(h >= 12 && h < 17){
					color = "blue"
				}	else if(h >= 17 && h < 22){
					color = "yellow"
				} else {
					color = "purple"
				}
			}
			
			jQuery("body").removeClass("bg-green bg-yellow bg-blue bg-purple")
			jQuery("body").addClass("bg-" + color)
			jQuery("#header-wrap header h1 a").attr("id", color)
		})
		
		jQuery(".tahti").click(function(){
			jQuery("#arvio").val(jQuery(this).attr("name"))
		})
});