<?php
$avada_theme = wp_get_theme();
if($avada_theme->parent_theme) {
    $template_dir =  basename(get_template_directory());
    $avada_theme = wp_get_theme($template_dir);
}
$avada_version = $avada_theme->get( 'Version' );
$avada_options = get_option( 'Avada_Key' );
$registration_complete = false;
$tf_username = isset( $avada_options[ 'tf_username' ] ) ? $avada_options[ 'tf_username' ] : '';
$tf_api = isset( $avada_options[ 'tf_api' ] ) ? $avada_options[ 'tf_api' ] : '';
$tf_purchase_code = isset( $avada_options[ 'tf_purchase_code' ] ) ? $avada_options[ 'tf_purchase_code' ] : '';
if( $tf_username !== "" && $tf_api !== "" && $tf_purchase_code !== "" ) {
	$registration_complete = true;
}
$theme_fusion_url = 'https://theme-fusion.com/';
?>
<div class="wrap about-wrap avada-wrap">
	<h1><?php echo __( "Welcome to Avada!", "Avada" ); ?></h1>

	<div class="updated registration-notice-1" style="display: none;"><p><strong><?php echo __( "Thanks for registering your purchase. You will now receive the automatic updates.", "Avada" ); ?> </strong></p></div>

	<div class="updated error registration-notice-2" style="display: none;"><p><strong><?php echo __( "Please provide all the three details for registering your copy of Avada.", "Avada" ); ?>.</strong></p></div>

	<div class="updated error registration-notice-3" style="display: none;"><p><strong><?php echo __( "Something went wrong. Please verify your details and try again.", "Avada" ); ?></strong></p></div>

	<div class="about-text"><?php echo __( "Avada is now installed and ready to use!  Get ready to build something beautiful. Please register your purchase to get support and automatic theme updates. Read below for additional information. We hope you enjoy it! <a href='//www.youtube.com/embed/dn6g_gJDAIk?rel=0&TB_iframe=true&height=540&width=960' class='thickbox' title='Guided Tour of Avada'>Watch Our Quick Guided Tour!</a>", "Avada" ); ?></div>
    <div class="avada-logo"><span class="avada-version"><?php echo __( "Version", "Avada" ); ?> <?php echo $avada_version; ?></span></div>
	<h2 class="nav-tab-wrapper">
    	<?php
		printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'admin.php?page=avada-demos' ), __( "Install Demos", "Avada" ) );
        printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'admin.php?page=avada-plugins' ), __( "Plugins", "Avada" ) );
        printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'admin.php?page=avada-system-status' ), __( "System Status", "Avada" ) );
		?>
	</h2>
<!--    <p class="about-description"><span class="dashicons dashicons-admin-network avada-icon-key"></span><?php echo __( "Your Purchase Must Be Registered To Receive Theme Support & Auto Updates", "Avada" ); ?></p> -->
	<div class="avada-registration-steps">
    	
        <!--<div class="start_registration_button">
        	 <?php printf( '<a href="%s" class="button button-large button-primary avada-large-button" target="_blank">%s</a>', $theme_fusion_url . 'support/',  __( "Start Registration Now!", "Avada" ) ); ?>
        </div>-->
    </div>
    <div class="feature-section">
		
	</div>
    <div class="avada-thanks">
    	<p class="description"><?php echo __( "Thank you for choosing Avada. We are honored and are fully dedicated to making your experience perfect.", "Avada" ); ?></p>
    </div>
</div>
