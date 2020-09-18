<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
/**
 * Dolcelux functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Dolcelux
 * @since Dolcelux 1.0
 */

/**
 * Dolcelux only works in WordPress 4.7 or later.
 */

#enqueue style
require get_template_directory().'/func-change/func-add/func-scirpts.php';

#ID's in admin panel
require get_template_directory().'/func-change/func-add/func-admin-ids.php';

#remove guttenberg
require get_template_directory().'/func-change/func-remove/func-remove.php';

#carbon fields
add_action( 'carbon_fields_register_fields', 'dolcelux_register_carbon_fields' );
function dolcelux_register_carbon_fields() {
    require get_template_directory() . '/func-change/func-add/func-carbon-fields.php';
}

#ajax scroll posts
require  get_template_directory() . '/ajax_template/ajax-template.php';

#menu
require  get_template_directory() . '/menu_template/sidebar-menu.php';


