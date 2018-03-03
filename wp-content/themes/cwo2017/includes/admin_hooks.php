<?php

// Function to handle saved post
function cwo_member_saved($post_id,$post,$updated){
	if(get_post_type($post_id) === 'mitglieder'){
		//Setup Data
		$name_array = explode(' ',get_the_title($post_id));
		$args = array(
			'email' => get_field('email',$post_id),
			'first_name' => $name_array[1],
			'last_name' => $name_array[0],
			'gender' => 'm'
		);

		// Updated Post -> Update Mailinglist
		if ( $updated ) {
			return 0;
		}
		// New Member -> Add to Mailinglist
		else {
			TNP::add_subscriber( $args );
		}
	}
}

// Action Hook For Saved post
add_action('save_post','cwo_member_saved',10,3);

