<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_filter('use_block_editor_for_post', '__return_false');