<div class="fullPageWrapper">
	<div class="page-bilder_content bg-std fullPageElement bg-crowd flexed_center">
        <div class="container">

		    <!-- Gallery Thumbs -->
            <div class="galery_wrapper puffer-both-xl">
            <?php for($i=0;$i<=10;$i++):?>
            <?php foreach(cwo_getGaleries() as $galery):?>
            <a href="<?php echo $galery['url'];?>" class="single_galery text-center fadeLink">
                <img src="<?php echo $galery['thumb'];?>" alt="<?php echo $galery['title'];?>">
                <h3 class="font-demon fontsize-headline gap-top-sm"><?php echo $galery['title'];?></h3>
            </a>
            <?php endforeach;?>
            <?php endfor;?>
            </div>
        </div>
	</div>
</div>