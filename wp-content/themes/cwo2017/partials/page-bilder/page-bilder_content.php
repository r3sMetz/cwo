<div class="fullPageWrapper">
	<div class="page-bilder_content bg-std flexed_center">
        <div class="container">
            <div class="col-md-12 the_galleries">
                <?//TODO: METZ: Remove Index before Launch?>
                <?for($index=0;$index<3;$index++):?>
                <?foreach(cwo_getGaleries() as $key => $galery):?>
                    <div class="single_gallery" data-url="<?=$galery['url'];?>">
                        <div class="single_gallery_inner">
                            <div class="single_gallery_text">
                                <h3 class="font-heat fontsize-bigger"><?=$galery['title'];?></h3>
                                <img class="hidden-xs" src="<?=CWO_PNG_URI;?>/eye_icon.png" alt="CWO Show Gallery">
                            </div>
                        </div>
                    </div>
                <?endforeach;?>
                <?endfor;?>
            </div>
        </div>
	</div>
</div>