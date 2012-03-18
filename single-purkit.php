<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
	function mapInit(){
		var options = {
			zoom: 10,
			center: new google.maps.LatLng(60.23163, 24.908752),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(document.getElementById("map_small"), options)
		
		var coord = jQuery(".hidden").text()
		coord = coord.split(",")
		
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(coord[0], coord[1]),
			map: map,
			title: jQuery("td:first-child", jQuery(this)).text(),
			clickable: false,
			icon: "<?php bloginfo('template_directory'); ?>/images/purkit/marker.png"
		})
	}
	
	mapInit()
	})
</script>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1><?php the_title(); ?></h1>
					<p><?php	echo get_post_meta(get_the_ID(), 'Kuvaus', true);	?></p>
					<?php
						$fields = array("Lippukunta", "Vaikeusaste", "Ohjeet");
						
						foreach($fields as $field){
							if(get_post_meta($post->ID, $field, true)){
								$meta = get_post_meta(get_the_ID(), $field, true);
								echo '<p class="meta ' . $field . '"><span>' . $field . '</span><span>' . ($field == "Vaikeusaste" ? purkit_taso($meta) : $meta) . '</span></p>';
							}
						}
						
						if(get_post_meta($post->ID, "Sijainti", true)){
							echo '<p class="meta"><span>Sijainti</span><span><a id="show_map">&#9660; Näytä</a></span></p>';
							echo '<div id="map_container"><div id="map_small"></div></div>';
							echo '<span class="hidden">' . get_post_meta(get_the_ID(), "Sijainti", true) . '</span><div style="clear: both;"></div>';
						}
						
					?>
					
					<p>
						<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-via="Saraste2012">Tweet</a>
						<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink());?>&send=false&layout=button_count&width=110&show_faces=false&action=like&colorscheme=light&font&height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:21px; margin-bottom: -1px;" allowTransparency="true"></iframe>
					</p>
					
				<?php comments_template('/comments-purkit.php', true); ?>
<?php endwhile; ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
