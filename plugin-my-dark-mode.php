<?php

  // Plugin name: My Dark Mode
  // Description: Activate dark mode for platzicpw theme
  // version: 1.0
  // Author: Yo mero
  // Author URI: https://github.com/yomero

  function load_styles_for_my_plugin(){
    $style_url = plugin_dir_url(__FILE__);

    wp_enqueue_style('my_dark_mode',$style_url.'/assets/css/style.css','','1.0','all');
  }

  add_action('wp_enqueue_scripts','load_styles_for_my_plugin');
  
?>