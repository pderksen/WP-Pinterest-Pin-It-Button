<?php
/**
 * Post Meta Display
 *
 * @package		PIB
 * @subpackage	Views
 * @author		Phil Derksen <pderksen@gmail.com>, Nick Young <mycorpweb@gmail.com>
 *
 */

// If this file is called directly, abort.
	if ( ! defined( 'WPINC' ) ) {
		die;
	}

	global $pib_options;
	
	$button_style = ( $pib_options['button_style'] == 'user_selects_image' ) ? 'User selects image' : 'Image pre-selected';
	
	$pib_sharing_checked = get_post_meta( $post->ID, 'pib_sharing_disabled', 1 );
	$pib_url_of_webpage = get_post_meta( $post->ID, 'pib_url_of_webpage', true);
	$pib_url_of_img = get_post_meta( $post->ID, 'pib_url_of_img', true);
	$pib_description = get_post_meta( $post->ID, 'pib_description', true);
?>

	<p>
		Button style is inherited from setting saved in "Pin It" Button Settings. Current style: <?php echo $button_style; ?>
	</p>
	<p>
		These 3 text fields will be used only if the button style is: Image pre-selected
	</p>
	<p>
		<label for="pib_url_of_webpage">URL of the web page to be pinned (defaults to current post/page URL if left blank):</label><br />
		<input type="text" class="widefat" name="pib_url_of_webpage" id="pib_url_of_webpage" value="<?php echo $pib_url_of_webpage; ?>" />
	</p>
	<p>
		<label for="pib_url_of_img">URL of the image to be pinned (defaults to first image in post if left blank):</label><br />
		<input type="text" class="widefat" name="pib_url_of_img" id="pib_url_of_img" value="<?php echo $pib_url_of_img; ?>" />
	</p>
	<p>
		<label for="pib_description">Description of the pin (defaults to post title if left blank):</label><br />
		<input type="text" class="widefat" name="pib_description" id="pib_description" value="<?php echo $pib_description; ?>" />
	</p>
	<p>
		<input type="checkbox" name="pib_enable_post_sharing" id="pib_enable_post_sharing" <?php checked( empty( $pib_sharing_checked ) || ($pib_sharing_checked === false) ); ?> /> <label for="pib_enable_post_sharing">Show "Pin It" button on this post/page.</label>
	</p>
	<p>
		If checked displays the button for this post/page (if Individual Posts (for posts) or WordPress Static "Pages" (for pages) is also checked in "Pin It" Button Settings). 
		If unchecked the button will always be hidden for this post/page.
	</p>
	<input type="hidden" name="pib_sharing_status_hidden" value="1" />