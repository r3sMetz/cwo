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
	// TODO: Render Page if there are more then one plans
}

else {
	// Redirect to home
	header('Location: ' . home_url(), true,  302);
}
