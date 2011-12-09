<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1><?php the_title(); ?><a href="#" id="return">&larr; Palaa purkkilistaan</a></h1>
					<p><?php	echo get_post_meta(get_the_ID(), 'Kuvaus', true);	?></p>
					<?php
						$fields = array("Lippukunta", "Vaikeusaste", "Koordinaatit", "Ohjeet");
						
						foreach($fields as $field){
							if(get_post_meta($post->ID, $field, true)){
								$meta = get_post_meta(get_the_ID(), $field, true);
								echo '<p class="meta ' . $field . '"><span>' . $field . '</span><span>' . ($field == "Vaikeusaste" ? purkit_taso($meta) : $meta) . '</span></p>';
							}
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
