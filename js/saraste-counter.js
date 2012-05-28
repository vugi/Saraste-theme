jQuery(document).ready(function () {
	jQuery('#countdown').countdown({
		until: new Date("July 30, 2012 10:00:00"),
		format: 'DHMS',
		layout: 'Yli 4500 leiriläistä valtaa Evon {dnn} päivän, {hnn} tunnin, {mnn} minuutin ja {snn} sekunnin kuluttua.'		
	})
})
