<div class="single-galerien_content fullPageElement flexed_center bg-std bg-fired puffer-both-xl margin-top-mobile">
	<div class="container">
		<!-- Big Slider (Top) -->
		<div class="row gap-bottom-md">
			<div class="col-md-12">
				<div class="the_big_slider galery_slider">
				<?php foreach(get_field('galerie_verwalten') as $image):?>
					<img class="pull-left maxImage" src="<?php echo $image['url'];?>" alt="<?php the_title();?>">
				<?php endforeach;?>
				</div>
			</div>
		</div>

		<!-- Small Slider (Bottom) -->
		<div class="row pos-rel">
			<div class="col-md-12 the_small_slider galery_slider">
				<?php foreach(get_field('galerie_verwalten') as $image):?>
					<img class="pull-left maxImage" src="<?php echo $image['url'];?>" alt="<?php the_title();?>">
				<?php endforeach;?>
			</div>
			<i class="glyphicon glyphicon-menu-left slider_nav prev_slide fontsize-headline-big"></i>
			<i class="glyphicon glyphicon-menu-right slider_nav next_slide fontsize-headline-big"></i>
		</div>
	</div>
</div>