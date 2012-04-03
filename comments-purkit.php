<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to boilerplate_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>

<?php if ( post_password_required() ) : ?>
				<p><?php _e( 'This post is password protected. Enter the password to view any comments.', 'boilerplate' ); ?></p>
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>

<?php
	// You can start editing here -- including this comment!
?>

<?php if ( have_comments() ) : ?>
			<!-- STARKERS NOTE: The following h3 id is left intact so that comments can be referenced on the page -->
			<h3 id="comments-title">Kommentit</h3>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<?php previous_comments_link( __( '&larr; Vanhemmat kommentit', 'boilerplate' ) ); ?>
				<?php next_comments_link( __( 'Uudemmat kommentit &rarr;', 'boilerplate' ) ); ?>
<?php endif; // check for comment navigation ?>

				<?php
					wp_list_comments(array( 'callback' => 'purkit_comments', 'reverse_top_level' => 1));
				?>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<?php previous_comments_link( __( '&larr; Vanhemmat kommentit', 'boilerplate' ) ); ?>
				<?php next_comments_link( __( 'Uudemmat kommentit &rarr;', 'boilerplate' ) ); ?>
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
	if ( ! comments_open() ) :
?>
<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>

<?php

$lpkt = file(ABSPATH. '/wp-content/themes/Saraste-theme/lippukunnat.txt');
$options = '';

foreach($lpkt as $lpk){
	$options .= '<option value="' . trim($lpk) . '">' . $lpk . '</option>';
}

$fields =  array(
	'author' => '<p><label for="author">Nimi tai ryhmä</label><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
	'email'  => '<p><label for="email">Sähköposti</label><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />' . ( $req ? '<span class="required">(ei julkaista)</span>' : '' ) . '</p>',
	'status' => '<p><label class="radio"><input type="radio" name="status" id="loytyi" value="1" checked="checked"> Löysin kätkön</label><br/><label class="radio"><input id="ei_loytynyt" type="radio" name="status" value="0"> En löytänyt kätköä</label><br/><label class="radio"><input id="ei_loytynyt" type="radio" name="status" value="-1"> Haluan vain kommentoida</label>',
	'lippukunta' => '<p class="loytyi"><label for="lippukunta">Lippukunta</label><select name="lpk"' . $aria_req . '>' . $options . '</select></p>',
	'loytopvm' => '<p class="ei_loytynyt"><label>Päivämäärä</label><input type="text" name="loytopvm" ' . $aria_req . ' value="' . date("j.n.Y") . '"></p>',
	'arvio' => '<p class="loytyi"><label for="arvio">Arvio</label><a class="tahti sini" title="Ihan huono!" name="1"></a><a class="tahti" title="Ei kovin hyvä" name="2"></a><a class="tahti" title="Ihan ok..." name="3"></a><a class="tahti" title="Tämä oli kiva!" name="4"></a><a class="tahti" title="Loistava!" name="5"></a><input type="hidden" id="arvio" name="arvio" value="1" /></p>'
);

$args = array('fields' => $fields);

comment_form($args);

?>