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
<h1>Ranking</h1>
<h3>Eniten löydetyt purkit</h3>
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

wp_reset_postdata();
?>

<?php
$query = "SELECT meta_value AS nimi, COUNT(*) AS maara
					FROM $wpdb->commentmeta, $wpdb->comments
					WHERE $wpdb->comments.comment_approved = '1'
						AND $wpdb->commentmeta.comment_id = $wpdb->comments.comment_ID
						AND $wpdb->commentmeta.meta_key = 'lippukunta'
					GROUP BY $wpdb->commentmeta.meta_value
					ORDER BY maara DESC
					LIMIT 10";
					
$lpkt = $wpdb->get_results($query);

if($lpkt){
	echo '<h3>Eniten kätköjä löytänyt lippukunta</h3><ol>';
	foreach($lpkt as $lpk){
		echo '<li>' . $lpk->nimi . '</li>';
	}
	echo '</ol>';
}

?>



<?php //get_sidebar(); ?>
<?php get_footer(); ?>