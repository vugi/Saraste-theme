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
	
		if(empty($_COOKIE["saraste_color"]) || $_COOKIE["saraste_color"] == "time"){
			if($h >= 6 && $h < 12){
				$bg_color = "green";
			}	elseif($h >= 12 && $h < 17){
				$bg_color = "blue";
			}	elseif($h >= 17 && $h < 22){
				$bg_color = "yellow";
			} else {
				$bg_color = "purple";
			}
		} else {
			$bg_color = $_COOKIE["saraste_color"];			
		}
		
		$sarasteet = array("green" => "Aamun kajo", "blue" => "Päivän humu", "yellow" => "Illan hämy", "purple" => "Yön syvi");
		$saraste = $sarasteet[$bg_color];
		?>
		<div id="colorselect">
			<span class="<?php echo $bg_color; ?>"></span><strong>Nyt teemana:</strong> <?php echo $saraste; ?>
			<div id="clear"></div>
			<div id="colors">
				<p>Voit myös valita teeman itse:</p>
				<a class="green" title="Aamun kajo"></a>
				<a class="blue" title="Päivän humu"></a>
				<a class="yellow" title="Illan hämy"></a>
				<a class="purple" title="Yön syvi"></a>
				<a class="time" title="Vuorokaudenajan mukaan vaihtuva"></a>
			</div>
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
