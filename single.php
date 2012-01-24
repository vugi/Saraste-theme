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
					<h1><?php the_title(); ?></h1>
					<div class="entry-meta">
						<?php the_date(); ?>
						<?php	the_author_meta('first_name'); ?>
					</div><!-- .entry-meta -->
					<div class="entry-content">
						<?php the_content(); ?>
						<p>
							<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
							<a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-via="Saraste2012">Tweet</a>
							<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink());?>&send=false&layout=button_count&width=110&show_faces=false&action=like&colorscheme=light&font&height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:21px; margin-bottom: -1px;" allowTransparency="true"></iframe>
						</p>
					</div><!-- .entry-content -->
					<footer class="entry-utility">
						<nav id="nav-below" class="navigation">
							<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'boilerplate' ) . '</span> %title' ); ?></div>
							<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'boilerplate' ) . '</span>' ); ?></div>
						</nav><!-- #nav-below -->
					</footer><!-- .entry-utility -->
				</article><!-- #post-## -->
				<article>
					<?php comments_template( '', true ); ?>
				</article>
<?php endwhile; // end of the loop. ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
