<?php
/*
Plugin Name: Dijitalka Core
Plugin URI: https://dijitalka.com/
Description: Dijitalka ürünlerini kullanmak için yapılan ana eklentidir. Ayarlarınızı ve diğer özellik işlemlerinizi bu alandan yapabilirsiniz
Version: 1.0
Author: DijitalKA
Author URI: https://dijitalka.com/
License: GNU
*/
require_once 'pages/index.php';

add_action('admin_menu', 'core');
function core(){
 add_menu_page('DİJİTALKA','DİJİTALKA', 'manage_options', 'dijitalka', 'first');
	function first()
	{
        coreSettings();
	}
	function tableCreat()
	{
		 global $wpdb;
		 $charset = $wpdb->get_charset_colate();
		 $tableName = "dijitalka_core";
		 $sql = "
		 CREATE TABLE $tableName (
		     id mediumint(9) NOT NULL AUTO_INCREMENT,
		     token VARCHAR(500) NOT NULL,
		     islemLink VARCHAR(500) NOT NULL,
		     uLink VARCHAR(500) NOT NULL,
		     paylasim VARCHAR(500) NOT NULL,
		     durum VARCHAR(500) DEFAULT 1 NOT NULL
		      UNIQUE KEY id (id))$charset";
		 require_once ABSPATH."wp-admin/includes/upgrade.php";
		 dbDelta($sql);
	}
}
?>