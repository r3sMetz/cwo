<?php
//Enable Menues
function register_cwo_menues() {
    $menuArray = array(
        'hauptmenue' => __('Hauptmenue'),
    );

    register_nav_menus($menuArray);
}
add_action('init','register_cwo_menues');

//Get Main Menu
function r3_getMenue($menu){
	return wp_get_nav_menu_items($menu);
}

