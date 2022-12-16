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

add_action('admin_menu', 'core');
function core(){
 add_menu_page('DİJİTALKA','DİJİTALKA', 'manage_options', 'dijitalka', 'first');
	function first()
	{
		echo "Ayarlar";
	}
}
?>