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

function menueActive($itemID,$pageId){
	if($itemID == $pageId)
		echo "navactive";

	//Single Event
	elseif($itemID == 13 && get_post_type($pageId) === 'veranstaltungen')
		echo "navactive";

	//Single Galerie
	elseif($itemID == 15 && get_post_type($pageId) === 'galerien')
		echo "navactive";
}

