<?php // Thank-You Popup Settings Page

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// display the plugin settings page
function ty_popup_display_settings_page() {
	
	// check if user is allowed access
	if ( ! current_user_can( 'manage_options' ) ) return;
	
	?>
	
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<form action="options.php" method="post">
			
			<?php
			
			// output security fields
			settings_fields( 'thank-you-popup' );
			
			// output setting sections
			do_settings_sections( 'thank-you-popup' );
			
			// submit button
			submit_button();
			
			?>
			
		</form>
	</div>
	
	<?php
	
}