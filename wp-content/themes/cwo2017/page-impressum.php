<?php
/*
 * Template Name: Impressum
 */

/** HTML Begin **/
get_template_part( 'modules/html_begin' );

/*** Navbar ***/
get_template_part( 'modules/navbar' );

/*** Eventheader ***/
get_template_part('modules/cwo_eventheader');

/*** Content ***/
get_template_part('partials/page-impressum/page-impressum_content');

/*** Footer ***/
get_template_part('modules/cwo_footer');

/** HTML End **/
get_template_part( 'modules/html_end' );