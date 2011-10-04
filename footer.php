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
			<a href="#top" id="top" style="float: right;">&uarr; Siirry ylös</a>
		</section><!-- #content -->
		
        <!-- Supersized thumbs and controls-->
        <!--
        <div id="prevthumb"></div>
        <div id="nextthumb"></div>
        <div id="controls-wrapper">
            <div id="controls">
                <div id="slidecounter">
                    <span class="slidenumber"></span>/<span class="totalslides"></span>
                </div>
                <div id="slidecaption"></div>
            </div>
        </div>
        -->

        <div id="fb" style="position: fixed; height: 350px; width:260px; left: 50%; bottom: -350px; margin-left: -490px; background:white; z-index: 200;">
            <!--<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FSaraste-2012%2F247896551907822&amp;width=280&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=true&amp;header=false&amp;height=300" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:280px; height:300px;" allowTransparency="true"></iframe>-->

            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) {return;}
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
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