<?php
$all_plans = get_field('dienstplane_verwalten');
$is_active = get_field('dienstplan_aktivieren');

// If plans are active AND there is only one plan
if(count($all_plans) === 1 && $is_active){
	// Redirect to the plan
	header('Location: ' . $all_plans[0]['datei'], true,  302);
}

// If plans are active AND there are more then one plans
else if(count($all_plans) > 1 && $is_active){
	// Render Page
	/** HTML Begin **/
	get_template_part( 'modules/html_begin' );

	/*** Navbar ***/
	get_template_part( 'modules/navbar' );

	/*** Eventheader ***/
	get_template_part('modules/cwo_eventheader');

	get_template_part('partials/page-dienstplan/page-dienstplan_content');

	/*** Footer ***/
	get_template_part('modules/cwo_footer');

	/** HTML End **/
	get_template_part( 'modules/html_end' );

}

else {
	// Redirect to home
	header('Location: ' . home_url(), true,  302);
}
