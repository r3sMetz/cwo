<main class="container page-galerie_content">
	<?$gallery = get_field('galerie_bearbeiten');?>
	<?foreach($gallery as $image):?>
		<img data-source="<?=$image['url'];?>" src="<?=$image['sizes']['medium_large'];?>" alt="<?=$image['name'];?>">
	<?endforeach;?>
</main>