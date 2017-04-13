<?php

//Get Image Path from Theme Director
function cwo_theImagePath( $image ) {
	echo get_template_directory_uri().'/assets/img/'.$image;
}
