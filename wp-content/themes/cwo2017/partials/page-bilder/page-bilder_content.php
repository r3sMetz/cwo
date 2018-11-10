<main class="container page-bilder_content">
	<?php $gallery = get_field('galerie_bearbeiten');?>
	<?php foreach($gallery as $image):?>
		<img data-source="<?php echo $image['url'];?>" src="<?php echo $image['sizes']['medium_large'];?>" alt="<?php echo $image['name'];?>">
	<?php endforeach;?>
</main>

<aside class="page-bilder_content_detail">
    <span class="close cwo-btn cwo-btn-red">Schliessen</span>
    <div class="loading">
        <img src="<?php echo get_theme_file_uri('/assets/img/svg/cap.svg');?>" alt="CWO - Horst Cap">
    </div>
    <div class="showImage" style="display: none;">

    </div>
</aside>