<?php
function cwo_getAllEvents(){
	$today = date('d.m.Y');
	$all_events = r3_query_meta('veranstaltungen','datum');
	$return_events = array();

	foreach ($all_events as $event){

		$event->date_array = cwo_buildEventDate($event->ID);
		if(strtotime(get_field('datum',$event->ID)) >= strtotime($today))
			$return_events["coming"][] = $event;
		else
			$return_events["past"][] = $event;
	}

	return $return_events;
}

function cwo_nextEvent(){
	$all_events = cwo_getAllEvents()["coming"];
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
	return array(date('d',$data_time),date('M',$data_time),date('Y',$data_time));
}

function cwo_knaupTitle($id){
	$search  = array('um Otz','15 Jahre');
	$replace = array('um &ensp;Otz','<br class="hidden-xs"/>15 Jahre');
	return str_replace($search,$replace,get_the_title($id));
}

function cwo_knaupWYSIWYG($text){
	$search = array('<h1>','<h2>','<h3>','<h4>');
	$replace = array(
		'<h1 class="font-demon fontsize-headline gap-top-md gap-bottom-sm">',
		'<h2 class="font-demon fontsize-headline gap-top-md gap-bottom-sm">',
		'<h3 class="font-demon fontsize-headline gap-top-md gap-bottom-sm">',
		'<h4 class="font-demon fontsize-headline gap-top-md gap-bottom-sm">'
		);

	return str_replace($search,$replace,$text);
}
