<div id="the_gallery_overlay" class="single-galerien_overlay">
    <span id="close_galery" class="fontsize-bigger font-heat">Schließen</span>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 pos-rel">
                <span class="slide_nav nav_left hidden-xs"><i class="glyphicon glyphicon-menu-left"></i></span>
                <span class="slide_nav nav_right hidden-xs"><i class="glyphicon glyphicon-menu-right"></i></span>
                <div id="the_galery_slider">
					<?php foreach ( get_field( 'galerie_verwalten' ) as $image ): ?>
                        <img class="maxImage pull-left" src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>">
					<?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
