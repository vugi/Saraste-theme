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
<?php
$query = "SELECT $wpdb->commentmeta.meta_value AS nimi, COUNT(DISTINCT $wpdb->comments.comment_post_ID) AS maara
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
		echo '<li>' . $lpk->nimi . ' (' . $lpk->maara . ')</li>';
	}
	echo '</ol>';
}

?>
<h3>Eniten löydetyt kätköt</h3>
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
$query = "SELECT purkki, ID, AVG(_avg) AS __avg
					FROM
					(
						SELECT wp_test_posts.post_title AS purkki, wp_test_posts.ID, wp_test_commentmeta.meta_value AS lpk, AVG(stars.meta_value) AS _avg
						FROM wp_test_posts, wp_test_comments, wp_test_commentmeta,
						(
							SELECT meta_value, comment_id 
							FROM wp_test_commentmeta
							WHERE meta_key = 'arvio'
						) AS stars
						WHERE wp_test_posts.ID = wp_test_comments.comment_post_ID
						AND wp_test_comments.comment_id = wp_test_commentmeta.comment_id
						AND wp_test_posts.post_type = 'purkit'
						AND wp_test_comments.comment_approved = 1
						AND wp_test_commentmeta.meta_key = 'lippukunta'
						AND stars.comment_id = wp_test_comments.comment_id
						GROUP BY wp_test_posts.post_title, wp_test_commentmeta.meta_value
					) AS purkit
					GROUP BY purkki
					ORDER BY __avg DESC
					LIMIT 10";
					
$purkit = $wpdb->get_results($query);

if($purkit){
	echo '<h3>Parhaiten arvioidut kätköt</h3><ol>';
	foreach($purkit as $p){
		echo '<li><a href="' . get_permalink($p->ID) . '">' . $p->purkki . ' . </a></li>';
	}
	echo '</ol>';
}

?>







<?php //get_sidebar(); ?>
<?php get_footer(); ?>