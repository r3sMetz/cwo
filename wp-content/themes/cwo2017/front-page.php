<?php
/** HTML Begin **/
get_template_part( 'modules/html_begin' );

/** Modal **/
get_template_part('modules/cwo_modal');

/*** Navbar ***/
get_template_part( 'modules/navbar' );

/** Header ***/
get_template_part( 'partials/front-page/front-page_header' );

/** Next Event **/
get_template_part('partials/front-page/front-page_nextEvent');

/** History  ***/
get_template_part( 'partials/front-page/front-page_history' );

/** HeadQuarter **/
//get_template_part( 'partials/front-page/front-page_hq' );

/** Kontakt **/
get_template_part( 'partials/front-page/front-page_kontakt' );

/** Footer  **/
get_template_part( 'modules/cwo_footer' );

/** HTML End **/
get_template_part( 'modules/html_end' );
