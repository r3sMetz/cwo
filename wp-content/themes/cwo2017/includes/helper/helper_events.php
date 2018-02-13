<?php
function cwo_getAllEvents(){
	$today = date('d.m.Y');
	$all_events = r3_query_meta('veranstaltungen','datum');
	$return_events = array();

	foreach ($all_events as $event){

		if(strtotime(get_field('datum',$event->ID)) >= strtotime($today)) {
			$event->data_array = cwo_buildEventDate($event->ID);
			$return_events[] = $event;
		}
	}

	return $return_events;
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

function cwo_buildEventDate($id){
	$data_time    = strtotime(get_field('datum',$id));
	return array(date('d',$data_time),date('M',$data_time));
}

function cwo_knaupTitle($id){
	$search  = array('um Otz','15 Jahre');
	$replace = array('um &ensp;Otz','<br class="hidden-xs"/>15 Jahre');
	return str_replace($search,$replace,get_the_title($id));
}
