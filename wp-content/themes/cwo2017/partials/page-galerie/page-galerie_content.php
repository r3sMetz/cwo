<main class="container page-galerie_content">
	<?$gallery = get_field('galerie_bearbeiten');?>
	<?foreach($gallery as $image):?>
		<img data-source="<?=$image['url'];?>" src="<?=$image['sizes']['medium_large'];?>" alt="<?=$image['name'];?>">
	<?endforeach;?>
</main>

<aside class="page-galerie_content_detail">
    <span class="close cwo-btn cwo-btn-red">Schliessen</span>
    <div class="loading">
        <img src="<?=get_theme_file_uri('/assets/img/svg/cap.svg');?>" alt="CWO - Horst Cap">
    </div>
    <div class="showImage" style="display: none;">

    </div>
</aside>