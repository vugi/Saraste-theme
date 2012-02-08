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
		
		$h = date("H");
	
		if($h >= 6 && $h < 12){
			$bg_color = "green";
		}	elseif($h >= 12 && $h < 17){
			$bg_color = "blue";
		}	elseif($h >= 17 && $h < 22){
			$bg_color = "yellow";
		} else {
			$bg_color = "purple";
		}
		
		$sarasteet = array("green" => "Aamun kajo", "blue" => "Päivän humu", "yellow" => "Illan hämy", "purple" => "Yön syvi");
		$saraste = $sarasteet[$bg_color];
		?>
		<div id="colorselect">
			<span id="<?php echo $bg_color; ?>"></span><strong>Nyt teemana:</strong> <?php echo $sarastes; ?>
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
