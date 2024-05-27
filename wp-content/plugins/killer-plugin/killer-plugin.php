<?php
/*
 Plugin Name: Killer Plugin
 Description: A plugin that kills your site.
 Version: 1.0
 Author: Your Name
*/

function kill_site() {
    wp_die('You killed your site');
}
register_activation_hook(__FILE__, 'kill_site');
