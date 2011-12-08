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

get_header(); ?>

<ul id="slides" class="kwicks">
				<li class="slide">
					<div id="post-16" class="post-16 post type-post status-publish format-standard hentry category-yleinen" style="background:url(<?php bloginfo( 'template_directory' ); ?>/images/slide-kajo.jpg) center no-repeat">
						<div class="opacity"></div>
						<a class="overlay" href="#" rel="bookmark"></a>
						<div class="entry-container">
							<h2 class="entry-title"><a href="#" title="Kajo" rel="bookmark">Kajo</a></h2>
							<div class="entry-summary">
								<p>Aamun Kajo, hän kauniina nousee, kasteella kulkee ja tanssahtelee.</p>
								<div class="clear"></div>
							</div><!-- .entry-summary -->
						</div><!-- .entry-container -->
					</div><!-- .post -->
				</li>
				<li class="slide">
					<div id="post-12" class="post-12 post type-post status-publish format-standard hentry category-yleinen" style="background:url(<?php bloginfo( 'template_directory' ); ?>/images/slide-humu.jpg) center no-repeat">
						<div class="opacity"></div>
						<a class="overlay" href="#" rel="bookmark"></a>
						<div class="entry-container">
							<h2 class="entry-title"><a href="#" title="Humu" rel="bookmark">Humu</a></h2>
							<div class="entry-summary">
								<p>Astuu vierelleen Humu, jok&#8217; työhön ryhtyy, päivän askareet kannoillaan rytkyy.</p>
								<div class="clear"></div>
							</div><!-- .entry-summary -->
						</div><!-- .entry-container -->
					</div><!-- .post -->
				</li>
				<li class="slide">
					<div id="post-9" class="post-9 post type-post status-publish format-standard hentry category-yleinen" style="background:url(<?php bloginfo( 'template_directory' ); ?>/images//slide-hamy.jpg) center no-repeat">
						<div class="opacity"></div>
						<a class="overlay" href="#" rel="bookmark"></a>
						<div class="entry-container">
							<h2 class="entry-title"><a href="#" title="Hämy" rel="bookmark">Hämy</a></h2>
							<div class="entry-summary">
								<p>Hämy illan iloisna luoksensa loikkii, ilta karnevaalit, ilot ja juhlat poikii!</p>
								<div class="clear"></div>
							</div><!-- .entry-summary -->
						</div><!-- .entry-container -->
					</div><!-- .post -->
				</li>
				<li class="slide">
					<div id="post-6" class="post-6 post type-post status-publish format-standard hentry category-yleinen" style="background:url(<?php bloginfo( 'template_directory' ); ?>/images/slide-syvi.jpg) center no-repeat">
						<div class="opacity"></div>
						<a class="overlay" href="#" rel="bookmark"></a>
						<div class="entry-container">
							<h2 class="entry-title"><a href="#" title="Syvi" rel="bookmark">Syvi</a></h2>
							<div class="entry-summary">
								<p>Jälkeen heidän, maalle käynti saa suosion, yön Syvi ja levon hetki silloin suloisin on.</p>
								<div class="clear"></div>
							</div><!-- .entry-summary -->
						</div><!-- .entry-container -->
					</div><!-- .post -->
				</li>
			</ul><!-- #slides -->

			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>