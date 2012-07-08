<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

<article id="recent">
	<h1><?php single_cat_title(); ?></h1>
	<?php $count = 1; ?>
	<?php $randomthumb = 0; ?>
	<?php	$posts = get_posts(array('numberposts' => 10)); ?>
	<?php	while (have_posts()) : the_post(); ?>
		<div class="post-excerpt <?php if($count%2 == 0) echo 'second'; ?>">
			<a href="<?php the_permalink(); ?>">
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
			</a>
			<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
		</div>
		<?php $count++; ?>
	<?php endwhile; ?>
	<?php if (  $wp_query->max_num_pages > 1 ) : ?>
		<nav id="nav-below" class="navigation">
			<?php next_posts_link( __( '&larr; Vanhemmat artikkelit', 'boilerplate' ) ); ?>
			<?php previous_posts_link( __( 'Uudemmat artikkelit &rarr;', 'boilerplate' ) ); ?>
		</nav><!-- #nav-below -->
	<?php endif; ?>
</article>
<?php get_footer(); ?>