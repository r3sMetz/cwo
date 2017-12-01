<?php

function add_post_type_galerien(){
	register_post_type('galerien',
			array(
					'labels'=>array(
							'name'=>'Galerien',
							'singular_name'=>'Galerie',
							'add_new'=>'Neue Galerie anlegen',
							'add_new_item'=>'Neue Galerie anlegen',
							'edit_item'=>( 'Galerie Bearbeiten' ),
							'all_items'=>'Alle Galerien',
					),
					'public' => true,  // it's public, it should have it's own permalink, and so on
					'publicly_queriable' => true,  // you should be able to query it
					'show_ui' => true,  // you should be able to edit it in wp-admin
					//'exclude_from_search' => true,  // you should exclude it from search results
					//'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
					'has_archive' => false,  // it shouldn't have archive page
					'menu_icon'=>'dashicons-format-gallery',
					'show_in_rest' => true,
					'supports'=>array(
						'title',
					),
			)
	);
}
add_action('init','add_post_type_galerien');
