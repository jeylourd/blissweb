<?php
/**
 * Plugin Name: jlurd Tile View Maker
 * Description: My First Wordpress Plugin
 * Author: Jeylourd T. Alcontin
 * Author URI: https://alcontinj.blissweb.info
 * Version: 1.0.0 
 * Text Domain: Tile-View-Maker
 * 
 * */  

 if( !defined('ABSPATH') ){
    echo 'Something is not normal here';
    exit;
 }

define('CRUD_PLUGIN_URL', plugin_dir_url( __FILE__ ));
define('CRUD_PLUGIN_PATH', plugin_dir_path( __FILE__ ));
register_activation_hook(__FILE__, 'crudOperationsTable1',);
register_activation_hook(__FILE__, 'crudOperationsTable2',);
//register_deactivation_hook( __FILE__, 'deactivate_crud_plugin_function' );
function crudOperationsTable1() {
  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();
  $table_name1 = $wpdb->prefix . 'jlurd_tile_view_maker';
  $sql = "CREATE TABLE IF NOT EXISTS `$table_name1` (
    `tileview_id` int(11) NOT NULL AUTO_INCREMENT,
    `category_id` int(11) NOT NULL,
    `name` varchar(220) DEFAULT NULL,
    `position` varchar(2000) DEFAULT NULL,
    `bionote_link` int(220) DEFAULT NULL,
    `tile_column_number` int(11) DEFAULT NULL,
    `featured_photo` varchar(220) DEFAULT NULL,
    `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `modified_date` datetime NOT NULL,
    `created_by_user_id` int(11) NOT NULL,
    `modified_by_user_id` int(11) NOT NULL,
    PRIMARY KEY (`tileview_id`)
  ) {$charset_collate}";

  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name1'") != $table_name1) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }
}
function crudOperationsTable2() {
  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();
  $table_name2 = $wpdb->prefix . 'jlurd_tileview_maker_category';
  $sql = "CREATE TABLE IF NOT EXISTS `$table_name2` (
          `tileview_category_id` int(11) NOT NULL AUTO_INCREMENT,
          `category_name` varchar(220) DEFAULT NULL,
          `cat_description` varchar(1000) NOT NULL,
          `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
          `modified_date` datetime NOT NULL,
          `created_by_user_id` int(11) NOT NULL,
          `modified_by_user_id` int(11) NOT NULL,
          PRIMARY KEY (`tileview_category_id`)
        ){$charset_colate}";

  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name2'") != $table_name2) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
  }
}

// function deactivate_crud_plugin_function() {
//   global $wpdb;
//   $sql = "DROP TABLE `wp_jlurd_tileview_maker_category`, `wp_jlurd_tile_view_maker`";
//   $wpdb->query($sql);
// }


function load_custom_css_js() {
  
  //wp_enqueue_style( 'my_custom_css' );
  wp_enqueue_script( 'script1', CRUD_PLUGIN_URL. '/js/jlurd_scripts.js' ,false , null);
  wp_enqueue_style( 'bootstrap_v5_css1', CRUD_PLUGIN_URL.'bootstrap/npm/bootstrap@5.3.3/dist/css/bootstrap.css',false , null );
  wp_enqueue_style( 'bootstrap_icons_css1', CRUD_PLUGIN_URL.'bootstrap/node_modules/bootstrap-icons/font/bootstrap-icons.css',false , null );
  wp_enqueue_script( 'bootstrap_v5_js1', CRUD_PLUGIN_URL.'bootstrap/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' ,false , null);
  wp_enqueue_script( 'bootstrap_v5_js2', CRUD_PLUGIN_URL.'bootstrap/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js' ,false , null);
  //wp_enqueue_script( 'my_custom_script2', CRUD_PLUGIN_URL. '/js/jQuery.min.js' );
  //wp_localize_script( 'script1', 'ajax_var', array( 'ajaxurl' => admin_url('Main.php') ));
}
add_action('admin_menu', 'addAdminPageContent');
add_action( 'admin_enqueue_scripts', 'load_custom_css_js' );
add_action( 'wp_enqueue_scripts', 'load_custom_css_js' );
function addAdminPageContent() {
    add_menu_page(
                    'Tile View Maker', //WP  tab title
                    'Tile View Maker', //WP side bar menu title
                    'manage_options', 
                    'new-entry', 
                    'crudAdminPage' );
    add_submenu_page(
                      'new-entry', //name sa page nga parent
                      'Profile Contents', 
                      'Tile View Category', 
                      'manage_options', 
                      'view-profiles', 
                      'ViewtileCategory' 
                    );   
    wp_enqueue_media(); // Make sure media scripts are loaded

}
function crudAdminPage() {
  require_once(CRUD_PLUGIN_PATH.'/templates/crud.php');
}


function ViewtileCategory(){ 
    require_once(CRUD_PLUGIN_PATH.'/templates/tileviewmaker_category.php');
}

function tileViewMakerDisplay($attr){

  require_once(CRUD_PLUGIN_PATH.'templates/shortcode.php');             
}
add_shortcode('tileViewDisplay', 'tileViewMakerDisplay');