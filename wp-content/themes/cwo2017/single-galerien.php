<?php
/*
 * Template Name: Galerie
 */

/** HTML Begin **/
get_template_part( 'modules/html_begin' );

/*** Navbar ***/
get_template_part( 'modules/navbar' );

/*** Overlay ***/
get_template_part('partials/single-galerien/single-galerien_overlay');

/** Header **/
get_template_part('partials/page-bilder/page-bilder_header');

/** Content **/
get_template_part('partials/single-galerien/single-galerien_content');

/** Footer **/
get_template_part('modules/cwo_footer');


/** HTML End **/
get_template_part( 'modules/html_end' );