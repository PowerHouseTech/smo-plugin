<?php // Thank-You Popup Functions

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/* Enqueue css and js files
		
		wp_enqueue_style( 
			string           $handle, 
			string           $src = '', 
			array            $deps = array(), 
			string|bool|null $ver = false, 
			string           $media = 'all' 
		)
		
		wp_enqueue_script( 
			string           $handle, 
			string           $src = '', 
			array            $deps = array(), 
			string|bool|null $ver = false, 
			bool             $in_footer = false 
		)
		
		*/

/* Enqueue styles and scripts for Iris color picker on admin page

if (is_admin ()) {
	function ty_popup_enqueue_iris($hook_suffix) {
		//wp_enqueue_style('iris');
		//wp_enqueue_style('wp-color-picker');
		wp_enqueue_script('iris', admin_url('js/iris.js'), array('jquery', 'jquery-ui', 'jquery-ui-draggable', 'jquery-ui-slider', 'jquery-touch-punch'), false, 1);
		wp_enqueue_script('thank-you-popup-generator', plugin_dir_url( dirname( __FILE__ ) ) . 'admin/js/thank-you-popup-generator-admin.js', array('iris'), false, true);
	}
	add_action('admin_enqueue_scripts', 'ty_popup_enqueue_iris');
}

*/

function thank_you_popup_generator_enqueue_style() {
		
	wp_enqueue_style( 'thank-you-popup-generator-modal', plugin_dir_url( dirname( __FILE__ ) ) . 'public/css/thank-you-popup-generator-modal.css', array(), null, 'all' );
		
	wp_enqueue_script( 'thank-you-popup-generator', plugin_dir_url( dirname( __FILE__ ) ) . 'public/js/thank-you-popup-generator-modal.js', array(), null, true );
}	

add_action( 'wp_enqueue_scripts', 'thank_you_popup_generator_enqueue_style' );


// modal with custom thank you message
function ty_popup_custom_message( $ty_popup_message ) {
	
	$options = get_option( 'ty_popup_options', ty_popup_options_default() );
	
	if ( isset( $options['custom_ty_message'] ) && ! empty( $options['custom_ty_message'] ) ) {
		
		$ty_popup_message = wp_kses_post( $options['custom_ty_message'] ) . $ty_popup_message;
	}

	$ty_popup_inspirational_quote = 'There are no gardening mistakes, only experiments.';

	$ty_popup_inspirational_quote_author = 'Janet Kilburn Phillips';
	

		// check if user is allowed access
	if ( ! current_user_can( 'manage_options' ) ) return;
	
	?>
	
	<head>
	</head>
	<body>
  <!-- Modal -->
	<div class="modal fade" id="quotationModal" tabindex="-1" role="dialog" aria-labelledby="quotationModal" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header" id="ty-popup-modal-header">
        			<h4 class="modal-title" id="ty-popup-modal-quote"><?php echo esc_html($ty_popup_inspirational_quote); ?></h4>
        			<p class="modal-title" id="ty-popup-modal-author"><?php echo esc_html($ty_popup_inspirational_quote_author); ?></p>
        		</div>
      			<div class="modal-image">
      				<img src="../../../wp-content/plugins/thank-you-popup-generator/windowbox.jpg" alt="window box with flowers">
      			</div>
      			<div class="modal-body" id="ty-popup-modal-message">
        			<h6><?php echo esc_html($ty_popup_message); ?></h6>
      			</div>
      			<div class="modal-logo" id="ty-popup-modal-logo">
      				<img src="../../../wp-content/plugins/thank-you-popup-generator/urban-vine.png" alt="urban-vine logo">
      			</div>
      			<div class="modal-footer" id="ty-popup-modal-footer">
        			<button type="button" class="btn btn-secondary" id="ty-popup-modal-button" data-dismiss="modal">Close</button>
      			</div>
    		</div>
  		</div>
	</div>
	</body>

<?php
}

add_action( 'woocommerce_cart_emptied', 'ty_popup_custom_message' );