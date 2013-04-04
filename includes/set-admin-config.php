<?php
/**
* Admin Config Functions
*
* Various functions relating to the various administration screens
*
* @package	Artiss-Vine-Embed
*/

/**
* Add meta to plugin details
*
* Add options to plugin meta line
*
* @since	1.0
*
* @param	string  $links	Current links
* @param	string  $file	File in use
* @return   string			Links, now with settings added
*/

function ave_set_plugin_meta( $links, $file ) {

	if ( strpos( $file, 'artiss-vine-embed.php' ) !== false ) {

		$links = array_merge( $links, array( '<a href="http://www.artiss.co.uk/donate">' . __( 'Donate', 'artiss-vine-embed' ) . '</a>' ) );
		$links = array_merge( $links, array( '<a href="http://wordpress.org/support/plugin/artiss-vine-embed">' . __( 'Support', 'artiss-vine-embed' ) . '</a>' ) );

	}

	return $links;
}

add_filter( 'plugin_row_meta', 'ave_set_plugin_meta', 10, 2 );

/**
* Detect plugin activation
*
* Upon detection of activation set an option with the current version in it
* This is for potential use in future to identify which version is being
* upgraded from
*
* @since	1.0
*/

function ave_plugin_activate() {

	update_option( 'ave_version', artiss_vine_embed_version );

}

register_activation_hook( WP_PLUGIN_DIR . '/artiss-vine-embed/artiss-vine-embed.php', 'ave_plugin_activate' );
?>