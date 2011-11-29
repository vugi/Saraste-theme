<?php
/*
Template Name: Etusivu
*/

get_header();

?>

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



$facebook = fetch_feed('http://www.facebook.com/feeds/page.php?id=247896551907822&format=rss20');
if(!is_wp_error($facebook)){
    $max = $facebook->get_item_quantity(10); 
    $facebook = $facebook->get_items(0, $max); 
}

foreach($facebook as $fb){
	$feed[$fb->get_date("U")] = array("title" => $fb->get_title(), "date" => $fb->get_date("j.n.Y"), "link" => $fb->get_link(), "author" => "Facebook", "content" => $fb->get_content(), "wp" => 0);
}

/*
$youtube = fetch_feed('http://gdata.youtube.com/feeds/base/users/Saraste2012/uploads?alt=rss&v=2&orderby=published&client=ytapi-youtube-profile');
if(!is_wp_error($youtube)){
    $max = $youtube->get_item_quantity(10); 
    $youtube = $youtube->get_items(0, $max); 
}

foreach($youtube as $fb){
	$feed[$fb->get_date("U")] = array("title" => $fb->get_title(), "date" => $fb->get_date("j.n.Y"), "link" => $fb->get_link(), "author" => "YouTube", "content" => $fb->get_content(), "wp" => 0);
}
*/


$posts = get_posts(array('numberposts' => 10));

foreach($posts as $post){
	setup_postdata($post);
	$content = get_the_content("Lue lisää", false);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	$feed[get_the_date("U")] = array("title" => get_the_title(), "date" => get_the_date("j.n.Y"), "link" => get_permalink(), "author" => get_the_author(), "content" => $content, "wp" => 1);
}

krsort($feed);

foreach($feed as $item){
	echo '<article>';
	echo '<h2><a href="' . $item["link"] . '">' . (empty($item["title"]) ? substr($item["content"], 0, 40) : $item["title"]) . '</a></h2>';
	echo '<span class="entry-date">' . $item["author"] . ' ' . $item["date"] . '</span>';
	echo '<div class="entry-content">' . $item["content"] . '</div>';
	
	if($item["wp"]){
		echo '<p>
						<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-via="Saraste2012">Tweet</a>
						<iframe src="http://www.facebook.com/plugins/like.php?href=' . urlencode($item["link"]) . '&send=false&layout=button_count&width=110&show_faces=false&action=like&colorscheme=light&font&height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:21px; margin-bottom: -1px;" allowTransparency="true"></iframe>
					</p>';
	}
	
	echo '</article>';
}


get_footer();

?>