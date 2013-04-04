<?php

// Set default options

$default = array( 'titles' => 'Vine', 'id' => '', 'size' => 600, 'type' => 'simple' );
$instance = wp_parse_args( ( array ) $instance, $default );

// Widget Title field

$field_id = $this -> get_field_id( 'titles' );
$field_name = $this -> get_field_name( 'titles' );
echo "\r\n" . '<p><label for="' . $field_id . '">' . __( 'Widget Title', 'artiss-vine-embed' ) . ': </label><input type="text" class="widefat" id="' . $field_id . '" name="' . $field_name . '" value="' . attribute_escape( $instance[ 'titles' ] ).'" /></p>';

// Video ID field

$field_id = $this -> get_field_id( 'id' );
$field_name = $this -> get_field_name( 'id' );
echo "\r\n" . '<p><label for="' . $field_id . '">' . __( 'Video ID', 'artiss-vine-embed' ) . ': </label><input type="text" class="widefat" id="' . $field_id . '" name="' . $field_name . '" value="' . attribute_escape( $instance[ 'id' ] ) . '" /></p>';

// Video size

$field_id = $this -> get_field_id( 'size' );
$field_name = $this -> get_field_name( 'size' );
echo "\r\n" . '<p><label for="' . $field_id . '">' . __( 'Size', 'artiss-vine-embed' ) . ': </label><input size=3 maxlength=3 type="text" id="' . $field_id . '" name="' . $field_name . '" value="' . attribute_escape( $instance[ 'size' ] ) . '" />px</p>';

// Embed type field

$field_id = $this -> get_field_id( 'type' );
$field_name = $this -> get_field_name( 'type' );
echo "\r\n" . '<p><label for="' . $field_id . '">' . __( 'Embed Type', 'artiss-vine-embed' ) . ': </label>
<select name="' . $field_name . '" id="' . $field_id . '"><option value="simple"';
if ( attribute_escape( $instance[ 'type' ] ) == 'simple' ) { echo " selected='selected'"; }
echo '>' . __( 'Simple', 'artiss-vine-embed' ) . '</option><option value="postcard"';
if ( attribute_escape( $instance[ 'type' ] ) == 'postcard' ) { echo " selected='selected'"; }
echo '>' . __( 'Postcard', 'artiss-vine-embed' ) . '</option></select></p>';
?>