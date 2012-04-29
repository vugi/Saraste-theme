jQuery().ready(function() {
		
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
				jQuery(this).prevAll(".tahti").andSelf().addClass("sini")
				jQuery(this).nextAll(".tahti").removeClass("sini")
			},
			function(){
				jQuery(".tahti").removeClass("sini")
				var arvio = jQuery("#arvio").val()
				jQuery(".tahti:lt(" + arvio + ")").addClass("sini")
			}
		)
		
		jQuery("#colorselect").hover(function(){
			jQuery("#colors").stop(true, true).toggle("slow")
		})
		
		jQuery("#colorselect #colors a").click(function(){
			var color = jQuery(this).attr("class")
			var title = jQuery(this).attr("title")
			document.cookie = 'saraste_color=' + color + '; expires=Thu, 2 Aug 2021 20:47:11 UTC; path=/'
			
			if(color == "time"){
				var d = new Date()
				var h = d.getHours()
				if(h >= 6 && h < 12){
					color = "green"
					title = "Aamun kajo"
				}	else if(h >= 12 && h < 17){
					color = "blue"
					title = "Päivän humu"
				}	else if(h >= 17 && h < 22){
					color = "yellow"
					title = "Illan hämy"
				} else {
					color = "purple"
					title = "Yön syvi"
				}
			}
			
			jQuery("body").removeClass("bg-green bg-yellow bg-blue bg-purple")
			jQuery("body").addClass("bg-" + color)
			jQuery("#colorselect #color_name").html(title)
			jQuery("#header-wrap header h1 a").attr("id", color)
		})
		
		jQuery(".tahti").click(function(){
			jQuery("#arvio").val(jQuery(this).attr("name"))
		})
});