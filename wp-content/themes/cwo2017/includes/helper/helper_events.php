<?php
function cwo_getAllEvents(){
	return r3_query_meta('veranstaltungen','datum');
}

function cwo_nextEvent(){
	$all_events = cwo_getAllEvents();
	if($all_events)
		return $all_events[0]->ID;
	else
		return false;
}

function cwo_buildList($listname,$id){
	$list_string = get_field($listname,$id);

	//Replace Keywords into strong Tags if infoblock_1
	if($listname === 'infoblock_1'){
		$list_string = str_replace('Einlass','<strong>Einlass</strong>',$list_string);
		$list_string = str_replace('Beginn','<strong>Beginn</strong>',$list_string);
		$list_string = str_replace('Eintritt','<strong>Eintritt</strong>',$list_string);
	}


	return explode("\n",$list_string);
}

