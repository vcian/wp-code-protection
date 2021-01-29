<?php
/* 	Plugin Name: Source Code Protection
	Plugin URI: https://viitorcloud.com/blog/
	Description: It prevents common techniques in protecting your code from being stolen. 
	Version: 1.0.0
	Author:Viitorcloud
	Author URI:https://viitorcloud.com/ 
	*/   
/**
 * Basic plugin definitions 
 * 
 * @package Source Code Protection
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

global $wpdb; 
/**
 * Activation hook
 * 
 * Register plugin activation hook.
 * 
 * @package Source Code Protection
 * @since 1.0.0
 */
register_activation_hook( __FILE__, 'source_code_protection_install' );

/**
 * Deactivation hook
 *
 * Register plugin deactivation hook.
 * 
 * @package Source Code Protection
 * @since 1.0.0
 */
register_deactivation_hook( __FILE__, 'source_code_protection_uninstall' );

/**
 * Plugin Setup Activation hook call back 
 *
 * Initial setup of the plugin setting default options 
 * and database tables creations.
 * 
 * @package Source Code Protection
 * @since 1.0.0
 */
function source_code_protection_install() {
	
	global $wpdb;
		
}

/**
 * Plugin Setup (On Deactivation)
 *
 * Does the drop tables in the database and
 * delete  plugin options.
 *
 * @package Source Code Protection
 * @since 1.0.0
 */
function source_code_protection_uninstall() {
	
	global $wpdb;
			
}

/**
 * Plugin Setup (On Deactivation)
 *
 * Add attributes to body
 *
 * @package Source Code Protection
 * @since 1.0.0
 */
add_filter( 'body_class','source_code_protection_body_classes', 999 );
add_action('wp_head', 'source_code_protection_wp_head');

/* add class to body tag */
function source_code_protection_body_classes( $classes )
{
    $classes[] = '" spy="scroll" oncontextmenu="return false;';

    return $classes;
}
/**
 * Plugin Setup (On Deactivation)
 *
 * Add script to add security
 *
 * @package Source Code Protection
 * @since 1.0.0
 */
function source_code_protection_wp_head(){ ?>
<script type='text/javascript'>
document.onkeydown = function(e) {
    if(e.keyCode == 123) {
        return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
        return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
        return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'K'.charCodeAt(0)){
        return false;
    }
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
        return false;
    }
    if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){
        return false;
    }
    if(e.ctrlKey && e.keyCode == 'C'.charCodeAt(0)){
        return false;
    }
    if(e.ctrlKey && e.keyCode == 'V'.charCodeAt(0)){    
        return false;
    }
    if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)){
        return false;
    }
    if(e.ctrlKey && e.keyCode == 'P'.charCodeAt(0)){
        return false;
    }
}
</script>
<?php } ?>