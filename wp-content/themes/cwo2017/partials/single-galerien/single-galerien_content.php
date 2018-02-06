<div class="single-galerien_content fullPageElement flexed_center puffer-both-xxl margin-top-mobile" id="the_gallery_wrapper">
	<div class="container">
	    <div class="row gap-bottom-sm">
	        <div class="col-md-12">
                <h1 class="font-demon fontsize-headline-big"><?php the_title();?></h1>
            </div>
        </div>
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
	</div>
</div>