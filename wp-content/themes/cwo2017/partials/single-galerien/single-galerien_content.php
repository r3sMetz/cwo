<main class="single-galerien_content fullPageElement flexed_center" id="the_gallery_wrapper">
	<div class="container">
		<!-- Gallery Overview -->
		<div class="row gap-bottom-md">
			<div class="col-md-12">
				<div class="gallery_wrapper">
				<?php foreach(get_field('galerie_verwalten') as $key=>$image):?>
					<img class="single_slide_image" data-key="<?php echo $key;?>" src="<?php echo $image['url'];?>" alt="<?php the_title();?>">
				<?php endforeach;?>
				</div>
			</div>
		</div>
		<!-- Go Back -->
		<aside class="row gap-bottom-md">
            <div class="col-md-12">
                <a href="<?=get_permalink(15);?>" class="fadeLink cwo-btn cwo-btn-red"><i class="glyphicon glyphicon-circle-arrow-left"></i> Alle Galerien</a>
            </div>
        </aside>
	</div>
</main>