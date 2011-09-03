<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
		</section><!-- #content -->
		</section><!-- #content-outer -->
		</section><!-- #content-wrapper -->
		
		<!-- Supersized thumbs and controls-->
		<div id="prevthumb"></div>
		<div id="nextthumb"></div>
  	<div id="controls-wrapper">
  		<div id="controls">
  			<div id="slidecounter">
  				<span class="slidenumber"></span>/<span class="totalslides"></span>
  			</div>
  			<div id="slidecaption"></div>
  			<div id="navigation">
  				<img id="prevslide" src="img/back_dull.png" alt="edellinen"/><img id="pauseplay" src="img/pause_dull.png" alt="pause"/><img id="nextslide" src="img/forward_dull.png" alt="seuraava"/>
  			</div>

  		</div>
  	</div>
		
		<footer role="contentinfo">
<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>
			<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<a href="http://wordpress.org/" title="Semantic Personal Publishing Platform" rel="generator">Proudly powered by WordPress </a>
		</footer><!-- footer -->
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
	</body>
</html>