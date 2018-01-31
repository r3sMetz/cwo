<?php
/*
 * Template Name: Events
 */

/** HTML Begin **/
get_template_part( 'modules/html_begin' );

/*** Navbar ***/
get_template_part( 'modules/navbar' );

/*** Eventheader ***/
get_template_part('modules/cwo_eventheader');

get_template_part('partials/page-events/page-events_content');

/*** Footer ***/
get_template_part('modules/cwo_footer');

/** HTML End **/
get_template_part( 'modules/html_end' );