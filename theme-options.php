<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'saraste_options', 'saraste_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page('Etusivun nostot', 'Etusivun nostot', 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}


/**
 * Create the options page
 */
function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>Etusivun pikkunostot</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong>Asetukset tallennettu.</strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'saraste_options' ); ?>
			<?php $options = get_option( 'saraste_theme_options' ); ?>

			<table class="form-table">
				<tr valign="top"><th scope="row">1. nosto</th>
					<td>
						<input id="saraste_theme_options[nosto1_teksti]" class="regular-text" type="text" name="saraste_theme_options[nosto1_teksti]" value="<?php esc_attr_e($options['nosto1_teksti']); ?>" />
						<label class="description" for="saraste_theme_options[nosto1_teksti]">Teksti</label>
						<br/>
						<input id="saraste_theme_options[nosto1_linkki]" class="regular-text" type="text" name="saraste_theme_options[nosto1_linkki]" value="<?php esc_attr_e($options['nosto1_linkki']); ?>" />
						<label class="description" for="saraste_theme_options[nosto1_linkki]">Linkin osoite (muista alkuun http://)</label>
						<br/>
						<input id="saraste_theme_options[nosto1_kuva]" class="regular-text" type="text" name="saraste_theme_options[nosto1_kuva]" value="<?php esc_attr_e($options['nosto1_kuva']); ?>" />
						<label class="description" for="saraste_theme_options[nosto1_kuva]">Kuvan osoite (muista alkuun http://)</label>
					</td>
				</tr>
				<tr valign="top"><th scope="row">2. nosto</th>
					<td>
						<input id="saraste_theme_options[nosto2_teksti]" class="regular-text" type="text" name="saraste_theme_options[nosto2_teksti]" value="<?php esc_attr_e($options['nosto2_teksti']); ?>" />
						<label class="description" for="saraste_theme_options[nosto2_teksti]">Teksti</label>
						<br/>
						<input id="saraste_theme_options[nosto2_linkki]" class="regular-text" type="text" name="saraste_theme_options[nosto2_linkki]" value="<?php esc_attr_e($options['nosto2_linkki']); ?>" />
						<label class="description" for="saraste_theme_options[nosto2_linkki]">Linkin osoite (muista alkuun http://)</label>
						<br/>
						<input id="saraste_theme_options[nosto2_kuva]" class="regular-text" type="text" name="saraste_theme_options[nosto2_kuva]" value="<?php esc_attr_e($options['nosto2_kuva']); ?>" />
						<label class="description" for="saraste_theme_options[nosto2_kuva]">Kuvan osoite (muista alkuun http://)</label>
					</td>
				</tr>
				<tr valign="top"><th scope="row">3. nosto</th>
					<td>
						<input id="saraste_theme_options[nosto3_teksti]" class="regular-text" type="text" name="saraste_theme_options[nosto3_teksti]" value="<?php esc_attr_e($options['nosto3_teksti']); ?>" />
						<label class="description" for="saraste_theme_options[nosto3_teksti]">Teksti</label>
						<br/>
						<input id="saraste_theme_options[nosto3_linkki]" class="regular-text" type="text" name="saraste_theme_options[nosto3_linkki]" value="<?php esc_attr_e($options['nosto3_linkki']); ?>" />
						<label class="description" for="saraste_theme_options[nosto3_linkki]">Linkin osoite (muista alkuun http://)</label>
						<br/>
						<input id="saraste_theme_options[nosto3_kuva]" class="regular-text" type="text" name="saraste_theme_options[nosto3_kuva]" value="<?php esc_attr_e($options['nosto3_kuva']); ?>" />
						<label class="description" for="saraste_theme_options[nosto3_kuva]">Kuvan osoite (muista alkuun http://)</label>
					</td>
				</tr>
			</table>
			<p class="submit">
				<input type="submit" class="button-primary" value="Tallenna" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	global $select_options, $radio_options;

	// Our checkbox value is either 0 or 1
	if ( ! isset( $input['option1'] ) )
		$input['option1'] = null;
	$input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );

	// Say our text option must be safe text with no HTML tags
	$input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );

	// Our select option must actually be in our array of select options
	if ( ! array_key_exists( $input['selectinput'], $select_options ) )
		$input['selectinput'] = null;

	// Our radio option must actually be in our array of radio options
	if ( ! isset( $input['radioinput'] ) )
		$input['radioinput'] = null;
	if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
		$input['radioinput'] = null;

	// Say our textarea option must be safe text with the allowed tags for posts
	$input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );

	return $input;
}

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/