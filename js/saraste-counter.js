jQuery(document).ready(function () {
	jQuery('#countdown').countdown({
		until: new Date("July 30, 2012 10:00:00"),
		format: 'DHMS',
		layout: 'Sarasteeseen on enää {dnn} päivää, {hnn} tuntia, {mnn} minuuttia ja {snn} sekuntia.'		
	})
})
