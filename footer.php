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
        <!--
					<script type="text/javascript">
						var uvOptions = {};
						(function() {
							var uv = document.createElement('script'); uv.type = 'text/javascript'; uv.async = true;
							uv.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'widget.uservoice.com/r8jUU5AswoWR2rz4WLhFVg.js';
							var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(uv, s);
						})();
					</script>
				-->
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
	</body>
</html>