<?php
/*
Template Name: Etusivu
*/

get_header();

?>

<article id="featured">
	<div>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
	<div style="clear: both;"></div>
	</div>
</article>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.countdown.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/saraste-counter.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/featured.css">
<!--[if lt IE 8]><style type="text/css">#countdown { display: none; }</style><![endif]-->

<div id="featured-wrapper">
	<?php
		$o = get_option('saraste_theme_options');
	?>
	<div><a <?php echo (empty($o["nosto1_kuva"]) ? '' : 'style="background: url(' . $o["nosto1_kuva"] . ');"'); ?> href="<?php echo $o["nosto1_linkki"]; ?>"><span><?php echo $o["nosto1_teksti"]; ?></span></a></div>
	<div><a <?php echo (empty($o["nosto2_kuva"]) ? '' : 'style="background: url(' . $o["nosto2_kuva"] . ');"'); ?>href="<?php echo $o["nosto2_linkki"]; ?>"><span><?php echo $o["nosto2_teksti"]; ?></span></a></div>
	<div><a <?php echo (empty($o["nosto3_kuva"]) ? '' : 'style="background: url(' . $o["nosto3_kuva"] . ');"'); ?>href="<?php echo $o["nosto3_linkki"]; ?>"><span><?php echo $o["nosto3_teksti"]; ?></span></a></div>
	<br class="clear">
</div>

<article>
	<h2>Nyt ajankohtaista</h2>
	<?php $count = 1; ?>
	<?php $randomthumb = 0; ?>
	<?php	$posts = get_posts(array('numberposts' => 10)); ?>
	<?php	foreach($posts as $post) : setup_postdata($post); ?>
		<div class="post-excerpt <?php if($count%2 == 0) echo 'second'; ?>">
			<a href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('post-thumbnail', array('title' => get_the_title()));
				} else { 
					$thumbnails = array('blue',	'green', 'purple', 'yellow');
				?>
					<img src="<?php echo bloginfo('template_directory'); ?>/images/thumb_default_<?php echo $thumbnails[$randomthumb]; ?>.png" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
				<?php	
					if($randomthumb >= 3){
						$randomthumb = 0;
					} else {
						$randomthumb++;
					}
				?>
				<?php } ?>			
			</a>
			<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
		</div>
		<?php if($count == 3){ ?>
			<div id="fb" style="float: right; width: 260px; margin-top: 20px;">
				<div id="fb-root"></div>
					<script>
						(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) {return;}
							js = d.createElement(s); js.id = id;
							js.src = "//connect.facebook.net/fi_FI/all.js#xfbml=1";
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));
					</script>
				<div class="fb-like-box" data-href="http://www.facebook.com/pages/Saraste-2012/247896551907822" data-width="260" data-show-faces="false" data-stream="true" data-header="false"></div>
			</div>
		<?php } ?>
		<?php if($count == 4){ ?>
			<br class="clear">
		<?php } ?>
		<?php $count++; ?>
	<?php endforeach; ?>
	<p class="ajankohtaista_linkki clear"><a href="/ajankohtaista/">Siirry arkistoon</a></p>
</article>
<?php	get_footer(); ?>
