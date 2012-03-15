<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header();

$second = $first = 1;
?>
<article id="recent">
	<h1>Ajankohtaista</h1>
	<?php $randomthumb = 0; ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php if($first || $second) { ?> 
			<div class="post-excerpt <?php if(!$first) echo 'second'; ?>">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('frontpage-thumb', array('title' => get_the_title()));
				} else { 
					$thumbnails = array('blue',	'green', 'purple', 'yellow');
				?>
					<img src="<?php echo bloginfo('template_directory'); ?>/images/thumb_default_<?php echo $thumbnails[$randomthumb]; ?>.png" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
				<?php	
					if($randomthumb >= 3){
						$randomthumb = 0;
					} else {
						$randomthumb++;
					}
				?>
				<?php } ?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
			</div>
			<?php
				if(!$first) {
					$second = 0;
					echo '<br class="clear"><div id="titles">';
				}
				$first = 0;
			?>
		<?php } else { ?>
			<p class="archive"><span><?php the_date(); ?></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><p>
		<?php } ?>
	<?php endwhile; ?>
	</div>
	<?php if (  $wp_query->max_num_pages > 1 ) : ?>
		<nav id="nav-below" class="navigation">
			<?php next_posts_link( __( '&larr; Vanhemmat artikkelit', 'boilerplate' ) ); ?>
			<?php previous_posts_link( __( 'Uudemmat artikkelit &rarr;', 'boilerplate' ) ); ?>
		</nav><!-- #nav-below -->
	<?php endif; ?>
</article>
<?php get_footer(); ?>
