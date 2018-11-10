<div class="container">
	<?php foreach(get_field('dienstplane_verwalten') as $plan):?>
	<article class="gap-top-md gap-bottom-xl">
		<h2 class="font-heat fontsize-headline gap-bottom-sm"><?php echo $plan['veranstaltung'];?></h2>
		<a target="_blank" href="<?php echo $plan['datei'];?>" class="cwo-btn cwo-btn-red">Zum Dienstplan</a>
	</article>
	<?php endforeach;?>
</div>
