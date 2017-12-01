<?php
	function cwo_get_chunked_hq(){
		$hq_array = array();
		while(have_rows('alle_vorstandsmitglieder')) {
			the_row();

			//Replacement
			$name_search  = array('ä','ö','ü');
			$name_replace = array('ae','oe','ue');

			$hq_array[] = array(
				'name'     => str_replace($name_search,$name_replace,get_the_title(get_sub_field('mitglied'))),
				'position' => get_sub_field('position'),
				'bild'     => get_sub_field('bild'),
			);
		}
		return array_chunk($hq_array,4);
	}