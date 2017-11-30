<?php

function add_post_type_veranstaltungen(){
	register_post_type('veranstaltungen',
			array(
					'labels'=>array(
							'name'=>'Veranstaltungen',
							'singular_name'=>'Veranstaltung',
							'add_new'=>'Neue Veranstaltung anlegen',
							'add_new_item'=>'Neue Veranstaltung anlegen',
							'edit_item'=>( 'Veranstaltung Bearbeiten' ),
							'all_items'=>'Alle Veranstaltungen',
					),
					'public' => true,  // it's public, it should have it's own permalink, and so on
					'publicly_queriable' => true,  // you should be able to query it
					'show_ui' => true,  // you should be able to edit it in wp-admin
					//'exclude_from_search' => true,  // you should exclude it from search results
					//'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
					'has_archive' => false,  // it shouldn't have archive page
					'menu_icon'=>'dashicons-universal-access',
					'supports'=>array(
						'title',
					),
			)
	);
}
add_action('init','add_post_type_veranstaltungen');
