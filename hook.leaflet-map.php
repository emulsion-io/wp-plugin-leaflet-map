<?php
/**
 * Leaflet Map Class File
 * 
 * @category Admin
 * @author   Benjamin J DeLong <ben@bozdoz.com>
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}


/**
 * 
 * Add filter for default str_replace popup content for fix error with some themes integration
 * 
 * Enfold - Avia Theme add double br tag in popup content.
 * 
 * @author Fabrice Simonet <fabrice@emulsion.io>
 * 
 */

/*
   Add this in functions.php for fix <br> added in avia enfold.

   function leaflet_parsecustom( $message ) {
      return  str_replace(array("\r\n", "\n", "\r"), ' ', $message);
   }
   add_filter( 'leaflet_marker_popup_content_html', 'leaflet_parsecustom', 12, 1 );
*/

/**
 * default function call if no filter found in functions.php
 */
function leaflet_parsecustom_default( $message ) {
   return str_replace(array("\r\n", "\n", "\r"), '<br>', $message);
}
add_filter( 'leaflet_marker_popup_content_html', 'leaflet_parsecustom_default', 20, 1 );

/**
 * default function call if no filter found in functions.php
 */
function leaflet_parsecustom_geojson_default( $message ) {
   return str_replace(array("\r\n", "\n", "\r"), '<br>', $message);
}
add_filter( 'leaflet_marker_popup_geojson_content_html', 'leaflet_parsecustom_geojson_default', 20, 1 );