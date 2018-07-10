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
;?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php while(have_posts()):the_post();?>
				<?php the_content();?>
			<?php endwhile;?>
		</div>
	</div>
</div>
<?php
/*** Footer ***/
get_template_part('modules/cwo_footer');

/** HTML End **/
get_template_part( 'modules/html_end' );