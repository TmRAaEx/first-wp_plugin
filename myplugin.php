<?php
/**
 * Plugin Name: Myplugin
 * Description: Testing plugin creation with mounted volume, and with git


*/

function hook_msg()
{
    echo "<p>Thank you for visiting our site!</p>";
}

add_action("message", "hook_msg");  


require_once plugin_dir_path(__FILE__) . 'books.php';   