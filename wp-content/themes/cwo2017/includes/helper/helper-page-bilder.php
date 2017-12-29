<?php
function cwo_getGaleries(){
	$galery_array = r3_query_meta('galerien','datum','DSC');
	$return_array  = array();

	foreach ($galery_array as $galery){
		$datum_array = explode('/',get_field('datum',$galery->ID));
		$return_array[] = array(
			'title' => get_the_title($galery->ID),
			'thumb' => get_field('titelbild',$galery->ID)['sizes']['thumbnail'],
			'year'  => $datum_array[0],
			'month' => $datum_array[1],
			'url'   => get_permalink($galery->ID)
		);
		$return_array[] = array(
			'title' => get_the_title($galery->ID),
			'thumb' => get_field('titelbild',$galery->ID)['sizes']['thumbnail'],
			'year'  => $datum_array[0],
			'month' => $datum_array[1],
			'url'   => get_permalink($galery->ID)
		);
		$return_array[] = array(
			'title' => get_the_title($galery->ID),
			'thumb' => get_field('titelbild',$galery->ID)['sizes']['thumbnail'],
			'year'  => $datum_array[0],
			'month' => $datum_array[1],
			'url'   => get_permalink($galery->ID)
		);
		$return_array[] = array(
			'title' => get_the_title($galery->ID),
			'thumb' => get_field('titelbild',$galery->ID)['sizes']['thumbnail'],
			'year'  => $datum_array[0],
			'month' => $datum_array[1],
			'url'   => get_permalink($galery->ID)
		);
	}

	return $return_array;
}
