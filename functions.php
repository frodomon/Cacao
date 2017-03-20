<?php
  define('DOHKO_DIR', get_template_directory_uri());
  define('DOHKO_TEMPLATE_DIR', get_template_directory());
  define('IMAGES', DOHKO_DIR."/img"); 
  define('INCLUDES2', DOHKO_DIR."/includes"); 
  define('INCLUDES', DOHKO_TEMPLATE_DIR."/includes"); 
  define('JAVASCRIPTS', DOHKO_DIR."/js");
  
  require_once(INCLUDES.'/scripts.php');

  require_once(INCLUDES.'/settings/menus.php');
  require_once(INCLUDES.'/settings/sidebars.php');
  require_once(INCLUDES.'/settings/thumbnails.php');
  require_once(INCLUDES.'/settings/excerpt.php');

  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'index_rel_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
?>