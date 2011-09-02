<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 * We filter the output of wp_title() a bit -- see
			 * boilerplate_filter_wp_title() in functions.php.
			 */
			wp_title( '|', true, 'right' );
		?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/saraste.css" type="text/css" media="screen" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/supersized.3.1.1.min.js"></script>
        
        <script type="text/javascript">  
			
			jQuery(function($){
				$.supersized({
				
					//Functionality
					slideshow               :   1,		//Slideshow on/off
					autoplay				:	1,		//Slideshow starts playing automatically
					start_slide             :   1,		//Start slide (0 is random)
					slide_interval          :   25000,	//Length between transitions
					transition              :   1, 		//0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	1000,	//Speed of transition
					new_window				:	0,		//Image links open in new window/tab
					pause_hover             :   0,		//Pause slideshow on hover
					keyboard_nav            :   1,		//Keyboard navigation on/off
					performance				:	1,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
					image_protect			:	1,		//Disables image dragging and right click with Javascript
					image_path				:	'img/', //Default image path

					//Size + Position
					min_width		        :   0,		//Min width allowed (in pixels)
					min_height		        :   0,		//Min height allowed (in pixels)
					vertical_center         :   1,		//Vertically center background
					horizontal_center       :   1,		//Horizontally center background
					fit_portrait         	:   1,		//Portrait images will not exceed browser height
					fit_landscape			:   0,		//Landscape images will not exceed browser width
					
					//Components
					navigation              :   0,		//Slideshow controls on/off
					thumbnail_navigation    :   1,		//Thumbnail navigation
					slide_counter           :   1,		//Display slide numbers
					slide_captions          :   1,		//Slide caption (Pull from "title" in slides array)
					slides 					:  	[		//Slideshow Images
														{image : '<?php bloginfo( 'template_directory' ); ?>/sarastus/saraste1.jpg', title : '', url : ''},
														{image : '<?php bloginfo( 'template_directory' ); ?>/sarastus/saraste2.jpg', title : '', url : ''},
														{image : '<?php bloginfo( 'template_directory' ); ?>/sarastus/saraste3.jpg', title : '', url : ''},
														{image : '<?php bloginfo( 'template_directory' ); ?>/sarastus/saraste4.jpg', title : '', url : ''},
														{image : '<?php bloginfo( 'template_directory' ); ?>/sarastus/saraste5.jpg', title : '', url : ''},
														{image : '<?php bloginfo( 'template_directory' ); ?>/sarastus/saraste6.jpg', title : '', url : ''},
														{image : '<?php bloginfo( 'template_directory' ); ?>/sarastus/saraste7.jpg', title : '', url : ''},
														{image : '<?php bloginfo( 'template_directory' ); ?>/sarastus/saraste8.jpg', title : '', url : ''}
												]
												
				}); 
		    });
		    
		</script>
        <script>
			function about() {
				plim();
				$("#about").fadeIn("slow");
			}
			function info() {
				plim();
				$("#info").fadeIn("slow");
			}
			function who() {
				plim();
				$("#who").fadeIn("slow");
			}
			function contest() {
				plim();
				$("#contest").fadeIn("slow");
			}
			function english() {
				plim();
				$("#english").fadeIn("slow");
			}
			function plim() {
				$("#about").fadeOut("slow");
				$("#info").fadeOut("slow");
				$("#who").fadeOut("slow");
				$("#contest").fadeOut("slow");
				$("#english").fadeOut("slow");
			}
		</script>
        
        <style type="text/css">
		
p a{ font-size:10pt; text-decoration:none; outline: none; color:#ddd; background:#222; border-top:1px solid #333; padding:5px 8px; -moz-border-radius:3px; -webkit-border-radius:3px; border-radius:3px; -moz-box-shadow: 0px 1px 1px #000; -webkit-box-shadow: 0px 1px 1px #000; box-shadow: 0px 1px 1px #000; }
					p a:hover{ background-color:#427cb4; border-color:#5c94cb; color:#fff; }
			h3{ padding:30px 30px 20px 30px; }
h2 {
	color: #FFF;
	padding-top: 15px;
	padding-right: 15px;
	padding-bottom: 10px;
	padding-left: 15px;
	text-shadow: #000 0px 1px 0px;
}
			
#content2 {
	position: absolute;
	top: 0px;
	left: 20px;
	width: 300px;
	text-align: left;
	z-index: 11;
}
#content2 p {
	background:rgba(0,0,0,0.60);
}
#content2 H2 {
	background:rgba(0,0,0,0.60);
}
.stamp { float: right; margin: 15px 30px 0 0;}
			
		</style>
<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
?>
	</head>
	<body <?php body_class(); ?>>
		<nav id="access" role="navigation">
		  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
			<!-- <a id="skip" href="#content" title="<?php esc_attr_e( 'Skip to content', 'boilerplate' ); ?>"><?php _e( 'Skip to content', 'boilerplate' ); ?></a> -->
			<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #access -->
        
        <div id="header-wrap">
        <header role="banner">
			<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<p><?php bloginfo( 'description' ); ?></p>
		</header>
        </div>
        
        <section id="content-wrapper">
        
		<section id="content" role="main">
        
        		<div id="about"><div class="close"><img src="img/closebox.png" onClick="plim()" width="30" height="30" alt="sulje" /></div>
		  <h2>Mitä, missä, milloin?</h2>
<p>Leiri pidetään Evolla Kilkkeeltä tutuissa maisemissa:<br />
  Esirakennusleiri pe 20. – su 22.7. (ennen Roverwaytä) ja rakennusleiri la 28. – ma 30.7.<br />
  Leiriaika: Seikkailijat ja vanhemmat ma 30.7. – ti 7.8, Sudenpennut pe 3.- ti 7.8.<br />
  Vierailupäivä: su 5.8.<br />
  Purkuleiri: ti 7. - pe 10.8. </p>
<h2>Pari sanaa itse leiristä</h2>
<p>Leirillä on neljä alaleiriä, joissa jokaisessa asuu noin 1 000 partiolaista. Jokaisessa alaleirissä on neljä kylää, jotka on muodostettu alueellisesti. Meripartiolippukunnat, Suomen Vapaan Partioryhmän lippukunnat ja metsänkävijälippukunnat voivat halutessaan majoittua omiksi kylikseen. Lisäksi perheleiriläisiä varten on luvassa oma perhekylä. Kylät jakautuvat savuihin joiden koko on n. 30-100 henkeä.</p>
<p>Pari sanaa muonituksesta: Ruoka valmistetaan ja syödään kyläkeittiöissä, tarvetta omalle savukeittiölle ei siis ole. Jokaiseen alaleiriin tulee kaksi keittiötä (eli kaksi kylää syö samassa keittiössä). Muonittamisesta kiinnostuneilla onkin mahdollisuus osallistua kyläkeittiön pyörittämiseen.</p>
<p>Evolla pidetään ennen piirileiriä Roverway eli 16-22 -vuotiaiden partiolaisten kansainvälinen leiri. Roverwaylle osallistuville ulkomaalaisille partiolaisille tarjotaan mahdollisuutta osallistua Roverwayn jälkeen PäPan piirileirille.</p>
<p>Piirileirille pääsee mukaan myös sellaisia lapsia, nuoria ja aikuisia, jotka eivät ole partiossa. Näiden henkilöiden ilmoittautuminen tapahtuu lippukunnan kautta. Olisiko tämä hyvä paikka tutustuttaa kaveri partioon?</p></div>
        <div id="info"><div class="close"><img src="img/closebox.png" onClick="plim()" width="30" height="30" alt="sulje" /></div><h2>Yhteyshenkilö</h2>
<p>Lippukunnan valitsema yhteyshenkilö ilmoittaa lippukuntansa mukaan leirille oman jäsenkorttinsa ilmoittautumistunnuksella 30.9.2011 mennessä. Ilmoittautumisen yhteydessä kysytään seuraavia asioita:</p>
<ul>
  <li>Lippukunnan yhteyshenkilön yhteystiedot<br />
    </li>
  <li>Onko lippukunnalla savukaveritoivetta?<br />
    </li>
  <li>Arvio lippukunnan osallistujamäärästä<br />
    </li>
  <li>Kylätoive: Oma alue, Suomen Vapaa Partioryhmä, Meripartio, Metsänkävijät<br />
    </li>
  <li>Haluaako lippukunta ulkomaalaisia vieraita majoittumaan savuunsa?<br />
    </li>
  <li>Muuta? Kysymyksiä? Toiveita?</li>
</ul>
<p>Yhteyshenkilön ilmoittautuminen tapahtuu Polkuun osoitteessa:<p><a href="https://spfs.clubonweb.com/book/17304">https://spfs.clubonweb.com/book/17304</a></p>
</p>
<p>Yhteyshenkilöön ollaan yhteydessä piirileiriin liittyvissä asioissa ja hän tiedottaa asioista lippukunnassaan, kunnes lippukunta löytää oman savunjohtajansa. Yhteyshenkilö huolehtii leiri-ilmoittautumislappujen jakamisesta partiolaisten kotiin ja vastaa heidän ilmoittamisestaan piirileirille Polun kautta. Yhteyshenkilö ei ole automaattisesti sama asia kuin savunjohtaja (toki hän voi myöhemmin ryhtyä savunjohtajaksi). Yhteyshenkilö tietää lippukunnassa ensimmäisenä kaiken piirileiristä!</p>
<h2>Leirille ilmoittaudutaan tammikuussa 2012</h2>
<p>Henkilökohtainen ilmoittautuminen leirille alkaa tammikuussa 2012 ja päättyy maaliskuun loppupuoliskolla. Lopullinen hinta ja tarkempi aikataulu ilmoitetaan syksyn aikana. Yli 15-vuotiaiden kohdalla tullaan soveltamaan joustavaa peruuttamiskäytäntöä. Samoajat, vaeltajat ja aikuiset toimivat leirillä palvelutehtävissä. Kaikille ikäkausille on kuitenkin tarjolla myös laadukasta oman ikäkauden mukaista ohjelmaa. Lippukunnissa pääsee suorittamaan keväällä 2012 myös piirileirille valmistavaa ennakko-ohjelmaa.</p></div>
        <div id="who"><div class="close"><img src="img/closebox.png" onClick="plim()" width="30" height="30" alt="sulje" /></div><h2>Yhteys</h2>
<p><strong>Leirinjohtaja</strong><br />
  Heikki Laine / Mastonvartijat, p. 050-61860</p>
<p><strong>Leirin varajohtajat</strong><br />
  Tea Jormanainen / Koskenhaltiat<br />
Anna von Zansen / Vartiovuoren Tytöt</p>
<p><strong>Huoltojohtaja</strong><br />
  Veli-Pekka &quot;Veltsu&quot; Peltola / Niipperin Nuolihaukat</p>
<p><strong>Alaleirijohtaja</strong><br />
  Matsku Salminen / Maahiset</p>
<p><strong>Turvallisuusjohtaja</strong><br />
  Timo Pääskynkivi / Karhunvartijat</p>
<p><strong>Talousjohtaja</strong><br />
  Elina Katajamäki / Vantaan Metsänkävijät</p>
<p><strong>Ohjelmajohtajat</strong><br />
  Jonni Ahonen / Saharan Sissit<br />
  Essi Tarvonen / NMKY:n Rastipartio</p>
<p><strong>Viestintäjohtaja</strong><br />
  Lauri Lankinen / NMKY:n Rastipartio</p>
<p>Ota yhteyttä! S-posti muotoa: etunimi.sukunimi@papa.partio.net</p></div>

<div id="english"><div class="close"><img src="img/closebox.png" onClick="plim()" width="30" height="30" alt="sulje" /></div>
  <h2>Saraste</h2>
<p>30.7.–7.8.2012</p>
<p><a href="http://maps.google.fi/maps?q=rahtij%C3%A4rventie+110&amp;hl=fi&amp;ie=UTF8&amp;ll=61.20779,25.13114&amp;spn=0.011492,0.039611&amp;gl=fi&amp;z=15">Evo/Hämeenlinna, Southern Finland</a></p>
<p><strong>Come and feel the urban beat within a forest deep! </strong></p>
<p>The camp is organized by the Capital Area District Guides and Scouts, and more than 4000 Finnish and foreign Guides and Scouts are expected. All foreign scouts and guides 12-years of age or older are very welcome to join us for this adventure packed camp.</p>
<p>The camp is located in the same area as Roverway and it is easily accessible from the airport. </p>
<p>All foreign scout guide and scout groups will be assigned Finnish host groups and they will form a camp troop of about 30-100 campers. For foreign scouts and guides it is possible to attend in home hospitality or visiting Finland before or after the camp. Travelling solo is also possible. Rovers participating Roverway can also stay and spend one more week in Evo.</p>
<p> During the camp guides and scouts and some of the leaders will participate in the camp program. Foreign guides and scouts 15-years and older will also have the possibility to participate in arranging the program alongside the Finnish scout leaders and rovers.</p>
<p><strong>Camp fee:</strong> The camp fee for Saraste is 160 euros. It will include transportation for both the scouts and their equipment from Helsinki to the camp site and back, program, food and a safe camp environment.</p>
<p><strong>Registration:</strong> Actual registration for the camp will begin in January 2012. The International team would wish for interested international scout and guide groups to contact us by the end of the year 2011. For those willing we will send an Saraste packet with further information on the camp later this year.</p>
<p> <strong>For more information:</strong><br />
  Heidi Kokko, Project Manager<br />
  e-mail: heidi.kokko@partio.fi<br />
  tel: +358 9 8865 1210<br />
  Capital Area District Guides and Scouts<br />
  Töölönkatu 55<br />
  FIN-00250 Helsinki</p>
</div>
<!-- <div id="contest"><div class="close"><img src="img/closebox.png" onClick="plim()" width="30" height="30" alt="sulje" /></div><h2>Kilpailu</h2>
<p>Kerro paras leirikokemuksesi ja voita itsellesi sekä neljälle kaverillesi saunahetki Sarasteella tarjoiluin!</p>
<form name="contact" method="post" action="">
    <fieldset>  
    <table width="400" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="176"><label for="name" id="name_label">Nimi</label></td>
          <td width="224"><input type="text" name="name" id="name" size="30" value="" class="text-input" /><label class="error" for="name" id="name_error">Tämä tieto vaaditaan.</label></td>
        </tr>
        <tr>
          <td><label for="email" id="email_label">S-posti</label></td>
          <td><input type="text" name="email" id="email" size="30" value="" class="text-input" /><label class="error" for="email" id="email_error">Tämä tieto vaaditaan.</label></td>
        </tr>
        <tr>
          <td><label for="phone" id="phone_label">Puhelin</label></td>
          <td><input type="text" name="phone" id="phone" size="30" value="" class="text-input" /><label class="error" for="phone" id="phone_error">Tämä tieto vaaditaan.</label></td>
        </tr>
      </table>
    	<br />
      <input type="submit" name="submit" class="button" id="submit_btn" value="Osallistu" />
    </fieldset>
  </form></div>  
  <div id="content2">
		<h2>Piirileiri Saraste 2012</h2>
<p><strong>Pääkaupunkiseudun Partiolaisten Piirileiri 2012 järjestetään Evolla Hämeenlinnassa 30.7.-7.8.2012.</strong></p>
<img src="img/saraste.png" width="300" height="208" alt="Saraste 2012" /></div>-->

<div id="prevthumb"></div> <div id="nextthumb"></div>
	<div id="controls-wrapper">
		<div id="controls">
			<div id="slidecounter">
				<span class="slidenumber"></span>/<span class="totalslides"></span>
			</div>
                <!-- <div class="links">
                    <a href="javascript:void(null)" onClick="about()">Tietoa</a>
                    <a href="javascript:void(null)" onClick="info()">Lippukunnille</a>
                    <a href="javascript:void(null)" onClick="who()">Yhteys</a>
                    <a href="javascript:void(null)" onClick="english()">In English</a>
                  <!--<a href="javascript:void(null)" onClick="contest()">Kilpailu</a>
                </div> -->
			<div id="slidecaption"></div>
			<div id="navigation">
				<img id="prevslide" src="img/back_dull.png" alt="edellinen"/><img id="pauseplay" src="img/pause_dull.png" alt="pause"/><img id="nextslide" src="img/forward_dull.png" alt="seuraava"/>
			</div>
			
		</div>
	</div>
    
   </div>
        
