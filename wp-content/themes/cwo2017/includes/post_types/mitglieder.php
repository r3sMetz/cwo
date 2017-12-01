<?php

function add_post_type_mitglieder(){
	register_post_type('mitglieder',
			array(
					'labels'=>array(
							'name'=>'Mitglieder',
							'singular_name'=>'Mitglied',
							'add_new'=>'Neues Mitglied anlegen',
							'add_new_item'=>'Neues Mitglied anlegen',
							'edit_item'=>( 'Mitglied Bearbeiten' ),
							'all_items'=>'Alle Mitglieder',
					),
					'public' => flase,  // it's public, it should have it's own permalink, and so on
					'publicly_queriable' => true,  // you should be able to query it
					'show_ui' => true,  // you should be able to edit it in wp-admin
					//'exclude_from_search' => true,  // you should exclude it from search results
					//'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
					'has_archive' => false,  // it shouldn't have archive page
					'menu_icon'=>'dashicons-groups',
					'show_in_rest' => true,
					'supports'=>array(
						'title',
					),
			)
	);
}
add_action('init','add_post_type_mitglieder');
