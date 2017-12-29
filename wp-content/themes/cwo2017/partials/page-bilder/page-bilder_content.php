<div class="fullPageWrapper">
	<div class="page-bilder_content bg-std fullPageElement bg-fired">
        <div class="container">

		    <!-- Gallery Thumbs -->
            <div class="galery_wrapper  puffer-both-xl">
            <?php foreach(cwo_getGaleries() as $galery):?>
            <a href="<?php echo $galery['url'];?>" class="single_galery text-center">
                <img src="<?php echo $galery['thumb'];?>" alt="<?php echo $galery['title'];?>">
                <h3 class="font-demon fontsize-headline gap-top-sm"><?php echo $galery['title'];?></h3>
            </a>
            <?php endforeach;?>
            </div>
        </div>
	</div>
</div>