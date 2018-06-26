<?php
/**
  * @package eyalb
  * includes/back/templates/csseco-footer-opts.php
  *
  */
?>

<h1>CSSeco Theme</h1>

<?php

	function eyalb_footer_options() {}

	function eyalb_flogo() {
		$flogoPct = esc_attr( get_option( 'flogo' ) );
		if ( empty( $flogoPct ) ) {
			echo '<input type="button" value="Upload logo" id="uploadButton" class="button button-secondary" />';
			echo '<input type="button" value="Remove logo" id="removeButton" class="button button-secondary" disabled />';
			echo '<img id="previewLogo" src="'.get_template_directory_uri().'/imgs/No_Image_Available.gif" alt="Logo Preview" />';
		} else {
			echo '<input type="button" value="Replace logo" id="uploadButton" class="button button-secondary" />';
			echo '<input type="button" value="Remove logo" id="removeButton" class="button button-secondary" />';
			echo '<img id="previewLogo" src="' . $flogoPct . '" alt="Logo Preview" />';
		}
		echo '<input type="hidden" name="flogo" value="' . $flogoPct . '" id="siteLogoB" />';
	}

	function eyalb_fabout() {
		$abus = get_option( 'fabout_us' );
		echo '<textarea name="fabout_us" class="code" cols="50" rows="10">' . $abus . '</textarea>';
		echo '<p class="description">You can use HTML tags!</p>';
	}

	function eyalb_sm() {
		echo 'Edit social media <a href="admin.php?page=csseco_theme_options_page">here</a>!';
	}

?>


<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php 
		settings_fields( 'eyalb-footer-group' );
		do_settings_sections( 'csseco_theme_footer_page' );
		submit_button(); 
	?>
</form>