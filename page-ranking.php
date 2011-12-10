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

<h1>Eniten löydetyt purkit</h1>
<?php

$query = new WP_Query('orderby=comment_count&post_type=purkit');

echo '<ol>';

while ($query->have_posts()) : $query->the_post();
	echo '<li><a href="';
	the_permalink();
	echo '">';
	the_title();
	echo '</a></li>';
endwhile;

echo '</ol>';

// Reset Post Data
wp_reset_postdata();

?>



<?php //get_sidebar(); ?>
<?php get_footer(); ?>