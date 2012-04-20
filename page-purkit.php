<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
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
	var map = new google.maps.Map(document.getElementById("map"), options)
	
	jQuery("#purkit tr:not(:first-child)").each(function(){
		var coord = jQuery(".hidden", jQuery(this)).text()
		coord = coord.split(",")
		
		var icon = jQuery("td:nth-child(2)", jQuery(this)).text()
		icon = icon.toLowerCase()
		
		if(icon == "sudenpentu" || icon == "seikkailija" || icon == "tarpoja" || icon == "samoaja" || icon == "vaeltaja"){
			icon = "<?php bloginfo('template_directory'); ?>/images/purkit/marker_" + icon + ".png"
		} else {
			icon = "<?php bloginfo('template_directory'); ?>/images/purkit/marker.png"
		}
		
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(coord[0], coord[1]),
			map: map,
			title: jQuery("td:first-child", jQuery(this)).text(),
			url: jQuery("td:first-child a", jQuery(this)).attr("href"),
			icon: icon
		})
		
		google.maps.event.addListener(marker, 'click', function(){
			window.location.href = marker.url
		})
  })
  
}

jQuery(function(){
	mapInit()
})

</script>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php the_content(); ?>
					
					<div style="float: left; width: 250px;">
						<h3>Uusimmat päivitykset</h3>
						<?php
						$comments = get_comments(array('number' => 5, 'post_type' => 'purkit'));
						foreach($comments as $comment){
							echo '<p>' . get_the_date('j.n.Y') . '<br/><strong>' . $comment->comment_author . '</strong> ' . ($status == 1 ? 'löysi' : ($status == 0 ? 'ei löytänyt' : 'kommentoi')) . ' kätkö' . ($status == 1 ? 'n' : 'a') . ' <a href="' . get_permalink($comment->comment_post_ID) . '">' . get_the_title($comment->comment_post_ID) . '</a></p>';
						}
						?>
					</div>
					
					<div style="float: right; width: 250px;">
						<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FSarastepurkit%2F177611935661281&amp;width=250&amp;height=355&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=true&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:355px;" allowTransparency="true"></iframe>
					</div>
					
					<div style="clear: both;"></div>
					
					<?php
					$args = array(
										'post_type' => 'purkit',
										'post_status' => 'publish',
										'numberposts' => -1
										);
					
					$purkit = get_posts($args);
					?>
					<div id="map"></div>
					<h2>Kaikki kätköt</h2>
					<table id="purkit">
					<tr><th>Nimi</th><th>Vaikeusaste</th><th>Lippukunta</th><th class="hidden">Sijainti</th></tr>
					<?php foreach($purkit as $post) :	setup_postdata($post); ?>
						<tr>
							<td><a href="<?php the_permalink(); ?>"><?php	echo the_title(); ?></a></td>
							<td><?php echo purkit_taso(get_post_meta($post->ID, 'Vaikeusaste', true)); ?></td>
							<td><?php echo get_post_meta($post->ID, 'Lippukunta', true); ?></td>
							<td class="hidden"><?php echo get_post_meta($post->ID, 'Sijainti', true); ?></td>
						</tr>
					<?php endforeach; ?>
					</table>
				</article><!-- #post-## -->
<?php endwhile; ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>