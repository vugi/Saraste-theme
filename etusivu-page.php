<?php
/*
Template Name: Etusivu
*/

get_header();

?>

<div id="featured">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
</div>
<!--[if lt IE 8]><style type="text/css">#countdown { display: none; }</style><![endif]-->



<?php	$posts = get_posts(); ?>
<?php	foreach($posts as $post) : setup_postdata($post); ?>
		<article id="post-<?php the_ID(); ?>" <?php if($first) { echo ' class="first"'; } ?>>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'boilerplate' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

			<div class="entry-meta">
				<?php the_date(); ?>
				<?php	the_author_meta('first_name'); ?>
			</div>
			<div class="entry-content">
				<?php the_content( __( 'Jatka lukemista <span class="meta-nav">&rarr;</span>', 'boilerplate' ) ); ?>
				<p>
					<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
					<a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-via="Saraste2012">Tweet</a>
					<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink());?>&send=false&layout=button_count&width=110&show_faces=false&action=like&colorscheme=light&font&height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:21px; margin-bottom: -1px;" allowTransparency="true"></iframe>
				</p>
			</div>
		</article>
<?php endforeach; ?>
<?php	get_footer(); ?>