<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
				<h1><?php printf('Hakutulokset %s', '' . get_search_query() . '' ); ?></h1>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
					<h2>Ei löytynyt</h2>
					<p>Hakemaasi sivua ei löytynyt (virhe 404).</p>
					<?php get_search_form(); ?>
<?php endif; ?>

<?php get_footer(); ?>
