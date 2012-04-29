var s = 1
jQuery().ready(function() {
	setInterval(function() {
		if(s == 5) {
			jQuery(".s2, .s3, .s4, .s5").fadeOut('slow')
			s = 1
		} else {
			s++;
			jQuery(".s" + s).fadeIn('slow')
		}
	}, 5000);
})

