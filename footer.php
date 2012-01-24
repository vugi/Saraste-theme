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
		
		<?php
		$sarasteet = array("green" => "Kajo", "blue" => "Humu", "yellow" => "Hämy", "purple" => "Syvi");
		$saraste = $sarasteet[$_COOKIE["sarastevari"]];
		?>
		<div id="colorselect">
			<a id="green" title="Kajo"></a>
			<a id="blue" title="Humu"></a>
			<a id="yellow" title="Hämy"></a>
			<a id="purple" title="Syvi"></a>
			<span><strong>Nyt:</strong> <span><?php echo $saraste; ?></span></span>
		</div>

        <div id="fb" style="position: fixed; height: 350px; width:260px; left: 50%; bottom: -350px; margin-left: -490px; background:white; z-index: 200;">

            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) {return;}
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/fi_FI/all.js#xfbml=1";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

            <div class="fb-like-box" data-href="http://www.facebook.com/pages/Saraste-2012/247896551907822" data-width="320" data-show-faces="false" data-stream="true" data-header="false"></div>
        </div>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
	</body>
</html>