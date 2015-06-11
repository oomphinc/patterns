<?php
/**
 * Custom functions that display new profile fields
 *
 * @package WordPress
 * @subpackage braces
 * @author Oomph, Inc.
 * @link http://www.oomphinc.com
 */

/**
 * Add extra profile fields to the User Information page
 * @link http://justintadlock.com/archives/2009/09/10/adding-and-using-custom-user-profile-fields
 */
function braces_render_extra_profile_fields( $user ) { ?>

	<h3><?php __( 'Extra Profile Information', 'braces' );?></h3>
	<table class="form-table">
		<tr>
			<th><label for="position"><?php __( 'Position' );?></label></th>
			<td>
				<input type="text" name="position" id="position" value="<?php echo esc_attr( get_the_author_meta( 'position', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php __( 'Please enter your Position or Title.' );?></span>
			</td>
		</tr>
		<tr>
			<th><label for="facebook"><?php __( 'Facebook' );?></label></th>
			<td>
				<input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php __( 'Please enter your full Facebook url.' );?> ( ex. https://www.facebook.com/username )
		</tr>
		<tr>
			<th><label for="twitter"><?php __( 'Twitter' );?></label></th>
			<td>
				<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php __( 'Please enter your full Twitter url.' );?> ( ex. https://twitter.com/username )</span>
			</td>
		</tr>
		<tr>
			<th><label for="linkedin"><?php __( 'LinkedIn' );?></label></th>
			<td>
				<input type="text" name="linkedin" id="linkedin" value="<?php echo esc_attr( get_the_author_meta( 'linkedin', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php __( 'Please enter your full LinkedIn url.' );?> ( ex. http://www.google.com )</span>
			</td>
		</tr>
		<tr>
			<th><label for="google"><?php __( 'Google +' );?></label></th>
			<td>
				<input type="text" name="google" id="google" value="<?php echo esc_attr( get_the_author_meta( 'google', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php __( 'Please enter your full Google + url.' );?> ( ex. https://plus.google.com/1234567890 )</span>
			</td>
		</tr>
		<tr>
			<th><label for="instagram"><?php __( 'Instagram' );?></label></th>
			<td>
				<input type="text" name="instagram" id="instagram" value="<?php echo esc_attr( get_the_author_meta( 'instagram', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php __( 'Please enter your full Instagram url.' );?> ( ex. http://instagram.com/p/ykEa5KyuOU/ )</span>
			</td>
		</tr>
	</table>
<?php }
add_action( 'show_user_profile', 'braces_render_extra_profile_fields' );
add_action( 'edit_user_profile', 'braces_render_extra_profile_fields' );

/**
 * Save extra profile fields to the User Information page
 * @link http://justintadlock.com/archives/2009/09/10/adding-and-using-custom-user-profile-fields
 */
function braces_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
	update_user_meta( $user_id, 'position',  sanitize_text_field( $_POST['position'] ) );
	update_user_meta( $user_id, 'facebook',  sanitize_text_field( $_POST['facebook'] ) );
	update_user_meta( $user_id, 'twitter',   sanitize_text_field( $_POST['twitter'] ) );
	update_user_meta( $user_id, 'linkedin',  sanitize_text_field( $_POST['linkedin'] ) );
	update_user_meta( $user_id, 'google',    sanitize_text_field( $_POST['google'] ) );
	update_user_meta( $user_id, 'instagram', sanitize_text_field( $_POST['instagram'] ) );
}
add_action( 'personal_options_update', 'braces_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'braces_save_extra_profile_fields' );