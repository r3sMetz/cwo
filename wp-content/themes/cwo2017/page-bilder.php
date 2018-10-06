<?php
/*
 * Template Name: Galerien Übersicht
 */

/** HTML Begin **/
get_template_part( 'modules/html_begin' );

/*** Navbar ***/
get_template_part( 'modules/navbar' );

/** Header **/
get_template_part('partials/page-bilder/page-bilder_header');

/** Content ***/
get_template_part( 'partials/page-galerie/page-galerie_content');

/** Footer **/
get_template_part('modules/cwo_footer');


/** HTML End **/
get_template_part( 'modules/html_end' );