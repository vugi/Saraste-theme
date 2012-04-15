jQuery(document).ready(function () {
	jQuery('#countdown').countdown({ until: new Date("April 25, 2012"), format: 'DHMS', layout: 
								'<h3>Jälki-ilmoittautumisaikaa</h3>' + 
								'<div id="timer">' +
									'<div id="timer_labels"><span>päivää</span><span>tuntia</span><span>minuuttia</span><span>sekuntia</span></div>' +
									'<div id="timer_days" class="timer_numbers">{dnn}</div>'+
									'<div id="timer_hours" class="timer_numbers">{hnn}</div>'+ 
									'<div id="timer_mins" class="timer_numbers">{mnn}</div>'+
									'<div id="timer_seconds" class="timer_numbers">{snn}</div>'+				
								'</div>'
								
	})
})
