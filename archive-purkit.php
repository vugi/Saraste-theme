<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>
<?php
	/* Queue the first post, that way we know
	 * what date we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>
<h1 class="page-title">Purkit</h1>
<?php
	/* Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();
?>

<table id="purkit">
<tr><th>Kätkön nimi</th><th>Vaikeusaste</th><th>Lippukunta</th></tr>
<?php while ( have_posts() ) : the_post(); ?>
	<tr>
		<td><a href="<?php the_permalink(); ?>"><?php	echo the_title(); ?></a></td>
		<td><?php echo purkit_taso(get_post_meta($post->ID, 'Vaikeusaste', true)); ?></td>
		<td><?php echo get_post_meta($post->ID, 'Lippukunta', true); ?></td>
	</tr>

<?php endwhile; ?>
</table>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>