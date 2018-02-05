<?php
/*
 * Template Name: Single Event
 */

/** HTML Begin **/
get_template_part( 'modules/html_begin' );

/*** Navbar ***/
get_template_part( 'modules/navbar' );

/*** Eventheader ***/
get_template_part('modules/cwo_eventheader');

/*** Content ***/
get_template_part('partials/single-veranstaltungen/single-veranstaltungen_content');

/*** Footer ***/
get_template_part('modules/cwo_footer');

/** HTML End **/
get_template_part( 'modules/html_end' );