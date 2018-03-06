<div class="fullPageWrapper">
	<div class="page-bilder_content bg-std flexed_center">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 the_galleries">
                <?for($i=0;$i<3;$i++):?>
                <?foreach(cwo_getGaleries() as $galery):?>
                    <div class="single_gallery" data-url="<?=$galery['url'];?>">
                        <div class="single_gallery_inner" style="background-image:url(<?=$galery['thumb'];?>)">
                            <div class="single_gallery_text">
                                <h3 class="font-demon"><?=$galery['title'];?></h3>
                                <img src="<?=CWO_PNG_URI;?>/eye_icon.png" alt="CWO Show Gallery">
                            </div>
                        </div>
                    </div>
                <?endforeach;?>
                <?endfor;?>
            </div>
        </div>
	</div>
</div>