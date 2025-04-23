<?php
//installation and uninstallation hooks wordpress
register_activation_hook ( NS_FILE , ‘clients_ns_install’ );
register_deactivation_hook ( NS_FILE , ‘clients_ns_deactivate’ );
register_deactivation_hook ( NS_FILE , ‘clients_ns_uninstall’ ); //uninstall hook wordpress (delete all data)
function clients_ns_install(){
global $wpdb;
$table_name = $wpdb -> prefix . ‘clients_ns’ ;
$sql = “ CREATE TABLE $table_name (
id mediumint( 9 ) NOT NULL AUTO_INCREMENT,
yam varchar ( 255 ) NOT NULL ,
email varchar ( 255 ) NOT NULL ,
country varchar ( 255 ) NOT NULL ,
PRIMARY KEY (id)
); “ ;
require_once ( ABSPATH . ‘wp-admin/includes/upgrade.php’ );
dbDelta ($sql);
}
function clients_ns_uninstall(){
global $wpdb;
$table_name = $wpdb -> prefix . ‘clients_ns’ ;
$wpdb -> query( “DROP TABLE IF EXISTS $table_name “ );
}
function clients_ns_deactivate(){
//nothing
}