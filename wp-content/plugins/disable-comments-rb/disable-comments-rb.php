<?php
/*
Plugin Name: Disable Comments RB
Plugin URI: https://robosoft.co/wordpress-plugins/disable-comments
Description: Easy tool to disable comments for your blog posts, pages. Admin can disable comments in just few clicks. Delete comments from blog post. 
Version: 1.0.22
Author: rbPlugins
Author URI: https://robosoft.co/wordpress-plugins/disable-comments
License: GPL2
Text Domain: disable-comments-rb
Domain Path: /languages/
*/

if (!defined('WPINC') || !defined("ABSPATH")) {
    die();
}
define("RB_DISABLE_COMMENTS_PATH", plugin_dir_path(__FILE__));
define("RB_DISABLE_COMMENTS_VERSION", '1.0.22');

include_once(RB_DISABLE_COMMENTS_PATH .'classDisableComments.php');

classDisableComments::get_instance();
